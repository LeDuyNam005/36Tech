<?php
// edit_user.php
require_once '../auth/connect.php';
require_once '../auth/auth.php';
requireAdmin();

$mess = '';
$edit_id = '';
$user_data = [];

// 1. Kiểm tra xem có ID trên URL không
if (isset($_GET['id'])) {
    $edit_id = intval($_GET['id']);

    // Lấy thông tin user hiện tại để điền vào form
    $sql = "SELECT * FROM users WHERE id = $edit_id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $user_data = mysqli_fetch_assoc($result);
    } else {
        die("Không tìm thấy người dùng này!");
    }
} else {
    header("Location: dashboard.php");
    exit();
}

// 2. Xử lý khi bấm nút LƯU
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = trim($_POST['fullname']);
    $email    = trim($_POST['email']);
    $new_pass = trim($_POST['password']);

    if (empty($fullname) || empty($email)) {
        $mess = "<div class='alert error'>Tên và Email không được để trống!</div>";
    } else {
        // Logic cập nhật mật khẩu
        if (!empty($new_pass)) {
            if (strlen($new_pass) < 6) {
                $mess = "<div class='alert error'>Mật khẩu phải từ 6 ký tự!</div>";
            } else {
                $hashed_pass = password_hash($new_pass, PASSWORD_BCRYPT);
                $sql_update = "UPDATE users SET fullname='$fullname', email='$email', password='$hashed_pass' WHERE id=$edit_id";
            }
        } else {
            // Không đổi pass
            $sql_update = "UPDATE users SET fullname='$fullname', email='$email' WHERE id=$edit_id";
        }

        if (isset($sql_update) && empty($mess)) { // Chỉ chạy nếu không có lỗi validate
            if (mysqli_query($conn, $sql_update)) {
                $mess = "<div class='alert success'>Cập nhật thành công!</div>";
                // Cập nhật lại dữ liệu hiển thị
                $user_data['fullname'] = $fullname;
                $user_data['email'] = $email;
            } else {
                $mess = "<div class='alert error'>Lỗi hệ thống: " . mysqli_error($conn) . "</div>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thành viên</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="admin.css">

</head>

<body>

    <div class="form-container">
        <a href="dashboard.php" class="btn-back"><i class="fa-solid fa-arrow-left"></i> Quay lại danh sách</a>

        <h2 style="margin-top:0; color:#218080;">Chỉnh sửa thành viên</h2>

        <?= $mess ?>

        <form method="POST">
            <div class="form-group">
                <label>ID Thành viên</label>
                <input type="text" value="<?= $user_data['id'] ?>" disabled style="background:#eee;">
            </div>

            <div class="form-group">
                <label>Tên đăng nhập</label>
                <input type="text" value="<?= htmlspecialchars($user_data['username']) ?>" disabled style="background:#eee;">
            </div>

            <div class="form-group">
                <label>Họ và tên</label>
                <input type="text" name="fullname" value="<?= htmlspecialchars($user_data['fullname']) ?>" required>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?= htmlspecialchars($user_data['email']) ?>" required>
            </div>

            <div class="form-group">
                <label>Mật khẩu mới</label>
                <input type="password" name="password" placeholder="Để trống nếu không muốn đổi">
                <small style="color:#666">Chỉ nhập nếu bạn muốn đổi mật khẩu cho user này.</small>
            </div>

            <button type="submit" class="btn-save">Lưu thay đổi</button>
        </form>
    </div>

</body>

</html>
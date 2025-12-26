<?php
// add_user.php
require_once '../auth/connect.php';
require_once '../auth/auth.php';
requireAdmin();

$mess = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $fullname = trim($_POST['fullname']);
    $email    = trim($_POST['email']);
    $password = trim($_POST['password']);
    $role     = $_POST['role'];

    // Validate
    if (empty($username) || empty($fullname) || empty($email) || empty($password)) {
        $mess = "<div class='alert error'>Vui lòng nhập đầy đủ thông tin!</div>";
    } elseif (strlen($password) < 6) {
        $mess = "<div class='alert error'>Mật khẩu phải từ 6 ký tự!</div>";
    } else {
        // Kiểm tra xem Username hoặc Email đã tồn tại chưa
        $check = mysqli_query($conn, "SELECT id FROM users WHERE username='$username' OR email='$email'");

        if (mysqli_num_rows($check) > 0) {
            $mess = "<div class='alert error'>Tên đăng nhập hoặc Email đã tồn tại!</div>";
        } else {
            // Thêm mới
            $hashed_pass = password_hash($password, PASSWORD_BCRYPT);
            $sql = "INSERT INTO users (username, fullname, email, password, role, avatar) 
                    VALUES ('$username', '$fullname', '$email', '$hashed_pass', '$role', 'default-avatar.jpg')";

            if (mysqli_query($conn, $sql)) {
                $mess = "<div class='alert success'>Thêm thành viên <b>$username</b> thành công!</div>";
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
    <title>Thêm thành viên mới</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
</head>

<body>

    <div class="form-container">
        <a href="dashboard.php" class="btn-back"><i class="fa-solid fa-arrow-left"></i> Quay lại danh sách</a>

        <h2 style="margin-top:0; color:#28a745;">Thêm thành viên mới</h2>

        <?= $mess ?>

        <form method="POST">
            <div class="form-group">
                <label>Tên đăng nhập (Username) <span style="color:red">*</span></label>
                <input type="text" name="username" required placeholder="VD: nguyenvanan">
            </div>

            <div class="form-group">
                <label>Họ và tên <span style="color:red">*</span></label>
                <input type="text" name="fullname" required placeholder="VD: Nguyễn Văn An">
            </div>

            <div class="form-group">
                <label>Email <span style="color:red">*</span></label>
                <input type="email" name="email" required placeholder="admin@example.com">
            </div>

            <div class="form-group">
                <label>Mật khẩu <span style="color:red">*</span></label>
                <input type="password" name="password" required placeholder="******">
            </div>

            <div class="form-group">
                <label>Vai trò</label>
                <select name="role">
                    <option value="user">User (Thành viên)</option>
                    <option value="admin">Admin (Quản trị viên)</option>
                </select>
            </div>

            <button type="submit" class="btn-save">Thêm thành viên</button>
        </form>
    </div>

</body>

</html>
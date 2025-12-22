<?php
require_once 'connect.php';
require_once 'auth.php';
require_once '../../public/config.php';
requireLogin();

$mess = '';
$user_id = $_SESSION['user_id'];
$error = false;

// Lấy thông tin hiện tại của user
$sql = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Cập nhật Họ tên
    $fullname = trim($_POST['fullname']);

    // Cập nhật password
    $newpw = trim($_POST['newpw']);
    if (!empty($newpw)) {
        if (strlen($newpw) < 6) {
            $mess .= 'Mật khẩu mới có ít nhất 6 kí tự ! <br> ';
            $error = true;
        } else {
            $hashedPassword = password_hash($newpw, PASSWORD_BCRYPT);
            $sql_update = "UPDATE users SET password = '$hashedPassword' WHERE id = " . $user['id'] . " LIMIT 1";
            if (mysqli_query($conn, $sql_update)) {
                $mess  .= 'Đã đổi mật khẩu thành công! <br>';
            } else {
                $mess = 'Lỗi cập nhật mật khẩu!';
                $error = true;
            }
        }
    }

    // Xử lý Upload Avatar
    if (!$error) {
        $avatar_db = $user['avatar']; // (avatar cũ)

        if (isset($_FILES['avatar']) && $_FILES['avatar']['size'] > 0) {
            $target_dir = '../../public/assets/image/';
            $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

            // Kiểm tra file có phải ảnh không
            $check = getimagesize($_FILES["avatar"]["tmp_name"]);
            if ($check === false) {
                $mess .= "File không phải ảnh hợp lệ";
                $uploadOk = 0;
            }

            // Kiểm tra kích thước file
            if ($_FILES["avatar"]["size"] > 5000000) {
                $mess .= "File quá lớn";
                $uploadOk = 0;
            }

            // Cho phép các định dạng file ảnh nhất định
            if (
                $imageFileType != "jpg" && $imageFileType != "png"
                && $imageFileType != "jpeg" && $imageFileType != "gif"
            ) {
                $mess .= "Chỉ những file JPG, JPEG, PNG & GIF mới được chấp nhận. <br>";
                $uploadOk = 0;
            }

            // Upload file nếu hợp lệ
            if ($uploadOk == 1) {
                if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                    // Lưu tên file mới để update vào DB
                    $avatar_db = basename($_FILES["avatar"]["name"]);

                    // Cập nhật lại Session để hiển thị ngay trên Header
                    $_SESSION['avatar'] = $avatar_db;
                } else {
                    $mess .= "Lỗi khi tải file lên ! <br>";
                }
            }
        }

        // Update dữ liệu vào Database
        if (!isset($uploadOk) || $uploadOk == 1) {
            $sql_update = "UPDATE users SET fullname = '$fullname', avatar = '$avatar_db' WHERE id = $user_id";
            if (mysqli_query($conn, $sql_update)) {
                $_SESSION['fullname'] = $fullname;
                $mess .= "Cập nhật hồ sơ thành công! <br>";
                // hiển thị ảnh ngay lập tức
                $user['fullname'] = $fullname;
                $user['avatar'] = $avatar_db;
            } else {
                $mess = "Lỗi Database: " . mysqli_error($conn) . "<br>";
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
    <title>Hồ sơ cá nhân</title>
    <link rel="stylesheet" href="<?= AUTH ?>/auth/css/login-module.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?= AUTH ?>/auth/css/profile.css">
    <style>

    </style>
</head>

<body class="admin-page">
    <div class="admin-container" style="max-width: 500px; margin-top: 50px; background-color: #f0f0f0ff; border-radius: 10px; border: 1px solid #86dbff; ">
        <form method="POST" enctype="multipart/form-data" class="auth-form" style="width: 100%; padding: 30px 0px;">

            <div class="profile-header">
                <h3>Hồ sơ cá nhân</h3>
            </div>

            <div class="avatar-wrapper">
                <?php
                // Xử lý hiển thị ảnh
                $avt = !empty($user['avatar']) ? $user['avatar'] : 'default-avatar.jpg';
                ?>
                <img src="<?= IMG . $avt ?>" class="avatar-img" id="avatar-preview">

                <label for="file-input" class="btn-upload-icon">
                    <i class="fa-solid fa-camera"></i>
                </label>
                <input type="file" name="avatar" id="file-input" accept="image/*" onchange="previewImage(this)">
            </div>

            <div style="text-align: center; margin-bottom: 20px;">
                <span class="badge badge-<?= $user['role'] == 'admin' ? 'admin' : 'user' ?>">
                    <?= $user['role'] == 'admin' ? 'Quản trị viên' : 'Thành viên' ?>
                </span>
            </div>

            <div class="input">Tên đăng nhập</div>
            <input type="text" value="<?= htmlspecialchars($user['username']) ?>" class="readonly-field" readonly>

            <div class="input">Email</div>
            <input type="text" value="<?= htmlspecialchars($user['email']) ?>" class="readonly-field" readonly>

            <div class="input">Họ và tên</div>
            <input type="text" name="fullname" id="fullname" value="<?= htmlspecialchars($user['fullname']) ?>" required>

            <div class="input">Mật khẩu</div>
            <input type="password" name="newpw" id="newpw" placeholder="Bỏ trống nếu không muốn thay đổi">

            <button type="submit" class="login-button">Lưu thay đổi</button>

            <div class="form-footer">
                <a href="../../public/index.php"><i class="fa-solid fa-arrow-left"></i> Quay lại trang chủ</a>
            </div>
            <br>
            <div class="noti" style="margin: auto; align-self: center; display: flex; justify-content: center; color:red;">
                <?= $mess ?>
            </div>

        </form>
    </div>

    <script>
        function previewImage(input) {
            // Nếu có file được chọn
            if (input.files && input.files[0]) {
                // Tạo một đường dẫn ảo (blob URL) cho file đó và gán vào thẻ img
                document.getElementById('avatar-preview').src = URL.createObjectURL(input.files[0]);
            }
        }
    </script>
</body>

</html>
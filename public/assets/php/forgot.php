<?php
session_start();
require 'connect.php';

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $newpw = isset($_POST['newpw']) ? trim($_POST['newpw']) : '';

    // Validation
    $errors = [];

    if (empty($username)) $errors[] = 'Nhập tên tài khoản';
    if (empty($email)) $errors[] = 'Nhập email';
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Email không hợp lệ';

    if (empty($newpw)) $errors[] = 'Nhập mật khẩu mới';
    else if (strlen($newpw) < 6)  $errors[] = 'Mật khẩu mới ít nhất 6 ký tự';

    if (!empty($errors)) {
        $error = implode(' & ', $errors);
    } else {
        // 1. Tìm user theo username + email
        $sql = "SELECT id FROM users WHERE username = '$username' AND email = '$email'LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if (!$result || mysqli_num_rows($result) === 0) {
            $error = 'Tên đăng nhập hoặc email không đúng!';
        } else {
            $user = mysqli_fetch_assoc($result);
            // hash pw mới
            $hashedPassword = password_hash($newpw, PASSWORD_BCRYPT);
            // update pw
            $sql_update = "UPDATE users SET password = '$hashedPassword' WHERE id = " . $user['id'] . "LIMIT 1";

            if (mysqli_query($conn, $sql_update)) {
                $success  = 'Đã đổi mật khẩu thành công! Vui lòng đăng nhập lại.';
                $redirect = true;
            } else {
                $error = 'Lỗi cập nhật mật khẩu!';
            }
        }

        if ($result) {
            mysqli_free_result($result);
        }
    }
}
?>
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Quên mật khẩu - 36Tech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/login-module.css">
</head>

<body>
    <form id="forgot-form" method="POST" autocomplete="off" onsubmit="handleForgot(event)" class="auth-form auth-form--forgot">
        <div class="logo">
            <img width="75" height="75" src="../image/logo36Tech.png" alt="36Tech" />
        </div>
        <h3>Quên mật khẩu</h3>
        <label for="username">Tên đăng nhập</label>
        <input id="username" name="username" type="text" placeholder="Tên đăng nhập">
        <label for="email">Email đăng ký</label>
        <input id="email" name="email" type="email" placeholder="Email đã đăng ký">
        <label for="newpw">Mật khẩu mới</label>
        <input id="newpw" name="newpw" type="password" placeholder="Mật khẩu mới">
        <button type="button" id="forgotBtn" class="login-button" onclick="handleForgot(event)"> Đổi mật khẩu
        </button>

        <div class="form-footer">
            <a href="login.php">Đăng nhập</a>
            <span> · </span>
            <a href="register.php">Đăng ký</a>
        </div>

    </form>
</body>

    <script src="../js/forgot.js"></script>
    <script>
        // có lỗi -> hiển thị thông báo
        <?php 
        if ($error): ?>
            window.addEventListener('DOMContentLoaded', function() {
                showToast('error', '<?php echo addslashes($error); ?>');
            });
        <?php endif; ?>

        // nếu hiển thị thông báo thành công -> chuyển hướng
        <?php if ($success && isset($redirect)): ?>
            window.addEventListener('DOMContentLoaded', function() {
                showToast('success', '<?php echo addslashes($success); ?>');
                setTimeout(() => {
                    window.location.href = 'login.php';
                }, 1500);
            });
        <?php endif; ?>
    </script>
</body>

</html>
<?php
session_start();
require 'connect.php';

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullname = trim($_POST['fullname'] ?? '');
    $email    = trim($_POST['email'] ?? '');
    $username = trim($_POST['username'] ?? '');
    $password = trim($_POST['password'] ?? '');
    $repass   = trim($_POST['repass'] ?? '');

    // Validate
    $errors = [];
    if ($fullname === '')    $errors[] = 'Nhập họ và tên';
    if ($email === '')       $errors[] = 'Nhập email';
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Email không hợp lệ';

    if ($username === '')    $errors[] = 'Nhập tên tài khoản';
    elseif (strlen($username) < 3) $errors[] = 'Tài khoản ít nhất 3 ký tự';

    if ($password === '')    $errors[] = 'Nhập mật khẩu';
    elseif (strlen($password) < 6) $errors[] = 'Mật khẩu ít nhất 6 ký tự';

    if ($repass === '')      $errors[] = 'Nhập lại mật khẩu';
    elseif ($password !== $repass) $errors[] = 'Mật khẩu nhập lại không khớp';

    if (!empty($errors)) {
        $error = implode(' & ', $errors);
    } else {
        // kiểm tra trùng
        $sql = "SELECT id FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $error = 'Tài khoản hoặc email đã tồn tại!';
        } else {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $sql = "INSERT INTO users (fullname, email, username, password)
                VALUES ('$fullname', '$email', '$username', '$hashedPassword') ";

            if (mysqli_query($conn, $sql)) {
                $success  = 'Đăng ký thành công! Vui lòng đăng nhập.';
                $redirect = true;
            } else {
                $error = 'Lỗi khi đăng ký!';
            }
        }
        if ($result) {
            mysqli_free_result($result);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký tài khoản - 36Tech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/login-module.css">
</head>
<body>
    <form id="register-form"
          method="POST"
          autocomplete="off"
          onsubmit="handleRegister(event)"
          class="auth-form auth-form--register">

        <div class="logo">
            <img width="75" height="75" src="../image/logo36Tech.png" alt="36Tech" />
        </div>

        <h3>Đăng ký tài khoản mới</h3>

        <!-- Họ tên + Email: 2 cột -->
        <div class="form-row">
            <div class="form-field">
                <label for="fullname">Họ và tên</label>
                <input id="fullname" name="fullname"
                       placeholder="Họ và tên" type="text">
            </div>

            <div class="form-field">
                <label for="email">Email</label>
                <input id="email" name="email"
                       placeholder="Email" type="email">
            </div>
        </div>

        <!-- Tên tài khoản: 1 hàng full -->
        <label for="username">Tên tài khoản</label>
        <input id="username" name="username"
               placeholder="Tên tài khoản" type="text">

        <!-- Mật khẩu + Nhập lại: 2 cột -->
        <div class="form-row">
            <div class="form-field">
                <label for="password">Mật khẩu</label>
                <input id="password" name="password"
                       placeholder="Mật khẩu" type="password">
            </div>

            <div class="form-field">
                <label for="repass">Nhập lại mật khẩu</label>
                <input id="repass" name="repass"
                       placeholder="Nhập lại mật khẩu" type="password">
            </div>
        </div>

        <button type="submit" id="registerBtn" class="login-button">
            Đăng ký
        </button>

        <div class="form-footer">
            Đã có tài khoản? <a href="login.php">Đăng nhập</a>
        </div>
    </form>
    <script src="../js/register.js"></script>
    <script>
        // Hiển thị notification nếu có lỗi từ PHP
        <?php if ($error): ?>
            window.addEventListener('DOMContentLoaded', function() {
                showToast('error', '<?php echo addslashes($error); ?>');
            });
        <?php endif; ?>

        // Hiển thị notification thành công rồi redirect
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

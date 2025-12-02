<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
require 'connect.php';

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = isset($_POST['username']) ? trim($_POST['username']) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';

    // Validation
    $errors = [];

    if (empty($username)) 
        $errors[] = 'Nhập tên tài khoản';
    if (empty($password)) 
        $errors[] = 'Nhập mật khẩu';
    if (!empty($errors)) {
        $error = implode(' | ', $errors);
    } else {
        // Tìm user
        $find = $conn->prepare("SELECT id, fullname, email, password FROM users WHERE username = ? LIMIT 1");
        $find->bind_param("s", $username);
        $find->execute();
        $result = $find->get_result();

        if ($result->num_rows === 0) {
            $error = 'Tên đăng nhập hoặc mật khẩu không đúng!';
        } else {
            $user = $result->fetch_assoc();

            // kiểm tra pw
            if (!password_verify($password, $user['password'])) {
                $error = 'Tên đăng nhập hoặc mật khẩu không đúng!';
            } else {
                // đăng nhập thành công -> lưu session
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $username;
                $_SESSION['fullname'] = $user['fullname'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['login_time'] = date('d/m/Y H:i:s');

                // lưu cookie 5 phút
                $token = bin2hex(random_bytes(16));
                setcookie('auth_token', $token, time() + 5*60, '/', '', false, true);
                setcookie('username', $username, time() + 5*60, '/', '', false, false);
                $success = 'Đăng nhập thành công!';
                $redirect = true;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <title>Đăng nhập - 36Tech</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/login-module.css">
</head>
<body>
    <form id="login-form" method="POST" autocomplete="off" onsubmit="handleLogin(event)" class="auth-form auth-form--login">
        <div class="logo">
            <img width="75" height="75" src="../image/logo36Tech.png" alt="36Tech" />
        </div>

        <h3>Đăng nhập vào 36Tech</h3>
        <p class="warn">
            Mỗi người nên sử dụng riêng một tài khoản, tài khoản nhiều người sử dụng chung sẽ bị khoá!
        </p>

        <label for="username">Tên đăng nhập</label>
        <input id="username" name="username" placeholder="Email, SĐT hoặc username" type="text">
        <label for="password">Mật khẩu</label>
        <input id="password" name="password" placeholder="Mật khẩu" type="password">
        <button type="submit" class="login-button" id="loginBtn">
            Đăng nhập
        </button>

        <div class="form-footer">
            <a href="forgot.php">Quên mật khẩu?</a>
            <span> · </span>
            <span>Chưa có tài khoản? <a href="register.php">Đăng ký</a></span>
        </div>

        <p class="terms">
            Việc bạn tiếp tục sử dụng trang web này đồng nghĩa bạn đồng ý với
            <a href="#">điều khoản sử dụng</a> của chúng tôi.
        </p>
    </form>
    <script src="../js/login.js"></script>
    <script>
        // Hiển thị notification nếu có lỗi từ PHP
        <?php 
        if ($error): ?>
            window.addEventListener('DOMContentLoaded', function() {
                showToast('error', '<?php echo addslashes($error); ?>');
            });
        <?php endif; ?>
        // Hiển thị notification thành công rồi redirect
        <?php 
        if ($success && isset($redirect)): ?>
            window.addEventListener('DOMContentLoaded', function() {
                showToast('success', '<?php echo addslashes($success); ?>');
                setTimeout(() => {
                    window.location.href = 'dashboard.php';
                }, 1500);
            });
        <?php endif; ?>
    </script>
</body>
</html>

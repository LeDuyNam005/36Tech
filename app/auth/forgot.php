<?php
session_start();
require 'connect.php';
require_once 'mail.php';

$error = '';
$success = '';
$ok = false;

// --- 1. XỬ LÝ GỬI OTP ---
if (isset($_POST['req_otp'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);

    if (empty($username) && (empty($email))) {
        $error = 'Vui lòng nhập tên đăng nhập và email !';
    } else if (empty($username)) {
        $error = 'Vui lòng nhập tên đăng nhập !';
    } else if (empty($email)) {
        $error = 'Vui lòng nhập email !';
    } else {
        $sql = "SELECT id, email FROM users WHERE username = '$username' AND email = '$email' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $user = mysqli_fetch_assoc($result);

        if ($user) {
            $otp = rand(100000, 999999);
            // Gửi OTP
            if (sendOTP($email, $otp)) {
                $_SESSION['reset_otp'] = $otp;
                $_SESSION['user_id'] = $user['id'];
                $ok = true;
                $success = "Đã gửi mã OTP. Vui lòng kiểm tra email !";
            } else {
                $error = "Lỗi gửi mail. Hãy thử lại !";
            }
        } else {
            $error = "Tên đăng nhập hoặc Email không chính xác !";
        }
    }
}

// --- 2. XỬ LÝ ĐỔI PASS ---
elseif (isset($_POST['confirm'])) {
    $ok = true;
    $otp_input = trim($_POST['otp_code']);
    $newpw = trim($_POST['newpw']);

    if ($otp_input != $_SESSION['reset_otp']) {
        $error = 'Mã OTP không đúng!';
    } elseif (strlen($newpw) < 6) {
        $error = 'Mật khẩu mới phải từ 6 ký tự trở lên!';
    } else {
        $user_id = $_SESSION['user_id'];
        $hashedPassword = password_hash($newpw, PASSWORD_BCRYPT);
        $sql_update = "UPDATE users SET password = '$hashedPassword' WHERE id = $user_id";

        if (mysqli_query($conn, $sql_update)) {
            $success = 'Đổi mật khẩu thành công! Đang chuyển trang...';
            unset($_SESSION['reset_otp']);
            unset($_SESSION['user_id']);
            echo '<script>setTimeout(function(){ window.location.href="login.php"; }, 2000);</script>';
        } else {
            $error = 'Lỗi !';
        }
    }
}


$style = "";
$mess = "";

if (!empty($error)) {
    $mess = $error;
    $style = "color: #dc3545; font-weight: bold;";
} elseif (!empty($success)) {
    $mess = $success;
    $style = "color: #28a745; font-weight: bold;";
} else {
    if (!$ok) {
        $mess = "Nhập tài khoản và email để nhận mã xác thực.";
    } else {
        $mess = "Vui lòng kiểm tra email và nhập mã OTP.";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>Quên mật khẩu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/login-module.css">
</head>

<body>

    <form method="POST" autocomplete="off" class="auth-form auth-form--forgot">
        <br>
        <div class="logo">
            <img width="75" height="75" src="../../public/assets/image/logo36Tech.png" />
        </div>

        <h3>Quên mật khẩu</h3>

        <p class="warn" style="<?php echo $style; ?>">
            <?php echo $mess; ?>
        </p>

        <?php if (!$ok) { ?>
            <label>Tên đăng nhập</label>
            <input name="username" type="text" placeholder="Tên đăng nhập">

            <label>Email đăng ký</label>
            <input name="email" type="email" placeholder="Email">

            <button type="submit" name="req_otp" class="login-button">Gửi mã OTP</button>

        <?php
        } else {
        ?>
            <label>Mã OTP (6 số)</label>
            <input name="otp_code" type="text" placeholder="Nhập mã OTP" style="text-align: center; font-weight: bold;">

            <label>Mật khẩu mới</label>
            <input name="newpw" type="password" placeholder="Nhập mật khẩu mới">

            <button type="submit" name="confirm" class="login-button">Lưu mật khẩu</button>

        <?php } ?>

        <div class="form-footer">
            <a href="login.php">Đăng nhập</a> | <a href="register.php">Đăng ký</a>
        </div>
        <br>
    </form>

</body>

</html>
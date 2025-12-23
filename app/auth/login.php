<?php
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
        $error = implode(' & ', $errors);
    } else {
        $sql = "SELECT id, fullname, email, password, role, avatar FROM users WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $sql);

        if (!$result || mysqli_num_rows($result) === 0) {
            $error = 'Tên đăng nhập hoặc mật khẩu không đúng!';
        } else {
            $user = mysqli_fetch_assoc($result);

            // kiểm tra pw đã hash
            if (!password_verify($password, $user['password'])) {
                $error = 'Tên đăng nhập hoặc mật khẩu không đúng!';
            } else {
                // lưu session
                $_SESSION['user_id']    = $user['id'];
                $_SESSION['username']   = $username;
                $_SESSION['fullname']   = $user['fullname'];
                $_SESSION['email']      = $user['email'];
                $_SESSION['login_time'] = date('d/m/Y H:i:s');
                $_SESSION['avatar'] =  $user['avatar'] ?? '../image/default-avatar.jpg';
                $_SESSION['role'] =  $user['role'];

                // lưu cookie 5 phút
                $token = bin2hex(random_bytes(16));
                setcookie('auth_token', $token, time() + 5 * 60, '/', '', false, true);
                setcookie('username', $username, time() + 5 * 60, '/', '', false, false);
                $success  = "Đăng nhập thành công! Xin chào " . $username;
                $redirect = true;
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
    <title>Đăng nhập - 36Tech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login-module.css">
</head>

<body>
    <form id="login-form" method="POST" autocomplete="off" onsubmit="handleLogin(event)" class="auth-form auth-form--login">
        <br>
        <div class="logo">
            <img width="75" height="75" src="../../public/assets/image/logo36Tech.png" alt="36Tech" />
        </div>

        <h3>Đăng nhập vào 36Tech</h3>
        <p class="warn">
            Mỗi người nên sử dụng riêng một tài khoản, tài khoản nhiều người sử dụng chung sẽ bị khoá!
        </p>

        <label for="username">Tên đăng nhập</label>
        <input id="username" name="username" placeholder="Username mà bạn đăng ký" type="text">
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
            <a href="./html/termofservices.html">điều khoản sử dụng</a> của chúng tôi.
        </p>
        <br>
    </form>
    <script src="./js/login.js"></script>
    <script>
        // Nếu PHP trả về lỗi
        <?php if (!empty($error)): ?>
            showMessage("<?php echo $error; ?>", true); // true -> Chữ màu đỏ
        <?php endif; ?>

        // Nếu PHP trả về thành công
        <?php if (!empty($success)): ?>
            showMessage("<?php echo $success; ?>", false); // false -> Chữ màu xanh

            // Chuyển trang sau 1.36 giây
            setTimeout(function() {
                window.location.href = '../../public/index.php';
            }, 1360);
        <?php endif; ?>
    </script>
</body>

</html>
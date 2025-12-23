<?php
session_start();

// Xử lý khi người dùng bấm nút "Đồng ý"
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirm'])) {
    session_unset();
    session_destroy();
    setcookie('auth_token', '', time() - 3600, '/', '', false, true);
    setcookie('username', '', time() - 3600, '/', '', false, false);

    header('Location: ../../public/index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng xuất</title>
    <link rel="stylesheet" href="./css/login-module.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: #f0f2f5;
            margin: 0;
            font-family: sans-serif;
        }

        .logout-box {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .btn-group {
            margin-top: 20px;
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-yes {
            background: #dc3545;
            color: white;
        }

        .btn-no {
            background: #6c757d;
            color: white;
            text-decoration: none;
            display: inline-block;
        }
    </style>
</head>

<body>

    <div class="logout-box">
        <h3>Bạn có chắc chắn muốn đăng xuất?</h3>

        <form method="POST">
            <div class="btn-group">
                <a href="../../public/index.php" class="btn btn-no">Hủy bỏ</a>

                <button type="submit" name="confirm" value="yes" class="btn btn-yes">Đăng xuất</button>
            </div>
        </form>
    </div>

</body>

</html>
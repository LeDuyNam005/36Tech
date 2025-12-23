<?php

require_once '../auth/connect.php';
require_once '../auth/auth.php';

requireAdmin();
$mess = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // xoá
    if (isset($_POST['delete_id'])) {
        $del_id = intval($_POST['delete_id']);

        // không tự xoá chính tài khoản sử dụng
        if ($del_id == $_SESSION['user_id']) {
            $mess = "<div class='alert error'>Không thể tự xóa tài khoản đang đăng nhập!</div>";
        } else {
            $sql = "DELETE FROM users WHERE id = $id";

            if (mysqli_query($conn, $sql)) {
                $mess = "<div class='alert success'>Đã xóa thành viên thành công!</div>";
            } else {
                $mess = "<div class='alert error'>Lỗi xóa: " . mysqli_error($conn) . "</div>";
            }
        }
    }

    // đổi role admin- user
    if (isset($_POST['change_role_id']) && isset($_POST['new_role'])) {
        $role_id  = intval($_POST['change_role_id']);
        $new_role = $_POST['new_role'];

        // không tự đổi chính tài khoản sử dụng
        if ($role_id == $_SESSION['user_id'] && $new_role == 'user') {
            $mess = "<div class='alert error'>Bạn không thể tự hạ quyền Admin của mình!</div>";
        } else {
            $sql_role = "UPDATE users SET role = '$new_role' WHERE id = $role_id";

            if (mysqli_query($conn, $sql_role)) {
                $mess = "<div class='alert success'>Đã cập nhật quyền thành công!</div>";
            } else {
                $mess = "<div class='alert error'>Lỗi cập nhật: " . mysqli_error($conn) . "</div>";
            }
        }
    }
}
$sql = "SELECT * FROM users ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị thành viên</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f4f6f8;
            margin: 0;
            color: #333;
        }

        .admin-container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .header-admin {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .btn-home {
            text-decoration: none;
            color: #218080;
            font-weight: 600;
            border: 1px solid #218080;
            padding: 8px 15px;
            border-radius: 5px;
        }

        .card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            overflow: hidden;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 15px 20px;
            text-align: left;
            border-bottom: 1px solid #eee;
        }

        .badge {
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .badge-admin {
            background: #e3f2fd;
            color: #1976d2;
        }

        .badge-user {
            background: #f3f3f3;
            color: #666;
        }

        .btn-delete {
            color: #ff6b6b;
            border: none;
            background: none;
            cursor: pointer;
            font-size: 1.1rem;
        }

        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .success {
            background: #d4edda;
            color: #155724;
        }

        .error {
            background: #f8d7da;
            color: #721c24;
        }
    </style>
</head>

<body>
    <div class="admin-container">
        <div class="header-admin">
            <div>
                <h1>Dashboard Admin</h1>
                <p>Xin chào, <strong><?= htmlspecialchars($_SESSION['fullname']) ?></strong></p>
            </div>
            <a href="../../public/index.php" class="btn-home"><i class="fa-solid fa-arrow-left"></i> Về trang chủ</a>
        </div>

        <?= $mess ?>

        <div class="card">
            <div style="padding: 20px;">
                <h2>Quản lý thành viên</h2>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Ngày tạo</th>
                        <th>Vai trò</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= htmlspecialchars($row['username']) ?></td>
                            <td><?= htmlspecialchars($row['email']) ?></td>
                            <td><?= htmlspecialchars($row['created_at']) ?></td>
                            <td>
                                <form method="POST" style="display:inline;">
                                    <input type="hidden" name="change_role_id" value="<?= $row['id'] ?>">
                                    <select name="new_role" onchange="submit()" style="padding: 5px;"
                                        <?= ($row['id'] == $_SESSION['user_id']) ? 'disabled' : '' ?>>
                                        <option value="user" <?= $row['role'] == 'user' ? 'selected' : '' ?>>User</option>
                                        <option value="admin" <?= $row['role'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                                    </select>
                                </form>
                            </td>
                            <td>
                                <?php
                                if ($row['id'] != $_SESSION['user_id']) { ?>
                                    <form method="POST" onsubmit="return confirm('Bạn có chắc chắn muốn xoá tài khoản này ?');">
                                        <input type="hidden" name="delete_id" value="<?= $row['id'] ?>">
                                        <button class="btn-delete"><i class="fa-solid fa-trash"></i></button>
                                    </form>
                                <?php } ?>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
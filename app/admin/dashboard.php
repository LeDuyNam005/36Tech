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
            $sql = "DELETE FROM users WHERE id = $del_id";

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
    <link rel="stylesheet" href="admin.css">
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
            <div style="padding: 20px; display: flex; justify-content: space-between; align-items: center;">
                <h2 style="margin: 0;">Quản lý thành viên</h2>

                <a href="add_user.php" class="btn-add">
                    <i class="fa-solid fa-user-plus"></i> Thêm thành viên
                </a>
            </div>

            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Họ tên</th>
                        <th>Email</th>
                        <th>Ngày tạo</th>
                        <th>Vai trò</th>
                        <th>Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?= $row['id'] ?></td>
                            <td><?= htmlspecialchars($row['username']) ?></td>
                            <td><?= htmlspecialchars($row['fullname']) ?></td>
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
                                <a href="edit_user.php?id=<?= $row['id'] ?>" class="btn-edit" title="Sửa"><i class="fa-solid fa-pen-to-square"></i></a>
                                <?php if ($row['id'] != $_SESSION['user_id']) { ?>
                                    <form method="POST" style="display:inline;" onsubmit="return confirm('Xoá thành viên này?');">
                                        <input type="hidden" name="delete_id" value="<?= $row['id'] ?>">
                                        <button class="btn-delete" title="Xoá"><i class="fa-solid fa-trash"></i></button>
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
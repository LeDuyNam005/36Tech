# 36Tech - Công cụ học lập trình 💻

**36Tech** là một ứng dụng web hỗ trợ học lập trình, bao gồm các chức năng quản lý người dùng, xác thực bảo mật và quản lý khóa học. Dự án được xây dựng bằng **PHP thuần (Native PHP)** theo mô hình cấu trúc rõ ràng, dễ phát triển.

## 🚀 Tính năng chính

- **Hệ thống xác thực (Authentication):**
- Đăng ký / Đăng nhập / Đăng xuất.
- Xác thực tài khoản qua **Email OTP** (sử dụng PHPMailer).
- Quên mật khẩu & Đặt lại mật khẩu an toàn.

- **Quản lý người dùng:**
- Cập nhật thông tin cá nhân.
- Thay đổi Avatar (Upload & xử lý ảnh).
- Đổi mật khẩu (Hash password với Bcrypt).

- **Giao diện:**
- Responsive Design (tương thích mobile/desktop).
- Sticky Form (giữ lại dữ liệu khi reload).

## 🛠️ Công nghệ sử dụng

- **Backend:** PHP (Native), MySQLi.
- **Frontend:** HTML5, CSS3, JavaScript (Vanilla).
- **Thư viện:** PHPMailer (Gửi email SMTP).
- **Database:** MySQL.

## ⚙️ Cài đặt & Chạy dự án

Để chạy dự án này trên máy cục bộ (Localhost), hãy làm theo các bước sau:

### 1. Clone dự án

```bash
git clone https://github.com/Lynx-1ST/36Tech-demo.git

```

Copy thư mục vừa clone vào thư mục `htdocs` (nếu dùng XAMPP) hoặc `www` (nếu dùng Laragon).

### 2. Cấu hình Database

1. Mở **phpMyAdmin**.
2. Tạo một cơ sở dữ liệu mới tên là `36tech_db` (hoặc tên tùy ý).
3. Import file `database.sql`

### 3. Cấu hình kết nối

Mở file `app/auth/connect.php` (hoặc đường dẫn file connect của bạn) và chỉnh sửa thông tin:

```php
$host = 'localhost';
$user = 'root';
$pass = ''; // Mật khẩu MySQL
$db   = ''; // Tên DB bạn vừa tạo
define('ASSETS', '../../public/assets'); // Đường dẫn assets

```

### 4. Cấu hình Email (SMTP)

Để chức năng gửi OTP hoạt động, mở file `app/auth/mail.php` và điền App Password của Gmail:

```php
$mail->Username = 'your_email@gmail.com';
$mail->Password = 'your_app_password'; // Mật khẩu ứng dụng

```

### 5. Khởi chạy

Mở trình duyệt và truy cập:
`http://localhost/36Tech-demo/`

---

## 📂 Cấu trúc thư mục

```
36Tech-demo/
├── app/
│   ├── auth/          # Xử lý Đăng nhập, Đăng ký, OTP
│   ├── admin/         # Trang quản trị
│   └── core/          # Kết nối DB, Config chung
├── public/
│   ├── assets/        # Hình ảnh, Logo
│   ├── css/           # CSS files
│   └── js/            # JavaScript files
├── database.sql       # File export CSDL
└── index.php          # Trang chủ

```

## 👨‍💻 Tác giả

- **Dự án đang được hoàn thiện, sẽ cập nhật sau ** -

---

_Dự án phục vụ mục đích học tập và nghiên cứu._

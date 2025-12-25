function showMessage(text, isError = true) {
  // Lấy thẻ p có class là warn
  var msgTag = document.querySelector(".warn");

  // 1. Thay đổi nội dung cũ bằng thông báo mới
  msgTag.innerHTML = text;

  // 2. Đổi màu chữ (Đỏ = Lỗi, Xanh = Thành công)
  msgTag.style.color = isError ? "red" : "green";
  msgTag.style.fontWeight = "bold";
}

function handleLogin(e) {
  e.preventDefault();
  var user = document.getElementById("username").value.trim();
  var pass = document.getElementById("password").value.trim();

  // Validate
  if (user == "") {
    showMessage("Vui lòng nhập tài khoản!");
    return;
  }

  if (pass == "") {
    showMessage("Vui lòng nhập mật khẩu!");
    return;
  }

  // Submit form
  document.getElementById("login-form").submit();
}

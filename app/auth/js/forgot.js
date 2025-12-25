function showMessage(text, isError = true) {
  var msgTag = document.querySelector(".warn");
  if (!msgTag) return;

  msgTag.innerHTML = text;
  msgTag.style.color = isError ? "red" : "green";
  msgTag.style.fontWeight = "bold";
  msgTag.style.display = "block";
}

function handleForgot(e) {
  e.preventDefault(); // Chặn reload

  var user = document.getElementById("username").value.trim();
  var mail = document.getElementById("email").value.trim();
  var newpw = document.getElementById("newpw").value.trim();

  // 1. Kiểm tra username
  if (user === "") {
    return showMessage("Vui lòng nhập tên tài khoản!", true);
  }

  // 2. Kiểm tra email
  if (mail === "") {
    return showMessage("Vui lòng nhập Email!", true);
  }
  // Validate định dạng email đơn giản
  if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(mail)) {
    return showMessage("Email không hợp lệ!", true);
  }

  // 3. Kiểm tra mật khẩu mới
  if (newpw === "") {
    return showMessage("Vui lòng nhập mật khẩu mới!", true);
  }
  if (newpw.length < 6) {
    return showMessage("Mật khẩu mới phải từ 6 ký tự trở lên!", true);
  }

  // Hợp lệ -> Submit form
  document.getElementById("forgot-form").submit();
}

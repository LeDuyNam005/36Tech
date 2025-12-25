function showMessage(text, isError = true) {
  var msgTag = document.querySelector(".warn");
  if (!msgTag) return;

  msgTag.innerHTML = text;
  msgTag.style.color = isError ? "red" : "green";
  msgTag.style.fontWeight = "bold";
  msgTag.style.display = "block";
}

function handleRegister(e) {
  e.preventDefault(); // Chặn reload trang

  // Lấy giá trị các ô input
  var fullname = document.getElementById("fullname").value.trim();
  var user = document.getElementById("username").value.trim();
  var email = document.getElementById("email").value.trim();
  var pass = document.getElementById("password").value.trim();
  var repass = document.getElementById("repass").value.trim();

  // 1. Kiểm tra Họ tên
  if (fullname === "") {
    return showMessage("Vui lòng nhập họ và tên!", true);
  }
  // 2. Kiểm tra Tài khoản
  if (user === "") {
    return showMessage("Vui lòng nhập tên tài khoản!", true);
  }
  if (user.length < 3) {
    return showMessage("Tài khoản phải từ 3 ký tự trở lên!", true);
  }

  // 3. Kiểm tra Email
  if (email === "") {
    return showMessage("Vui lòng nhập Email!", true);
  }

  // 4. Kiểm tra Mật khẩu
  if (pass === "") {
    return showMessage("Vui lòng nhập mật khẩu!", true);
  }
  if (pass.length < 6) {
    return showMessage("Mật khẩu phải từ 6 ký tự trở lên!", true);
  }

  // 5. Kiểm tra Nhập lại mật khẩu
  if (repass === "") {
    return showMessage("Vui lòng nhập lại mật khẩu!", true);
  }
  if (pass !== repass) {
    return showMessage("Mật khẩu nhập lại không khớp!", true);
  }

  // OK -> Submit form
  document.getElementById("register-form").submit();
}

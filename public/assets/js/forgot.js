function validateForgotForm() {
  let user = document.getElementById("username").value.trim();
  let mail = document.getElementById("email").value.trim();
  let newpw = document.getElementById("newpw").value.trim();
  let errors = [];
  // Validation
  if (!user) errors.push("Nhập tên tài khoản");
  if (!mail) errors.push("Nhập email");
  else if (!/^[^@]+@[^@]+\.[^@]+$/.test(mail))
    errors.push("Email không hợp lệ");

  if (!newpw) errors.push("Nhập mật khẩu mới");
  else if (newpw.length < 6) errors.push("Mật khẩu mới ít nhất 6 ký tự");
  return { valid: errors.length === 0, errors };
}

function handleForgot(e) {
  if (e) {
    e.preventDefault();
  }
  const { valid, errors } = validateForgotForm();
  if (!valid) {
    return showToast("error", errors.join(" | "));
  }
  document.getElementById("forgot-form").submit();
}

function showToast(type, msg) {
  const oldToast = document.querySelector(".simple-toast");
  if (oldToast) {
    oldToast.remove();
  }
  const t = document.createElement("div");
  t.className = `simple-toast ${type}`;
  t.textContent = msg;
  document.body.appendChild(t);
  // timeout chờ hiện/xoá thông báo
  setTimeout(() => {
    t.classList.add("show");
  }, 10);

  setTimeout(() => {
    t.classList.remove("show");
    setTimeout(() => {
      t.remove();
    }, 350);
  }, 2000);
}

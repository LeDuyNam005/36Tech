function validateForm() {
  let user = document.getElementById("username").value.trim();
  let pw = document.getElementById("password").value.trim();
  let msg = [];
  // Validation
  if (!user) msg.push("Bạn chưa nhập tài khoản!");
  if (!pw) msg.push("Bạn chưa nhập mật khẩu!");

  return {
    user: user,
    pw: pw,
    valid: msg.length === 0,
    msg: msg,
  };
}

function handleLogin(e) {
  e.preventDefault();
  const { user, pw, valid, msg } = validateForm();
  if (!valid) {
    return showToast("error", msg.join(" & "));
  }
  document.getElementById("login-form").submit();
}

function showToast(type, msg) {
  const oldToast = document.querySelector(".simple-toast");
  if (oldToast) oldToast.remove();
  // tạo thông báo
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

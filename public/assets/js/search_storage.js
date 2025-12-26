// chạy hết thẻ rồi mới bắt đầu function
document.addEventListener("DOMContentLoaded", () => {
  // tạo biến lưu class bên homepage 
  const cards = document.querySelectorAll(".card_box");
  // nếu không có thẻ thì thoát ctrinh
  if (!cards.length) return;


  // tạo mảng lưu khóa
  const courses = [];

  // dùng vòng lặp để lưu các thành phần ở trong thẻ
  cards.forEach(card => {
    const title = card.querySelector(".info a");
    const img = card.querySelector("img");

    // nếu không có thì thoát ctrinh
    if (!title || !img) return;


    // dùng push( push dành riêng cho mảng, add dùng riêng cho set...) để đẩy dữ liệu vào mảng course[]
    courses.push({
      title: title.innerText.trim(),
      link: title.href,
      image: img.src
    });
  });

  localStorage.setItem("courses", JSON.stringify(courses));

  // localStorage : bộ nhớ của trình duyệt , không mất khi reload
  // setItem(key, value) : dùng để lưu dữ liệu trên localStorage 

  // sao không dùng như này localStorage.setItem("courses", courses(thằng course này đang là mảng nhá ae )); 
  // do : localStorage không dùng để lưu mảng mà chỉ lưu được string => bắt buộc phải dùng JSON.stringify(courses) để chuyển sang chuỗi JSON 

});

// cơ chế hoạt động của search : 

// vào homepage.php -> search_storage chạy : lưu dữ liệu trên local-> do lưu dữ liệu trên local nên bất cứ trang nào được gán header
// thì nó sẽ tìm kiếm được khóa (phần trước tôi làm không tìm kiếm được khi vào trang khác mà nó chỉ có tác dụng ỏe bên homepage)
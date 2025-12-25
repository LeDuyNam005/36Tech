document.addEventListener("DOMContentLoaded", function () {
  //lấy dữ liệu từ thẻ 
  const input = document.getElementById("search-input");// đoạn này ở trong header 
  const resultBox = document.getElementById("search-result"); // đoạn này ở trong header 

    // <form class="search" role="search" autocomplete="off">
    //             <div class="search-wrapper">
    //                 <input id="search-input" type="search" placeholder="Tìm kiếm khóa học, bài viết, video, ..."
    //                     autocomplete="off">

    //                 <button type="submit" class="search-btn">🔍</button>

    //                 <!-- dropdown kết quả -->
    //                 <div class="search-result" id="search-result"></div>
    //             </div>
    //         </form>



  let courses = JSON.parse(localStorage.getItem("courses")) || [];
  // tạo biến để lưu mảng từ localStore (vừa dùng thằng search_storage đẩy lên)
  //JSON.parse() : dùng để đổi mảng JSON ra thành array
  // localStorage.getItem("courses") : lấy JSON trên trình duyệt 
// a || b thì nếu a có dữ liệu khoá thì nó sẽ dùng bên a, a không có khóa thì chuyển sang b đưa ra mảng rỗng (tránh lỗi filter(null)) 



  // shibaaaaaa
  function xuLyTiengViet(str) {
    return str
      .normalize('NFC') //Quy chuẩn các kiểu gõ dấu (khoá vs khóa -> về cùng 1 kiểu)
      .normalize('NFD')             // normallize dùng để tách dấu : vd : kiên => chở 
      .replace(/[\u0300-\u036f]/g, '') // xóa dấu :  k i e ^ n => k i e n
      .replace(/đ/g, 'd')   // xử lý đ sang d       
      .replace(/Đ/g, 'D')   // xủ lý Đ sàn D        
      .toLowerCase()                
      .trim();  
                         
  }


  input.addEventListener("input", function () {// tạo sự kiện người dùng nhấn click thì hàm hđ
    const keyword = input.value.toLowerCase().trim();
    resultBox.innerHTML = "";// xóa tìm kiếm cũ 
    
    if (!keyword) {
      resultBox.style.display = "none";
      return;
    }

    const matched = courses.filter(course => {
      const xuLyTitle = xuLyTiengViet(course.title); // dùng để xử lý tiêu đề 
      const xulyKeyword = xuLyTiengViet(keyword);// dùng để xủ lý từ khóa người dùng nhập
      return xuLyTitle.includes(xulyKeyword); // trả về kết quả từ khóa người dùng nhập trùng với title include()
    });
    // nếu không tìm thấy từ nào trùng mới khóa học thì 
    if (matched.length === 0) {
      resultBox.innerHTML = `
        <div class="search-empty">
          Không tìm thấy khóa học
        </div>
      `;
    } else {
      matched.forEach(course => {
        const item = document.createElement("a"); // tạo thẻ a 
        item.className = "search-result-item"; // gắn class cho thẻ a đó
        item.href = course.link; // gắn link của khóa học vado thẻ a 

        // đây là nội dùng của dropdown sreach có định dạng ảnh + tên khóa 
        item.innerHTML = `
          <img src="${course.image}" alt="">
          <span>${course.title}</span>
        `;


        // dùng để thêm phần tử item và resultbox
        resultBox.appendChild(item);
      });
    }

    resultBox.style.display = "block";
  });

  // Click ra ngoài thì ẩn
  document.addEventListener("click", function (e) { // e là đối tượng click vào (thẻ html, a , div ,,,) closest tìm thằng cha gần nhất 
    // nếu đối tượng click vào không nằm trong thẻ cha(.search-wrapper) thì không hiện dropdown của search !
    if (!e.target.closest(".search-wrapper")) {
      resultBox.style.display = "none";
    }
  });
});
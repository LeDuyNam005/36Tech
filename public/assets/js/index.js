// I. js cho banner quảng cáo

// 1. Truy cập vào các thành phần trong HTML
const slidesContainer = document.querySelector('.slides');
const slideItems = document.querySelectorAll('.slide');
const nextBtn = document.querySelector('.next');
const prevBtn = document.querySelector('.prev');

// 2. Các biến lưu trạng thái
let currentIndex = 0;
const totalSlides = slideItems.length;
let autoSlideInterval;

// 3. Hàm xử lý chuyển slide
function showSlide(index) {
    
    if (index >= totalSlides) {
        currentIndex = 0;
    } 
    
    else if (index < 0) {
        currentIndex = totalSlides - 1;
    } else {
        currentIndex = index;
    }

    // Tính toán khoảng cách cần dịch chuyển
    // Ví dụ: index 1 -> dịch sang trái 100% chiều rộng
    const offset = -currentIndex * 100;
    slidesContainer.style.transform = `translateX(${offset}%)`;
}

// 4. Hàm cho nút Next
function nextSlide() {
    showSlide(currentIndex + 1);
}

// 5. Hàm cho nút Prev
function prevSlide() {
    showSlide(currentIndex - 1);
}

// 6. Gán sự kiện click cho nút
nextBtn.addEventListener('click', () => {
    nextSlide();
    resetAutoSlide(); // Reset bộ đếm khi người dùng tự bấm
});

prevBtn.addEventListener('click', () => {
    prevSlide();
    resetAutoSlide();
});

// 7. Tự động chạy slide (Auto-play)
function startAutoSlide() {
    autoSlideInterval = setInterval(nextSlide, 10000); // Chuyển sau mỗi 10 giây
}

function resetAutoSlide() {
    clearInterval(autoSlideInterval); // Xóa bộ đếm cũ
    startAutoSlide(); // Bắt đầu bộ đếm mới
}
startAutoSlide();
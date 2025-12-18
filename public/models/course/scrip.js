// scrip.js

// 1. Hàm đóng mở danh sách chương 
function toggleDropdown(element) {
    const dropdown = element.nextElementSibling;
    const icon = element.querySelector('.icon-toggle');

    if (dropdown.style.display === "block") {
        dropdown.style.display = "none";
        icon.classList.remove('fa-chevron-down');
        icon.classList.add('fa-chevron-up');
    } else {
        dropdown.style.display = "block";
        icon.classList.remove('fa-chevron-up');
        icon.classList.add('fa-chevron-down');
    }
}

// 2. Hàm thay đổi video khi click vào bài học
function changeVideo(element, videoId, videoTitleText) {
    // --- A. Đổi Video ---
    const iframe = document.querySelector('.video-wrapper iframe');
    // Cấu trúc link embed của Youtube: https://www.youtube.com/embed/[VIDEO_ID]?autoplay=1
    // Thêm autoplay=1 để khi bấm là tự chạy luôn
    iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;

    // --- B. Đổi Tiêu đề và Mô tả bên dưới video (Nếu cần) ---
    const titleElement = document.querySelector('.video-title');
    if (titleElement) {
        titleElement.innerText = videoTitleText;
    }

    // --- C. Xử lý giao diện (Active class & Icon) ---
    
    // 1. Bỏ active ở bài cũ
    const currentActive = document.querySelector('.lesson-item.active');
    if (currentActive) {
        currentActive.classList.remove('active');
        // Đổi icon bài cũ về dạng rỗng (regular)
        const oldIcon = currentActive.querySelector('.status-icon');
        if (oldIcon) {
            oldIcon.classList.remove('fa-solid');
            oldIcon.classList.add('fa-regular');
        }
    }

    // 2. Thêm active vào bài mới được click
    element.classList.add('active');
    
    // Đổi icon bài mới sang dạng đặc (solid)
    const newIcon = element.querySelector('.status-icon');
    if (newIcon) {
        newIcon.classList.remove('fa-regular');
        newIcon.classList.add('fa-solid');
    }
}
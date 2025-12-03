function list_dropdown_f(titleElement) {
    // lấy ra ul.dropdown ngay bên dưới .list_title
   
    let dropdown = titleElement.parentElement.nextElementSibling;

    dropdown.classList.toggle('active');
}
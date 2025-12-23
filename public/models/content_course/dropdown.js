function toggleDropdown(element) {
    const dropdown = element.nextElementSibling;
    const icon = element.querySelector('.icon-toggle');
    if (dropdown.style.display === "block") {
        dropdown.style.display = "none";
        icon.classList.remove('fa-minus');
        icon.classList.add('fa-plus');
    } else {
        dropdown.style.display = "block";
        icon.classList.remove('fa-plus');
        icon.classList.add('fa-minus');
    }
}
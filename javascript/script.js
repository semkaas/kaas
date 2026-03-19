document.getElementById('menu_info').addEventListener('click', openOrCloseCategory)
function openOrCloseCategory(event) {
if (event.target.classList.contains("menu_heading")) {
     if (event.target.nextElementSibling.style.display == "grid") {
            event.target.nextElementSibling.style.display = "none";
        } else {
             event.target.nextElementSibling.style.display = "grid";
        }
    }
}
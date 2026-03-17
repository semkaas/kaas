document.getElementById('menu_info').addEventListener('click', openOrCloseCategory)
function openOrCloseCategory(event) {
    //Controleer eerst of je op een H2 heading drukt
    if (event.target.classList.contains("menu_heading")) {
        //Haal van het event het geen op waar je op klikt
        //Controleer of het volgende element style display op "grid" staat
        if (event.target.nextElementSibling.style.display == "grid") {
            //Als het zo is, zet het naar "none"
            event.target.nextElementSibling.style.display = "none";
        } else {
            //Anders, zet het naar "grid"
            event.target.nextElementSibling.style.display = "grid";
        }
    }
}
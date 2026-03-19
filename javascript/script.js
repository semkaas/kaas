// document.getElementById('menu_info').addEventListener('click', openOrCloseCategory)
// function openOrCloseCategory(event) {
// if (event.target.classList.contains("menu_heading")) {
//      if (event.target.nextElementSibling.style.display == "grid") {
//             event.target.nextElementSibling.style.display = "none";
//         } else {
//              event.target.nextElementSibling.style.display = "grid";
//         }
//     }
// }
const ham = document.getElementsByClassName("hamburger")[0]
const nav = document.getElementsByClassName("banner")[0]
function showOrHideNav(e){
    if(nav.style.display != 'flex'){
        nav.style.display = 'flex'
    }else{
        nav.style.display = 'none'
    }
}
ham.addEventListener('click', showOrHideNav);
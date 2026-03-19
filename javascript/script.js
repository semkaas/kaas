function toggleMenu() {
    const menu = document.getElementById('dropdown-menu');
    // Toggle voegt de class toe als hij er niet is, en haalt hem weg als hij er wel is
    menu.classList.toggle('open');
}

// const ham = document.getElementsByClassName("hamburger")[0]
// const nav = document.getElementsByClassName("banner")[0]
// const main = document.main;

// // const lightdark = document.getElementById('darkmode')[0]
// function showOrHideNav(e){
//     if(nav.style.display != 'flex'){
//         nav.style.display = 'flex'
//     }else{
//         main.style.display = 'none'
//     }
// }
// ham.addEventListener('click', showOrHideNav);
// // function switchMode(){
// //     if (document.documentElement.dataset.mode = 'dark'){
// //         document.docu
// //     }
// // }

// // document.element
// // lightdark.addEventListener('click', switchMode)
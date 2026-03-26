let lightanddark = document.getElementById("lightdark")
document.documentElement.dataset.mode = localStorage.getItem("theme")



function toggleMenu() {
    const menu = document.getElementById('dropdown-menu');
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
function switchMode(){
    if(document.documentElement.dataset.mode != "dark"){
       document.documentElement.dataset.mode = 'dark';
       localStorage.setItem("theme", "dark")
}
else{
    document.documentElement.dataset.mode = "light"
    localStorage.setItem("theme", "light")
}
    
}

// document.element
lightanddark.addEventListener('click', switchMode);
// (document.documentElement.dataset.mode = 'dark'){
//         document.docu

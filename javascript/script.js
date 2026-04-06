let lightanddark = document.getElementById("lightdark");
document.documentElement.dataset.mode = localStorage.getItem("theme");

function toggleMenu() {
    const menu = document.getElementById('dropdown-menu');
    menu.classList.toggle('open');
}
function switchMode(){
    if(document.documentElement.dataset.mode != "dark"){
       document.documentElement.dataset.mode = 'dark';
       localStorage.setItem("theme", "dark");
}
else{
    document.documentElement.dataset.mode = "light";
    localStorage.setItem("theme", "light");
}
}
lightanddark.addEventListener('click', switchMode);

function changeFontSize(delta) {
  const root = document.documentElement;
  const currentScale = parseFloat(getComputedStyle(root).getPropertyValue('--global-scale'));
  root.style.setProperty('--global-scale', currentScale + (delta * 0.1));
}
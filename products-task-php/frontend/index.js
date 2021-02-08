const parentNav = document.querySelector(".nav");
const navBar = document.querySelector(".nav-bar");
const navBarToggler = document.querySelector(".navbar-toggler");

let togglerHelper = true;

const onTogglerClick = () => {
    if (!togglerHelper) {
        navBar.classList.remove("show");
        parentNav.style.height = "80px";
        togglerHelper = true;
    } else {
            parentNav.style.height = "330px"
        setTimeout(() => {
            navBar.classList.add("show");
        }, 700)
        togglerHelper = false;
    }
}

navBarToggler.addEventListener('click', () => {
   onTogglerClick()
});
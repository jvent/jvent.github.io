var menuHamburgerButton = document.getElementById("menu-btn");
var mainNavigationMenu = document.getElementById("main-menu");

function showNavigationMenu () {
	mainNavigationMenu.classList.toggle("hide");
	menuHamburgerButton.classList.toggle("hamburger-icon");
	menuHamburgerButton.classList.toggle("close-icon");
}
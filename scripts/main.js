var mainMenuButton = document.getElementById("toggle-menu-button");
var mainMenu = document.getElementById("menu-navigation");

function showMainNavigation () {
	mainMenu.classList.toggle("hide");
	mainMenuButton.classList.toggle("hamburger-icon");
	mainMenuButton.classList.toggle("close-icon");
}
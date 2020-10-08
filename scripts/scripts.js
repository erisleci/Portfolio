let webProjectShow = document.getElementById("webAppBtn");
let appProjectShow = document.getElementById("desktopAppBtn");
let popUpSection = document.querySelector(".popup-section");
let projects = document.querySelectorAll(".detailed-project-section");
let closeButton = document.querySelectorAll(".close-button")

console.log(projects[0]);
console.log(projects[1]);

webProjectShow.addEventListener("click", () => {
    popUpSection.style.display = "flex";
    projects[0].style.display = "flex";
    projects[1].style.display = "none";
});

appProjectShow.addEventListener("click", () => {
    popUpSection.style.display = "flex";
    projects[0].style.display = "none";
    projects[1].style.display = "flex";
});

closeButton[0].addEventListener("click", () => {
    popUpSection.style.display = "none";
});
closeButton[1].addEventListener("click", () => {
    popUpSection.style.display = "none";
});

$('#error-message').delay(3000).fadeOut('slow');
$(window).on('unload', function () {
    $(window).scrollTop(0);
});

window.onunload = function () { window.scrollTo(0, 0); }

if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
}



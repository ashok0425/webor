const menu = document.querySelector(".mini-nav-hamburger");
const list = document.querySelector(".sv-mini-navbar-menu-left");

menu.addEventListener("click", function () {
  if (list.style.display == "none") {
    console.log("Asmita");
    list.style.display = "inline-block";
  } else {
    list.style.display = "none";
  }
});

const mininav = document.querySelector(".sv-mini-navbar");

window.onscroll = function () {
  if (
    document.body.scrollTop > 134 ||
    document.documentElement.scrollTop > 134
  ) {
    mininav.style.padding = "0";
  } else {
    mininav.style.padding = "0 75px";
  }
};








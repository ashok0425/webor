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

// for search optioon
const searchBtn = document.querySelector(".nav-search-btn");
const searchBox = document.querySelector(".sv-mini-navbar-search");
const globalOverlay = document.querySelector(".sv-mini-navbar-global-overlay");
const closeBtn = document.querySelector(".sv-mini-navbar-close");
searchBtn.addEventListener("click", function () {
  searchBox.style.display = "block";
  globalOverlay.style.display = "block";
});

closeBtn.addEventListener("click", function () {
  searchBox.style.display = "none";
  globalOverlay.style.display = "none";
});

window.onclick = function (event) {
  if (event.target == searchBox) {
    searchBox.style.display = "none";
    globalOverlay.style.display = "none";
  }
};

// hover effect 
$('.sv-top-feature-box').on('mouseover',function(){
  $(this).addClass('hoverup')
$(this).siblings().addClass('hoverdown')

})
$('.sv-top-feature-box').on('mouseout',function(){
  $(this).removeClass('hoverup')
$(this).siblings().removeClass('hoverdown')

})
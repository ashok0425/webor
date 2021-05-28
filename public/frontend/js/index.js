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



// image maginifier
function magnify(imgID, zoom) {
  var img, glass, w, h, bw;
  img = document.getElementById(imgID);

  /* Create magnifier glass: */
  glass = document.createElement("DIV");
  glass.setAttribute("class", "img-magnifier-glass");

  /* Insert magnifier glass: */
  img.parentElement.insertBefore(glass, img);

  /* Set background properties for the magnifier glass: */
  glass.style.backgroundImage = "url('" + img.src + "')";
  glass.style.backgroundRepeat = "no-repeat";
  glass.style.backgroundSize = (img.width * zoom) + "px " + (img.height * zoom) + "px";
  bw = 3;
  w = glass.offsetWidth / 2;
  h = glass.offsetHeight / 2;

  /* Execute a function when someone moves the magnifier glass over the image: */
  glass.addEventListener("mousemove", moveMagnifier);
  img.addEventListener("mousemove", moveMagnifier);

  /*and also for touch screens:*/
  glass.addEventListener("touchmove", moveMagnifier);
  img.addEventListener("touchmove", moveMagnifier);
  function moveMagnifier(e) {
    var pos, x, y;
    /* Prevent any other actions that may occur when moving over the image */
    e.preventDefault();
    /* Get the cursor's x and y positions: */
    pos = getCursorPos(e);
    x = pos.x;
    y = pos.y;
    /* Prevent the magnifier glass from being positioned outside the image: */
    if (x > img.width - (w / zoom)) {x = img.width - (w / zoom);}
    if (x < w / zoom) {x = w / zoom;}
    if (y > img.height - (h / zoom)) {y = img.height - (h / zoom);}
    if (y < h / zoom) {y = h / zoom;}
    /* Set the position of the magnifier glass: */
    glass.style.left = (x - w) + "px";
    glass.style.top = (y - h) + "px";
    /* Display what the magnifier glass "sees": */
    glass.style.backgroundPosition = "-" + ((x * zoom) - w + bw) + "px -" + ((y * zoom) - h + bw) + "px";
  }

  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /* Get the x and y positions of the image: */
    a = img.getBoundingClientRect();
    /* Calculate the cursor's x and y coordinates, relative to the image: */
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /* Consider any page scrolling: */
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}


/* Execute the magnify function: */
/* Specify the id of the image, and the strength of the magnifier glass: */









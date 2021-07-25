

navbarSearchbar = document.querySelector("#navbar-searchbar");

function pageSearch(e) {
    if (navbarSearchbar.classList.contains("d-none")) {
        navbarSearchbar.classList.add("d-block");
        navbarSearchbar.classList.remove("d-none");
    }else{
        navbarSearchbar.classList.remove("d-block");
        navbarSearchbar.classList.add("d-none");
    }
}
function closeSearch(e) {
    if (navbarSearchbar.classList.contains("d-block")) {
        navbarSearchbar.classList.remove("d-block");
        navbarSearchbar.classList.add("d-none");
    }
}

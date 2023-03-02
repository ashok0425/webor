let s = $('#covered_splide')
// console.log()

if (s.length > 0) {

    var splide = new Splide('#covered_splide', {
        type: 'loop', pagination: false,
        perPage: 4,
        arrows: false,
        breakpoints: {
            640: {
                perPage: 2,
            },
            460: {
                perPage: 1,
            }
        }
    });
    splide.mount();

}


let trending_splide = $('#trending_splide')
if (trending_splide.length > 0) {

    var splide = new Splide('#trending_splide', {
        type: 'loop', pagination: false,
        perPage: 4,
        breakpoints: {
            640: {
                perPage: 2,
            },
            460: {
                perPage: 1,
            }
        }
    });
    splide.mount();

}


let review_splide = $('#review_splide')
if (review_splide.length > 0) {

    var splide = new Splide('#review_splide', {
        type: 'loop', pagination: false,
        perPage: 2,
        breakpoints: {
            640: {
                perPage: 1,
            },
            460: {
                perPage: 1,
            }
        }
    });
    splide.mount();

}


let review_splide_page = $('#review_splide_page')
if (review_splide_page.length > 0) {

    var splide = new Splide('#review_splide_page', {
        type: 'loop', pagination: false,
        perPage: 1,
        breakpoints: {
            640: {
                perPage: 1,
            },
            460: {
                perPage: 1,
            }
        }
    });
    splide.mount();

}

let g = $('#gallery_splide')
// console.log(g)

if (g.length > 0) {
    new Splide('#gallery_splide', {
        type: 'loop', pagination: false,
        drag: 'free',
        snap: true,
        perPage: 3,
        pagination: false,
        breakpoints: {
            640: {
                perPage: 2,
            },
            460: {
                perPage: 1,
            }
        }
    }).mount();
}

let h = $('#hero_splide')
// console.log(h)
if (h.length > 0) {
    new Splide('#hero_splide', {
        type: 'loop', pagination: false,
        drag: 'free',
        snap: true,
        perPage: 1,
        pagination: true,
        arrows: false
    }).mount();
}

let m = $('#main-slider')
if (m.length > 0) {
    var main = new Splide('#main-slider', {
        type: 'fade',
        heightRatio: 0.5,
        pagination: false,
        arrows: false,
        cover: true,
    });

    var thumbnails = new Splide('#thumbnail-slider', {
        rewind: true,
        fixedWidth: 104,
        fixedHeight: 58,
        isNavigation: true,
        gap: 10,
        focus: 'center',
        pagination: false,
        cover: true,
        dragMinThreshold: {
            mouse: 4,
            touch: 10,
        },
        breakpoints: {
            640: {
                fixedWidth: 66,
                fixedHeight: 38,
            },
        },
    });

    main.sync(thumbnails);
    main.mount();
    thumbnails.mount();
}
let s = $('#covered_splide')
// console.log()

if (s.length > 0) {

    var splide = new Splide('#covered_splide', {
        type: 'loop',
        perPage: 4,
    });
    splide.mount();

}

let g = $('#gallery_splide')
// console.log(g)

if (g.length > 0) {
    new Splide('#gallery_splide', {
        type: 'loop',
        drag: 'free',
        snap: true,
        perPage: 3,
        pagination: false
    }).mount();
}

let h = $('#hero_splide')
// console.log(h)
if (h.length > 0) {
    new Splide('#hero_splide', {
        type: 'loop',
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
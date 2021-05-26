let banner_img = document.querySelector(".banner-image");
let gl_img_contianer = document.querySelectorAll(".gl-img-container");
let gl_collection_title = document.querySelectorAll(".gl-title")
let window_width = window.innerWidth;
const imgs = document.querySelectorAll('.img-select a');
const imgBtns = [...imgs];
let imgId = 1;



imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});

function slideImage(){
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

window.addEventListener('resize', slideImage);


if (window_width > 900) {
    banner_img.src = "assets/images/banner-desktop.png"
}


gl_img_contianer.forEach(element => {
    element.onmouseover = function() {
        element.style.background = "none"
        element.children[1].style.visibility = "hidden"
    }
    
    element.onmouseout = function() {
        element.style.background = "rgba(0, 0, 0, 0.8)"
        element.children[1].style.visibility = "visible"
    }
});




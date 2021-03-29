let banner_img = document.querySelector(".banner-image");
let gl_img_contianer = document.querySelectorAll(".gl-img-container");
let gl_collection_title = document.querySelectorAll(".gl-title")
let window_width = window.innerWidth;


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




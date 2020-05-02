// navigation
function openNav() {
    document.getElementById('nav').style.width="250px";
}

function closeNav() {
    document.getElementById('nav').style.width="0";
}

// modal
function openModal() {
    document.getElementById("modal-gallery").style.display = "block";
}

function closeModal() {
    document.getElementById("modal-gallery").style.display = "none";
}

let slideIndex = 1;
showSlide(slideIndex);

function slideNav(n) {
    showSlide(slideIndex += n);
}

function currentSlide(n) {
    showSlide(slideIndex = n);
}

function showSlide(n) {
    let i;
    let slide = document.getElementsByClassName("modal-gallery__slides");
    if (n > slide.length) {
        slideIndex = 1;
    }
    if (n < 1) {
        slideIndex = slide.length;
    }
    for (i = 0; i < slide.length; i++) {
        slide[i].style.display = "none";
    }
    slide[slideIndex-1].style.display = "block";
}


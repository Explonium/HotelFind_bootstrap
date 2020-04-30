// Open the Modal
function openModal(dir) {
    curr_dir = dir;
    document.getElementById("myModal " + dir).style.display = "block";
}

// Close the Modal
function closeModal() {
    document.getElementById("myModal " + curr_dir).style.display = "none";
}

var slideIndex = 1;
var curr_dir = "";

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n, curr_dir);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n, curr_dir);
}

function showSlides(n, dir) {
    var i;
    var slides = document.getElementsByClassName("mySlides " + dir);
    var dots = document.getElementsByClassName("demo " + dir);
    var captionText = document.getElementById("caption " + dir);
    curr_dir = dir;

    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    captionText.innerHTML = dots[slideIndex-1].alt;
}
var slideIndex = 1,
    myTimer,
    slideshowContainer,
    slides = [...document.querySelectorAll('.slideshow_slides')],
    i;

window.addEventListener('load', function() {
  plusSlides();
  slideshowContainer = document.querySelector('.slideshow-inner');
  slideshowContainer = document.querySelector('.slideshow_container');
});

// Slide previous / next
function plusSlides(n) {
  clearInterval(myTimer);

  if (n < 0) {
    showSlides(slideIndex -= 1);

  } else {
    showSlides(slideIndex += 1);
  }

  if (n === -1) {
    myTimer = setInterval(function() {plusSlides(n + 2)}, 3000);

  } else {
    myTimer = setInterval(function() {plusSlides(n + 1)}, 3000);
  }
}

//Controls the current slide and resets interval if needed
function currentSlide(n) {
  clearInterval(myTimer);

  myTimer = setInterval(function() {plusSlides(n + 1)}, 3000);
  showSlides(slideIndex = n);
}

function showSlides(n) {

  if (n > slides.length) {slideIndex = 0}
  if (n < 0) {slideIndex = slides.length}

  for (i = 0; i < slides.length; i++) {
    var slidesWrap = document.querySelector('.slideshow_inner');
  
    slidesWrap.style.cssText = '\
    transform: translateX(calc(-100% *'+ slideIndex +'));\
    transition: .4s ease-in-out;\
    ';
  }
}

// Click previous / next
var prev = document.querySelector('.slideshow_button--prev'),
    next = document.querySelector('.slideshow_button--next');

prev.addEventListener('click', function() {
  plusSlides(-1);
});

next.addEventListener('click', function() {
  plusSlides(1);
});
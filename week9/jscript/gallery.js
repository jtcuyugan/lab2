let slideIndex = 0;
showSlides();

/* Lesson 18: Functions */
function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  /* LESSON 22: HTML DOM */
  let dots = document.getElementsByClassName("dot");
  /* LESSON 10: Loop For */
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  /* LESSON 10: Break */
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}


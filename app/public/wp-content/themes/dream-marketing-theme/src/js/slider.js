const slides = document.querySelectorAll(".testimonials__container");


let currentItem = 0;

showSlides();

function showSlides() {
    var i;
     for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";
           }
        currentItem++;
      if (currentItem > slides.length) {
          currentItem = 1
        }
        slides[currentItem-1].style.display = "block";
        setTimeout(showSlides, 4000); // Change image every 2 seconds
}


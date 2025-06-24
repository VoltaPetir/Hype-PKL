document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector(".slider");
    const slides = slider.querySelectorAll("img");
    let index = 0;
  
    function showSlide(i) {
      index = (i + slides.length) % slides.length;
      slider.style.transform = `translateX(-${index * 100}%)`;
    }
  
    window.nextSlide = function () {
      showSlide(index + 1);
    }
  
    window.prevSlide = function () {
      showSlide(index - 1);
    }
  
    setInterval(() => {
      nextSlide();
    }, 7000); // tiap detik
  });
  
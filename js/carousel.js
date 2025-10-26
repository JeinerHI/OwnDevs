const track = document.getElementById("carousel-track");
    let currentIndex = 0;

    function showSlide(index) {
      const slides = document.querySelectorAll(".testimonial");
      const total = slides.length;
      if (index < 0) currentIndex = total - 1;
      else if (index >= total) currentIndex = 0;
      else currentIndex = index;
      track.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    function nextSlide() {
      showSlide(currentIndex + 1);
    }

    function prevSlide() {
      showSlide(currentIndex - 1);
    }

    showSlide(0);
  const track = document.querySelector(".slideshow-track");
  const slides = document.querySelectorAll(".slide-item");
  let index = 0;

  function moveSlide() {
    index = (index + 1) % slides.length;
    track.style.transform = `translateX(-${index * 100}%)`;
  }

  setInterval(moveSlide, 3000); // Ganti slide setiap 3 detik


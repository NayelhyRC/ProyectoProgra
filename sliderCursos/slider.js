document.addEventListener("DOMContentLoaded", () => {
  const elementCarousel = document.querySelectorAll(".carousel");
  M.Carousel.init(elementCarousel, {
    duration: 150
  });
});

$(".owl-carousel").owlCarousel({
  loop: true,
  margin: 30,
  responsiveClass: true,
  dotsEach: true,
  center: true,
  autoplay: true,
  autoplayTimeout: 6000,
  autoplayHoverPause: true,

  responsive: {
    0: {
      items: 1,
      nav: true,
    },
    600: {
      items: 1,
      nav: false,
    },
    1000: {
      items: 3,
      nav: true,
      loop: true,
    },
  },
});
$(".image-popup").magnificPopup({
  type: "image",
});

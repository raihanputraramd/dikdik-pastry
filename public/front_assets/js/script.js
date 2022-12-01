$('.navbar-logo').on('click',()=>{
  $('.navbar-responsive').toggleClass('d-none')
  $('.navbar-responsive').toggleClass('d-flex')
})


$('.testimoni-list').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 2,
    variableHeight: true,
    prevArrow: $(''),
    nextArrow: $(''),
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
});


var $ = jQuery.noConflict();

$('#slider-ponentes').slick({
  dots:true,
  slidesToShow: 1,
  slidesToScroll: 1,
  infinite: true,
  autoplay: true,
  autoplaySpeed: 2500,
  arrows: true,
  fade: true,
  responsive: [
      {
          breakpoint: 991,
          settings: { 
            arrows: false,                    
          }
      },          
  ] 
});

$('.slider-colaboramos').slick({
  dots:false,
  slidesToShow: 5,
  slidesToScroll: 5,
  infinite: true,
  autoplay: false,
  autoplaySpeed: 5000,
  arrows: true,
  dots: false, 
  responsive: [
      {
          breakpoint: 1360,
          settings: {                           
            slidesToShow: 4,
            slidesToScroll: 4                  
          }
      },
      {
          breakpoint: 960,
          settings: {                           
            slidesToShow: 3,
            slidesToScroll: 3                   
          }
      },        
      {
          breakpoint: 767,
          settings: {                                         
            slidesToShow: 2,
            slidesToScroll: 1                   
          }
      }            
  ]   
});

/*DESLIZAR AL HREF DEL BOTON*/
$('a.go-to').click(function() {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    if (target.length) {
      $('html,body').animate({
        scrollTop: target.offset().top
      }, 150);
      return false;
    }
  }
});   
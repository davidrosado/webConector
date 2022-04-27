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

document.addEventListener('wpcf7submit',function(event){
  var status=event.detail.status;
  console.log(status);
  var button=$('.wpcf7-submit[disabled]');
  var old_value=button.attr('data-value');
  button.prop('disabled',false);
  button.val(old_value);
},false);

$('form.wpcf7-form').on('submit',function(){
  var form=$(this);
  var formid=form.attr('id');
  var button=form.find('input[type=submit]');
  var buttonid=button.attr('id');
  var current_val=button.val();
  $('input#'+buttonid).attr('data-value',current_val);
  $('input#'+buttonid).prop("disabled",true);
  $('input#'+buttonid).val("Enviando...");
});

wow = new WOW(
  {
    animateClass: 'animated',
    offset:       100
  }
);
wow.init();
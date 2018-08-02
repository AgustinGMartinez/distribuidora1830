$(document).ready(function(){
  activateLinks();

  // $('#nav-icon2').parent().click(function(){
	// 	$('#nav-icon2').toggleClass('open');
  // });
  // $('#nav-icon3').click(function(){
  //   $(this).toggleClass('open');
  // });

  $("html").easeScroll({
      frameRate: 60,
      animationTime: 700,
      stepSize: 100,
      pulseAlgorithm: 1,
      pulseScale: 8,
      pulseNormalize: 1,
      accelerationDelta: 20,
      accelerationMax: 1,
      keyboardSupport: true,
      arrowScroll: 50,
      touchpadSupport: true,
      fixedBackground: true
    });


    $('#carousel').slick({
      infinite: true,
      autoplay: true,
      autoplaySpeed: 3000,
      arrows: true,
      responsive: [
      {
        breakpoint: 800,
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
      }
    ]
    });

    $('.dh-container').directionalHover({
    // CSS class for the overlay
    overlay: "dh-overlay",
    easing: "swing",
    speed: 200
  });
});

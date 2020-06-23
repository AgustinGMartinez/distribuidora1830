$(document).ready(function(){
  activateLinks();
  $('#submitContactForm').on("click", submitContactForm);

  $('#nav-icon2').parent().click(function(){
		$('#nav-icon2').toggleClass('open');
    $('.menu-mobile-dropdown').slideToggle();
  });

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
      arrows: false,
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

    $('.carousel2').slick({
      infinite: true,
      autoplay: true,
      autoplaySpeed: 4000,
      arrows: false,
      slidesToShow: 5,
      slidesToScroll: 3,
      responsive: [
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          autoplaySpeed: 2500,
          slidesToShow: 2,
          slidesToScroll: 2
        }
      }
    ]
    });

    $('.carousel3').slick({
      infinite: true,
      autoplay: true,
      autoplaySpeed: 4000,
      arrows: false,
      slidesToShow: 5,
      slidesToScroll: 3,
      rtl: true,
      responsive: [
      {
        breakpoint: 800,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          autoplaySpeed: 2500,
          slidesToShow: 2,
          slidesToScroll: 2
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

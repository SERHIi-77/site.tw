if ( typeof jQuery !== "undefined" ) {
    console.log( "jQuery підключено" );
  }

  
    $(document).ready(function(){
        $('.slider-general').slick({
            dots: true,
            infinite: true,
            speed: 400,
            fade: true,
            cssEase: 'linear'
          });
      });
 

         $('.slider').slick({
           dots: false,
           infinite: true,
           speed: 800,
           autoplay:true,
           autoplaySpeed:3800,
           slidesToShow: 1,
           slidesToScroll: 1,
           arrows: true,
           responsive: [
             {
               breakpoint: 1024,
               settings: {
                 slidesToShow: 1,
                 slidesToScroll: 1,
                 infinite: true,
                 arrows: true,
                 dots: false
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
             }
           ]
         });

         $('.responsive').slick({
           dots: false,
           infinite: true,
           arrows: true,
           speed: 300,
           slidesToShow: 3,
           slidesToScroll: 3,
           responsive: [
             {
               breakpoint: 1024,
               settings: {
                 slidesToShow: 3,
                 slidesToScroll: 3,
                 infinite: true,
                 dots: false,
               }
             },
             {
               breakpoint: 767,
               settings: {
                 slidesToShow: 2,
                 slidesToScroll: 2
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

          $('.third_sp').slick({
           dots: false,
           infinite: true,
           arrows: true,
           speed: 300,
           slidesToShow: 3,
           slidesToScroll: 3,
           responsive: [
             {
               breakpoint: 1024,
               settings: {
                 slidesToShow: 3,
                 slidesToScroll: 3,
                 infinite: true,
                 dots: false,
               }
             },
             {
               breakpoint: 767,
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

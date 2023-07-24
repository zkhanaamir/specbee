(function ($, Drupal) {
    Drupal.behaviors.CustomTabs = {
      attach: function (context, settings) {
        const tabs = document.querySelectorAll('.conference__tab');
        const tabContainer = document.querySelector('.conference__tab-container');
        const tabsContent = document.querySelectorAll('.conference__content');
  
        // add event listener
        tabContainer.addEventListener('click', function (e) {
          // using event delegation we find the closest target where the click is written so that it only takes the element where the click is linked
          const clicked = e.target.closest('.conference__tab');
  
          // to ignore any click on the area where the event is not linked
          if (clicked) {
            // tabs
            // remove active class
            tabs.forEach(t => t.classList.remove('conference__tab--active'));
            // add active class on which the click event is happened
            clicked.classList.add('conference__tab--active');
  
            // content
            tabsContent.forEach(c => c.classList.remove('conference__content--active'));
            document.querySelector(`.conference__content--${clicked.dataset.tab}`).classList.add('conference__content--active');
          }
        });
        $('.conference__tab').on('click', function () {
          setTimeout(() => {
            $('.conference__content.conference__content--active .card-slider').slick('setPosition');
          }, 100);
        });
      }
    };
  })(jQuery, Drupal);

(function ($, Drupal) {
  Drupal.behaviors.TabsSlider = {
    attach: function (context, settings) {

      $(".card-slider").not('.slick-initialized').slick({
      dots: true,
      infinite: true,
      speed: 500,
      slidesToShow: 3,
      slidesToScroll: 3,
      autoplay: false,
      autoplaySpeed: 2000,
      arrows: true,
      responsive: [{
        breakpoint: 1023,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
          breakpoint: 768,
          settings: {
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1
          }
      }]
    });

    
    }
  };
})(jQuery, Drupal);
  
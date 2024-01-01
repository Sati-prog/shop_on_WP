(() => {

    'use strict'
  
    const forms = document.querySelectorAll('.needs-validation')
  
    Array.from(forms).forEach(form => {

        form.addEventListener('submit', event => {

            if (!form.checkValidity()) {

                event.preventDefault();
                event.stopPropagation();
            }
  
            form.classList.add('was-validated');

        }, false);
    });

})();

window.addEventListener('scroll', function () {

    document.getElementById('header-nav').classList.toggle('headernav-scroll', window.scrollY > 135);
});

jQuery(document).ready(function($)  {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('#top').fadeIn();
        } else {
            $('#top').fadeOut();
        }
    });

    $('#top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 500);
        return false;
    });

    $(".owl-carousel-full").owlCarousel({

        margin: 20,
        responsive: {

            0: {

                items: 1
            },

            576: {

                items: 2
            },

            768: {

                items: 3
            },

            992: {

                items: 4
            }
        }
    });

    // Javascript-события в Woocommerce
    // https://gist.github.com/bagerathan/2b57e7413bfdd09afa04c7be8c6a617f

    $('body').on('adding_to_cart', function(e, btn, data) {

        btn.closest('.product-card').find('.ajax-loader').fadeIn();
    });

    $('body').on('added_to_cart', function(e, response_fragments, response_cart_hash, btn) {

        btn.closest('.product-card').find('.ajax-loader').fadeOut();
    });
});
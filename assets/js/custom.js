jQuery(document).ready(function () {
    jQuery('.CusTomBanner').slick({
        speed: 300,
    });
    jQuery('.fancyGllerybox').fancybox({
        prevEffect: 'none',
        nextEffect: 'none',
        openEffect: 'none',
        closeEffect: 'none',
        helpers: {
            title: {
                type: 'outside'
            },
            thumbs: {
                width: 50,
                height: 50
            }
        }
    });
    setTimeout(function () {
        jQuery("td.value select option:first").attr({'selected': 'selected', 'value': ' '});
    }, 3000);
    jQuery('.mobile-navigation-container span.mobile-menu-toggle').insertAfter('.mobile-navigation li.menu-item-has-children > a');
});
(function ($) {

    $(document).on('click', '.single_add_to_cart_button', function (e) {
        e.preventDefault();

        var $thisbutton = $(this),
            $form = $thisbutton.closest('form.cart'),
            id = $thisbutton.val(),
            product_qty = $form.find('input[name=quantity]').val() || 1,
            product_id = $form.find('input[name=product_id]').val() || id,
            variation_id = $form.find('input[name=variation_id]').val() || 0;

        var data = {
            action: 'woocommerce_ajax_add_to_cart',
            product_id: product_id,
            product_sku: '',
            quantity: product_qty,
            variation_id: variation_id,
        };

        $(document.body).trigger('adding_to_cart', [$thisbutton, data]);

        $.ajax({
            type: 'post',
            url: wc_add_to_cart_params.ajax_url,
            data: data,
            beforeSend: function (response) {
                $thisbutton.removeClass('added').addClass('loading');
            },
            complete: function (response) {
                $thisbutton.addClass('added').removeClass('loading');
            },
            success: function (response) {

                if (response.error && response.product_url) {
                    window.location = response.product_url;
                    $.toaster({
                        priority: 'danger',
                        title: 'Error',
                        message: 'Something went wrong!',
                        settings: {'timeout': 10000},
                    });
                    return;
                } else {
                    // console.log(response.fragments, $thisbutton);
                    //$thisbutton
                    $(document.body).trigger('added_to_cart', [response.fragments, response.cart_hash]);
                    swal({
                        title: "Cart Updated!", text: "You have Added a Product to Cart", icon: "success",
                        buttons: {
                            ContinueShopping: {
                                text: "Continue Shopping",
                                value: 'stay',

                            },
                            GoToCart: {
                                text: "Go to Cart",
                                value: 'cart'
                            },
                            CheckoutNow: {
                                text: "Checkout Now",
                                value: 'checkout'
                            }
                        }
                    }).then((value) => {
                        if (value === 'cart') {
                            window.location.href = '/cart/'
                        } else if (value === 'checkout') {
                            window.location.href = '/checkout/'
                        }
                    });
                }
            },
        });
        return false;
    });
})(jQuery);
WebFontConfig = {
    custom: {
        families: ["Realist"]
    }
};
jQuery('.category-box .vv-cats-toggle').on('click', function () {
    jQuery(this).next('ul.submenu').slideToggle();
    jQuery(this).toggleClass('active').siblings().removeClass('active');
});
jQuery('.shop-sidebar h2.s-heading').on('click', function () {
    jQuery(this).next().children().slideToggle();
});
// window.onbeforeunload = function () {
//     window.scrollTo(0, 0);
// };
jQuery(window).load(function () {
    jQuery(this).scrollTop(0);
});
jQuery('.moveToTop').on('click', function () {
    jQuery(window).scrollTop(0);
});

jQuery('span.mobile-menu-toggle').on('click', function () {
    jQuery(this).next('ul.sub-menu').slideToggle('slow');
});
jQuery('span.mobile-menu-btn').on('click', function () {
    jQuery('.mobile-navigation-container').css('left', '0');
});
jQuery('span.menu-close').on('click', function () {
    jQuery('.mobile-navigation-container').css('left', '-100%');
});
window.onscroll = function () {
    myFunction()
};

const header = document.getElementById("masthead");
const sticky = header.offsetTop;
const ContentBox = document.getElementById('page');
const SearchBox = document.getElementById('searchCollapse');

function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
        ContentBox.classList.add('ExPadd');
        SearchBox.classList.remove('show');
    } else {
        header.classList.remove("sticky");
        ContentBox.classList.remove('ExPadd');
    }
}
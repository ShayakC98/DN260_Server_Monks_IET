jQuery(function ($) {
    // Move Compare Button & Wishlist Button & Countdown
    $('ul.products.woovina-row.grid li.product, div.wew-woo-slider ul.products li.product').each(function(index, item) {
        var wishlist   = $(item).find('div.tinv-wraper.tinv-wishlist');
        var compare    = $(item).find('a.compare.button');
        var addtocart  = $(item).find('li.btn-wrap a.button');
        var wrapper    = $(item).find('li.btn-wrap');
        var quickview  = $(item).find('li.image-wrap a.wvn-quick-view');

        var atctext	= $(addtocart).html();
        var cptext	= $(compare).html();
        var qvtext  = $(quickview).text();

        // Add wrapper for the Add to cart & Compare
        $(addtocart).wrap('<div class="btn-inner btn-addtocart"></div>');
        $(compare).wrap('<div class="btn-inner btn-compare"></div>');
        $(quickview).wrap('<div class="btn-inner btn-quickview"></div>');
        addtocart = $(item).find('div.btn-inner.btn-addtocart');
        compare   = $(item).find('div.btn-inner.btn-compare');
        quickview = $(item).find('div.btn-inner.btn-quickview');

        var pach 	= $('<div class="btn-positions"></div>')


        // Add tooltip for buttons
        $("<div class='tooltip for-addtocart'>" + atctext + "</div>").appendTo($(addtocart));
        $("<div class='tooltip for-compare'>" + cptext + "</div>").appendTo($(compare));
        $("<div class='tooltip for-quickview'>" + qvtext + "</div>").appendTo($(quickview));

        // Add class for button Wishlist
        $(wishlist).addClass('btn-inner btn-wishlist');
        $(wishlist).find('div.tinvwl-tooltip').attr('class', 'tooltip for-wishlist');

        $(wishlist).appendTo($(pach));
        $(pach).appendTo($(wrapper));
        $(compare).appendTo($(pach));
        $(quickview).appendTo($(pach));


        // Move Countdown
        var countdown  = $(item).find('div.jquery-countdown');
        var imgwrapper = $(item).find('div.woo-entry-image');

        $(wrapper).appendTo(imgwrapper);

        if($(countdown).length) {
            $(countdown).removeClass('is-countdown');
            $(countdown).appendTo($(imgwrapper));
            $(item).find('div.jquery-countdown').each(function(index) {
                $(this).countdown({until: new Date($(this).attr('data-timer')), format: 'DHMS', padZeroes: true});
            });
        }
    });


    // For single product page
    if($('body.single-product').length) {
        var wishlist = $('body.single-product div.entry-summary').find('div.tinv-wraper');
        var compare  = $('body.single-product div.entry-summary').find('a.compare.button');
        var formcart = $('body.single-product div.entry-summary').find('form.cart');
        var cptext	 = $(compare).html();

        // Add wrapper for the Compare
        $(compare).wrap('<div class="btn-inner btn-compare"></div>');
        compare = $('body.single-product div.entry-summary').find('div.btn-inner.btn-compare');
        $("<div class='tooltip for-compare'>" + cptext + "</div>").appendTo($(compare));

        $('<div class="btn-single-page"></div>').appendTo($(formcart));
        var wrapper = $('body.single-product div.entry-summary').find('.btn-single-page');

        // Add class for button Wishlist
        $(wishlist).addClass('btn-inner btn-wishlist');
        $(wishlist).find('div.tinvwl-tooltip').attr('class', 'tooltip for-wishlist');

        $(wishlist).appendTo($(wrapper));
        $(compare).appendTo($(wrapper));
    }

    // After added to cart
    $(document.body).on('added_to_cart', function(){
        $('.btn-addtocart .added_to_cart').each(function(index, item) {
            var txtAdded = $(item).text();
            $(item).next().text(txtAdded);
        });
    });

    $('.single-product .product.wvn-tabs-layout-horizontal .woocommerce-product-gallery .flex-control-thumbs').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 4,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 3,
                    infinite: true,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $(document).on("ready", function () {
        "use strict";
        $j('.select-categories h5').on('click', function (event) {
            event.preventDefault();
            $j('.select-categories .product-categories').slideToggle("fast");
        });
        $('body').delegate('.elementor-menu-cart__close-button', 'click', function(e){
            e.preventDefault();
            $('body').removeClass('show-cart');
            $('.wvn-cart-overlay').hide();
        });


    });

    $(document).on("ready", function () {
        $(document).on('click', '.wew-tabs-wrap', function () {
            $(this).addClass('open-show');
        }).on('click', '.wew-tab-title', function (e) {
            e.stopPropagation();
            $(this).closest('.wew-tabs-wrap').removeClass('open-show');
        });
    });
    $(document).on("ready", function () {
        $(document).on('click', '.wew-tabs-wrap', function () {
            $(this).addClass('open-show');
        }).on('click', '.wew-tab-title', function (e) {
            e.stopPropagation();
            $(this).closest('.wew-tabs-wrap').removeClass('open-show');
        });

        $('.carousel .wew-brands-list').attr('dir', 'rtl');
        $('.carousel .wew-brands-list').slick({
            slidesToShow: 6,
            slidesToScroll: 6,
            dots: false,
            arrow: true,
            infinite: true,
            cssEase: 'linear',
            rtl: true,
            prevArrow: '<span class="slick-prev"><i class="icon-arrow-left"></i></span>',
            nextArrow: '<span class="slick-next"><i class="icon-arrow-right"></i></span>',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                    }
                },
            ]
        });


    });
    //elementor-menu-cart__container elementor-lightbox elementor-menu-cart--shown


});
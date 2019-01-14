/**
 * @package Moview Template
 * @author JoomShaper http://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2016 JoomShaper
 */

jQuery(function ($) {

// Off Canvas Menu
    $('#offcanvas-toggler').on('click', function (event) {
        event.preventDefault();
        $('body').addClass('offcanvas');
    });
    $('<div class="offcanvas-overlay"></div>').insertBefore('.body-innerwrapper > .offcanvas-menu');
    $('.close-offcanvas, .offcanvas-overlay').on('click', function (event) {
        event.preventDefault();
        $('body').removeClass('offcanvas');
    });
    // Mega Menu
    $('.sp-megamenu-wrapper').parent().parent().css('position', 'static').parent().css('position', 'relative');
    $('.sp-menu-full').each(function () {
        $(this).parent().addClass('menu-justify');
    });
    // Sticky Menu
    $(document).ready(function () {
        $("body.sticky-header").find('#sp-header').sticky();
        $('.sticky-wrapper').css('height', 'inherit');
    });
    // has social share
    if ($(".sppb-post-share-social").length || $(".helix-social-share-icon").length) {
// social share
        $('.prettySocial').prettySocial();
    }
    ;
    $("section#sp-bottom, footer#sp-footer").wrapAll('<div class="sp-bottom-footer"></div>');
    //Blog details image height
    /*
     if ( $( '.view-article .article-item-header-wrapper' ).length) {
     var slideHeight = $(window).height();
     $('.view-article .article-item-header-wrapper').css('height',slideHeight-70);
     }
     */

    // Tooltip
    $('[data-toggle="tooltip"]').tooltip();
    // Moview ratings
    $(document).on('click', '.sp-rating .star', function (event) {
        event.preventDefault();
        var data = {
            'action': 'voting',
            'user_rating': $(this).data('number'),
            'id': $(this).closest('.post_rating').attr('id')
        };
        var request = {
            'option': 'com_ajax',
            'plugin': 'helix3',
            'data': data,
            'format': 'json'
        };
        $.ajax({
            type: 'POST',
            data: request,
            beforeSend: function () {
                $('.post_rating .ajax-loader').show();
            },
            success: function (response) {
                var data = $.parseJSON(response.data);
                $('.post_rating .ajax-loader').hide();
                if (data.status == 'invalid') {
                    $('.post_rating .voting-result').text('You have already rated this entry!').fadeIn('fast');
                } else if (data.status == 'false') {
                    $('.post_rating .voting-result').text('Somethings wrong here, try again!').fadeIn('fast');
                } else if (data.status == 'true') {
                    var rate = data.action;
                    $('.voting-symbol').find('.star').each(function (i) {
                        if (i < rate) {
                            $(".star").eq(-(i + 1)).addClass('active');
                        }
                    });
                    $('.post_rating .voting-result').text('Thank You!').fadeIn('fast');
                }

            },
            error: function () {
                $('.post_rating .ajax-loader').hide();
                $('.post_rating .voting-result').text('Failed to rate, try again!').fadeIn('fast');
            }
        });
    });
    $('.play-video').on('click', function () {
        $(this).closest('.sppb-section').css('z-index', '9999');
        $('body, html').css('overflow', 'hidden');
    });
    $('.video-close').on('click', function () {
        $(this).closest('.sppb-section').css('z-index', 'inherit');
        $('body, html').css('overflow', 'initial');
    });
});
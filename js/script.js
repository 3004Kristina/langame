$(document).on('dragstart','img', function(event) { event.preventDefault(); });
window.Layout = {
    initSlick: function() {
        if (!jQuery.fn.slick) {
            return;
        }

        jQuery('.release_carousel').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<button type="button" class="slick-prev slick-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>',
            nextArrow: '<button type="button" class="slick-next slick-arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>'
        });

        jQuery('.tournament_carousel').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            prevArrow: '<button type="button" class="slick-prev slick-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>',
            nextArrow: '<button type="button" class="slick-next slick-arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>'
        });
    },

    initPhoneMask: function() {
        if (!jQuery.fn.mask) {
            return;
        }

        jQuery('input[type="tel"]').mask('+7 (999) 999-99-99');
    },

    initBirthdayMask: function() {
        if (!jQuery.fn.mask) {
            return;
        }

        jQuery('#registr-birthday-input').mask('00.00.0000');
    },

    initAjaxUrlHandlers: function() {
        jQuery(document).on('click', 'a[data-ajax-url][href^="/"]', function(e) {
            e.preventDefault();

            var $link = jQuery(this),
                url = $link.attr('href');

            Layout.goTo(url);
        });
    },

    init: function() {
        // initialize plugins
        Layout.initSlick();
        Layout.initPhoneMask();
        Layout.initBirthdayMask();
    },

    activateUrlLinks: function(url) {
        jQuery('a[data-ajax-url][href^="/"]')
            .removeClass('active')
            .filter('[href="' + url + '"]')
            .addClass('active');
    },

    goTo: function(url) {
        if (url === location.pathname) {
            return;
        }

        history.replaceState({}, document.title, url);

        Layout.activateUrlLinks(url);

        jQuery.ajax({
            method: 'GET',
            url: url,
            dataType: 'html',
            data: {ajax: 1},
            success: function (html) {
                jQuery('section.main').html(html);

                Layout.init();
                Layout.activateUrlLinks(url);
            }
        });
    }
};

jQuery(function() {
    'use strict';

    Layout.init();
    Layout.activateUrlLinks(location.pathname);
    Layout.initAjaxUrlHandlers();

    // Clock on auth page
    (function() {
        var $clock = jQuery('#clock');

        if ($clock.length > 0) {
            $clock.text(getCurrentTime());

            setInterval(function() {
                $clock.text(getCurrentTime());
            }, 1000);
        }

        function getCurrentTime() {
            var time = new Date(),
                h = '' + time.getHours(),
                m = '' + time.getMinutes(),
                s = '' + time.getSeconds();

            h = h.length === 1 ? '0' + h : h;
            m = m.length === 1 ? '0' + m : m;
            s = s.length === 1 ? '0' + s : s;

            return h + ':' + m;
        }
    })();

    jQuery('.select_wrapper select').each(function() {
        let $this = jQuery(this);

        $this.select2({
            minimumResultsForSearch: Infinity,
            placeholder: 'Поиск по городам',
            dropdownParent: $this.closest('.select_wrapper'),
            width: '100%'
        });
    });
});

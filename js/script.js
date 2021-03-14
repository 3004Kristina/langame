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

        jQuery('.hot_new_game_carousel').slick({
            infinite: true,
            slidesToShow: 7,
            slidesToScroll: 1,
            prevArrow: '<button type="button" class="slick-prev slick-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i></button>',
            nextArrow: '<button type="button" class="slick-next slick-arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i></button>'
        });

        jQuery('.popular_game_carousel').slick({
            infinite: true,
            slidesToShow: 7,
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
            success: function(html) {
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

    jQuery(document).on('dragstart', 'img', function(e) {
        e.preventDefault();
    });

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

    /**
     * Search game page
     */
    (function() {
        var $form = jQuery('#select-game-form'),
            $gamesList = jQuery('.games_name_list'),
            $search = $form.find('[name="search"]'),
            $searchPlaceholder = jQuery('.search_placeholder');

        if ($form.length === 0) {
            return;
        }

        jQuery('.games_list_wrapper').scrollbar();

        $search.on('input focus change blur', function(e) {
            if ($search.is(':focus') || !!e.target.value) {
                $search.addClass('searching');
                $searchPlaceholder.addClass('hidden');
            } else {
                $search.removeClass('searching');
                $searchPlaceholder.removeClass('hidden');
            }
        });

        var games = [],
            timeout;

        jQuery('[data-games-group] ul li a').each(function() {
            var $link = jQuery(this),
                text = $link.text();

            games.push({
                text: convertTextForSearch(text),
                element: $link.closest('li')
            });
        });

        $form.on('input change reset', function(e) {
            var groups = [],
                search = convertTextForSearch($search.val());

            clearTimeout(timeout);

            timeout = setTimeout(function() {
                // Group filter
                (function() {
                    $form.find('input[name="group"]:checked').each(function() {
                        groups.push(this.value);
                    });

                    if (groups.length > 0) {
                        jQuery('[data-games-group]').each(function() {
                            var $group = jQuery(this),
                                group = $group.data('games-group');

                            $group.toggleClass('hidden', groups.indexOf(group) === -1);
                        });
                    } else {
                        jQuery('[data-games-group]').removeClass('hidden');
                    }
                })();

                // Search filter
                (function() {
                    if (search) {
                        for (var i in games) {
                            var text = games[i].text,
                                $li = games[i].element,
                                $group = $li.closest('[data-games-group]');

                            $li.toggleClass('hidden', text.indexOf(search) === -1);
                            $group.toggle($group.find('ul li:not(.hidden)').length !== 0);
                        }
                    } else {
                        jQuery('[data-games-group]').show();
                        jQuery('[data-games-group] ul li').removeClass('hidden');
                    }
                })();

                jQuery('.sliders_wrapper').toggleClass('hidden', !!search || (groups.length > 0));
                jQuery('[data-role="search-by-input-count"]').text(jQuery('[data-games-group] ul li:visible').length);

                $gamesList.toggleClass('search_by_group', groups.length > 0);
                $gamesList.toggleClass('search_by_input', !!search);
            }, 150);
        });

        $form.on('click', 'input[name="group"]', function(e) {
            var clickedInput = this;

            setTimeout(function() {
                if (clickedInput.checked) {
                    $form
                        .find('input[name="group"][value!="' + clickedInput.value + '"]:checked')
                        .prop('checked', false)
                        .trigger('change');
                }
            }, 25);
        });

        function convertTextForSearch(input) {
            return ('' + input).replace(/[^a-zа-яё0-9]/igm, '').toLowerCase();
        }
    })();

    jQuery('#modal-prolongation_session').on('submit', function(e) {
        e.preventDefault();

        var $form = jQuery(this),
            data = $form.serialize();

        jQuery('body').addClass('remodal-content-loading');

        jQuery.ajax({
            type: 'POST',
            url: '',
            data: data,
            success: function() {
                jQuery('body').removeClass('remodal-content-loading');

                removeRemodalAnimation();

                showWaitingModal('Пожалуйста ожидайте,<br>время начисляется!');
            }
        });
    });

    jQuery('#modal-cash_in').on('submit', function(e) {
        e.preventDefault();

        var $form = jQuery(this),
            data = $form.serialize();

        jQuery('body').addClass('remodal-content-loading');

        jQuery.ajax({
            type: 'POST',
            url: '',
            data: data,
            success: function() {
                jQuery('body').removeClass('remodal-content-loading');

                removeRemodalAnimation();

                showWaitingModal('Пожалуйста ожидайте,<br>баланс пополняется!');
            }
        });
    });

    jQuery('#modal-start_session').on('submit', function(e) {
        e.preventDefault();

        var $form = jQuery(this),
            $nextModal = jQuery('[data-remodal-id="begin_session_modal"]'),
            $checkedPackage = $form.find('input[name="package"]:checked'),
            packageName = $checkedPackage.data('package'),
            price = $checkedPackage.data('price'),
            title = packageName + ' стоимостью ' + price,
            values = {
                'package': $checkedPackage.val(),
                'time-qty': $form.find('input[name="time-qty"]:not(:disabled)').val()
            };

        for (var name in values) {
            $nextModal.find('input[type="hidden"][name="' + name + '"]').val(values[name]);
        }

        if ($checkedPackage.is('[data-price-per-minute]')) {
            var minutesTotal = +values['time-qty'],
                minutes = minutesTotal % 60,
                hours = Math.floor(minutesTotal / 60),
                priceNum = Math.ceil(+$checkedPackage.data('price-per-minute') * minutesTotal),
                timeLabels = [];

            if (hours > 0) {
                timeLabels.push(formatter.hours(hours, 'v'));
            }

            if (minutes > 0) {
                timeLabels.push(formatter.minutes(minutes, 'v'));
            }

            title = 'Пакет на ' + timeLabels.join(' ') + ' стоимостью ' + priceNum + ' руб.';
        }

        $nextModal.find('.service_package').text(title);

        removeRemodalAnimation();

        $nextModal.remodal().open();
    });

    jQuery('#modal-begin_session').on('submit', function(e) {
        e.preventDefault();

        var $form = jQuery(this),
            data = $form.serialize();

        jQuery('body').addClass('remodal-content-loading');

        jQuery.ajax({
            type: 'POST',
            url: '',
            data: data,
            success: function() {
                jQuery('body').removeClass('remodal-content-loading');

                removeRemodalAnimation();

                showWaitingModal('Пожалуйста ожидайте,<br>время начисляется!');
            }
        });
    });

    jQuery('#modal-problem_report').on('submit', function(e) {
        e.preventDefault();

        var $form = jQuery(this),
            data = $form.serialize();

        jQuery('body').addClass('remodal-content-loading');

        jQuery.ajax({
            type: 'POST',
            url: '',
            data: data,
            success: function() {
                jQuery('body').removeClass('remodal-content-loading');

                removeRemodalAnimation();

                jQuery('[data-remodal-id="main_page_success_modal"]').remodal().open();

                jQuery('#modal-problem_report .symbol_counter').text('0');
            }
        });
    });

    jQuery('#modal-problem_report textarea').on('input', function() {
        var $this = jQuery(this),
            $symbol_counter = jQuery('#modal-problem_report .symbol_counter'),
            max = 1000,
            len = $this.val().length;

        if (len >= max) {
            $this.val($this.val().substr(0, max));
            $symbol_counter.text(max);

        } else {
            $symbol_counter.text(len);
        }
    });

    jQuery('.main_problem_report_modal').on('closed', function(e) {
        jQuery('.main_problem_report_modal .symbol_counter').text('0');
    });

    jQuery('.main_start_session_modal .start_content').on('click', function(e) {
        var $this = jQuery(this);

        $this.closest('label')
            .find('.select_time')
            .slideDown()
            .find('input[type="number"]')
            .prop('disabled', false);

        jQuery('.main_start_session_modal .start_content')
            .not($this)
            .closest('label')
            .find('.select_time')
            .slideUp()
            .find('input[type="number"]')
            .prop('disabled', true);
    });

    jQuery('.main_start_session_modal').on('closed', function(e) {
        jQuery(this)
            .find('.select_time')
            .slideUp()
            .find('input[type="number"]')
            .prop('disabled', true);
    });

    jQuery('[data-disable-by-checkbox]').each(function() {
        var $div = jQuery(this),
            $checkbox = jQuery($div.data('disable-by-checkbox'));

        $checkbox.on('change', function(e) {
            $div.find('input').prop('disabled', !this.checked);

            if (this.checked) {
                $div.slideDown();
            } else {
                $div.slideUp();
            }
        });
    });

    jQuery('.qty').each(function() {
        let $qty = jQuery(this),
            $input = $qty.find('input[type="number"]'),
            $right = $qty.find('.right'),
            $left = $qty.find('.left');

        $right.on('click', function() {
            let res = $input.val();
            res = +res + 10;
            $input.val(res);
        });

        $left.on('click', function() {
            let res = $input.val();
            res = +res - 10;
            $input.val(Math.max(res, 10));
        });
    });

    jQuery('#cash_in-input').mask('0 000 000', {reverse: true});
    jQuery('#bonus-begin-session-input').mask('0 000 000', {reverse: true});
    jQuery('#bonus-prolongation-session-input').mask('0 000 000', {reverse: true});

    jQuery('.main_cash_in_modal [data-cash-in]').on('click', function(e) {
        var $button = jQuery(this);

        jQuery('#cash_in-input').val('' + $button.data('cash-in')).trigger('change');
    });

    function showWaitingModal(text) {
        var waitingModal = jQuery('.main_waiting_modal');

        waitingModal.find('.waiting_modal_title').html(text);

        waitingModal.remodal().open();
    }
});
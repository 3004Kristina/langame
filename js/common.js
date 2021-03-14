jQuery(function() {
    jQuery('form').on('change input reset check-submit-available', function(e, params) {
        if (typeof params === 'object' && params !== null) {
            if (params.skipSubmitDisabling) {
                return;
            }
        }

        var $form = jQuery(this),
            filled = true;

        $form.find('input[type="text"], input[type="tel"], input[type="password"], textarea').each(function() {
            if (this.required && !this.disabled && !this.value) {
                filled = false;
            }
        });

        $form.find('input[type="checkbox"]').each(function() {
            if (this.required && !this.disabled && !this.checked) {
                filled = false;
            }
        });

        $form.find('input[type="radio"]').each(function() {
            if (this.required && !this.disabled) {
                var inputName = jQuery(this).attr('name');

                if ($form.find('input[type="radio"][name="' + inputName + '"]:checked').length === 0) {
                    filled = false;
                }
            }
        });

        $form.find('[type="submit"]').toggleClass('disabled', !filled);
    });

    jQuery('.remodal').on('closed', function(e) {
        jQuery('.remodal form')
            .trigger('reset')
            .find('input, select, textarea')
            .trigger('change', {skipSubmitDisabling: true});
    });

    jQuery('.remodal').on('opening', function(e) {
        jQuery(this)
            .find('form')
            .trigger('check-submit-available');
    });

    jQuery(document).on('dragstart', 'img', function(event) {
        event.preventDefault();
    });

    jQuery('[data-placeholder][data-label]').on('input change focus blur', 'input', function(e) {
        var $input = jQuery(this),
            $formGroup = $input.closest('[data-placeholder][data-label]');
        if ($input.is(':focus') || !!e.target.value) {
            $formGroup.addClass('filled');
        } else {
            $formGroup.removeClass('filled');
        }
    });

    jQuery('input[type=password]').on('input change focus blur', function(e) {
        if (jQuery(this).is(':focus') || !!e.target.value) {
            jQuery(this).closest('.form-group').find('.inspect_pass').addClass('show');
        } else {
            jQuery(this).closest('.form-group').find('.inspect_pass').removeClass('show');
        }
    });

    jQuery(document).on('mousedown', '[data-action="show_password"]', function() {
        jQuery(this).closest('.form-group').find('input').attr('type', 'text');
    });

    jQuery(document).on('mouseup mouseout', '[data-action="show_password"]', function() {
        jQuery(this).closest('.form-group').find('input').attr('type', 'password');
    });
});

function removeRemodalAnimation() {
    jQuery('body').addClass('remodal-overlay-without-animation');

    setTimeout(function() {
        jQuery('body').removeClass('remodal-overlay-without-animation');
    }, 1200);
}

window.formatter = (function() {
    var hoursLabelFormats = {
            i: new IntlMessageFormat.IntlMessageFormat('{hours, plural, one{# час} few{# часа} many{# часов} other{# часа}}', 'ru-RU'),
            v: new IntlMessageFormat.IntlMessageFormat('{hours, plural, one{# час} few{# часа} many{# часов} other{# часа}}', 'ru-RU'),
        },
        minutesLabelFormats = {
            i: new IntlMessageFormat.IntlMessageFormat('{minutes, plural, one{# минута} few{# минуты} many{# минут} other{# минуты}}', 'ru-RU'),
            v: new IntlMessageFormat.IntlMessageFormat('{minutes, plural, one{# минуту} few{# минуты} many{# минут} other{# минуты}}', 'ru-RU'),
        },
        secondsLabelFormats = {
            i: new IntlMessageFormat.IntlMessageFormat('{seconds, plural, one{# секунда} few{# секунды} many{# секунд} other{# секунды}}', 'ru-RU'),
            v: new IntlMessageFormat.IntlMessageFormat('{seconds, plural, one{# секунду} few{# секунды} many{# секунд} other{# секунды}}', 'ru-RU'),
        };

    function hoursLabel(hours, padej) {
        padej = padej || 'i';

        return hoursLabelFormats[padej].format({
            hours: hours
        });
    }

    function minutesLabel(minutes, padej) {
        padej = padej || 'i';

        return minutesLabelFormats[padej].format({
            minutes: minutes
        });
    }

    function secondsLabel(seconds, padej) {
        padej = padej || 'i';

        return secondsLabelFormats[padej].format({
            seconds: seconds
        });
    }

    return {
        hours: hoursLabel,
        minutes: minutesLabel,
        seconds: secondsLabel
    };
})();

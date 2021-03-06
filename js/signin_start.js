jQuery(function() {
    var forgotFormPasswordInterval;

    jQuery('.main_prolongation_session_modal .forgot_password').on('click', function(e) {
        e.preventDefault();

        removeRemodalAnimation();

        jQuery('[data-remodal-id="forgot_password_modal"]').remodal().open();
    });

    jQuery('#modal-form-code-recovery').on('input change blur', 'input', function(e) {
        var $input = jQuery(this);

        if ($input.is(':focus') || !!e.target.value) {
            $input.addClass('filled');
        } else {
            $input.removeClass('filled');
        }
    });

    jQuery('#modal-form-forgot-password').on('submit', function(e) {
        e.preventDefault();

        var $form = jQuery(this);

        jQuery('body').addClass('remodal-content-loading');

        jQuery.ajax({
            type: 'POST',
            url: '',
            data: $form.serialize(),
            success: function() {
                jQuery('body').removeClass('remodal-content-loading');

                removeRemodalAnimation();

                jQuery('[data-remodal-id="code_recovery_modal"]').remodal().open();

                clearInterval(forgotFormPasswordInterval);
                startCountDown();
            }
        });
    });

    jQuery('#modal-form-code-recovery').on('submit', function(e) {
        e.preventDefault();

        var $form = jQuery(this),
            data = $form.serializeArray(),
            code = '';

        for (var i in data) {
            if (data[i].name === 'code') {
                code += data[i].value || ' ';
            }
        }

        jQuery('body').addClass('remodal-content-loading');

        jQuery.ajax({
            type: 'POST',
            url: '',
            data: {code: code},
            success: function() {
                jQuery('body').removeClass('remodal-content-loading');

                removeRemodalAnimation();

                jQuery('[data-remodal-id="set_new_password_modal"]').remodal().open();
            }
        });
    });

    jQuery('#modal-set-new-password').on('submit', function(e) {
        e.preventDefault();

        var $form = jQuery(this);

        jQuery.ajax({
            type: 'POST',
            url: '',
            data: $form.serialize(),
            success: function() {

                removeRemodalAnimation();

                jQuery('[data-remodal-id="success_modal"]').remodal().open();
            }
        });
    });



    var KEY_BACKSPACE = 8,
        KEY_TAB = 9,
        KEY_DELETE = 46,
        KEY_ENTER = 13,
        CODE_ALLOWED_KEYBOARD_KEYS = [
            112, /* F1 */  48, /* 0 main keyboard */ 96,  /* 0 side keyboard */
            113, /* F2 */  49, /* 1 main keyboard */ 97,  /* 1 side keyboard */
            114, /* F3 */  50, /* 2 main keyboard */ 98,  /* 2 side keyboard */
            115, /* F4 */  51, /* 3 main keyboard */ 99,  /* 3 side keyboard */
            116, /* F5 */  52, /* 4 main keyboard */ 100, /* 4 side keyboard */
            117, /* F6 */  53, /* 5 main keyboard */ 101, /* 5 side keyboard */
            118, /* F7 */  54, /* 6 main keyboard */ 102, /* 6 side keyboard */
            119, /* F8 */  55, /* 7 main keyboard */ 103, /* 7 side keyboard */
            120, /* F9 */  56, /* 8 main keyboard */ 104, /* 8 side keyboard */
            121, /* F10 */ 57, /* 9 main keyboard */ 105, /* 9 side keyboard */
            122, /* F11 */
            123, /* F12 */

            KEY_BACKSPACE,
            KEY_TAB,
            KEY_DELETE,
            KEY_ENTER
        ];

    jQuery(document).on('keydown', '.code_wrapper input', function(e) {
        var key = e.keyCode || e.which;

        if (CODE_ALLOWED_KEYBOARD_KEYS.indexOf(key) === -1) {
            e.preventDefault();
        }
    });

    jQuery(document).on('keyup change', '.code_wrapper input', function(e) {
        var $this = jQuery(this),
            key = e.keyCode || e.which;

        if (key === KEY_BACKSPACE || key === KEY_DELETE) {
            $this.prev('input').trigger('focus');

            return;
        }

        if ($this.val().length === 1) {
            $this.next('input').trigger('focus');
        }
    });

    function startCountDown() {
        var $countdown = jQuery('#countdown'),
            $reSendCode = jQuery('#reSendCode'),
            time = 180;

        $countdown.text(getTimeText(time));

        $reSendCode.addClass('disabled');

        forgotFormPasswordInterval = setInterval(function() {
            time--;
            $countdown.text(getTimeText(time));
            if (time === 0) {
                $reSendCode.removeClass('disabled');
                $countdown.text(' ');

                clearInterval(forgotFormPasswordInterval);
            }
        }, 1000);
    }

    function getTimeText(time) {
        var minutes = '' + Math.floor(time / 60),
            seconds = '' + time % 60;

        seconds = seconds.length === 1 ? '0' + seconds : seconds;

        return minutes + ':' + seconds;
    }


    jQuery('.remodal').on('opened', function(e) {
        jQuery(this).find('form input').eq(0).trigger('focus');
    });
});



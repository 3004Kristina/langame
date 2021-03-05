jQuery(function() {

    jQuery('select').on('change blur', function(e){
        jQuery('#select2-registr_document-container').addClass('success');
    });

    jQuery('[data-placeholder][data-label]').on('input change focus blur', 'input', function(e) {
        var $input = jQuery(this),
            $formGroup = $input.closest('[data-placeholder][data-label]');
        if ($input.is(":focus") || !!e.target.value) {
            $formGroup.addClass('filled');
        } else{
            $formGroup.removeClass('filled');
        }
    });

    jQuery('input[type=password]').on('input change focus blur', function(e){
        if(jQuery(this).is(":focus") ||!!e.target.value){
            jQuery(this).closest('.form-group').find('.inspect_pass').addClass('show');
        } else {
            jQuery(this).closest('.form-group').find('.inspect_pass').removeClass('show');
        }
    });

    $(document).on('mousedown', '[data-action="show_password"]',function(){
        $(this).closest('.form-group').find('input').attr('type','text');
    })
    $(document).on('mouseup mouseout', '[data-action="show_password"]',function(){
        $(this).closest('.form-group').find('input').attr('type','password');
    })


    jQuery('form').on('change input', function(e) {
        var $form = jQuery(this),
            filled = true;

        jQuery(this).find('input[type="text"], input[type="tel"], input[type="password"]').each(function() {
            if (!this.value) {
                filled = false;
            }
        });

        jQuery(this).find('input[type="checkbox"]').each(function() {
            if (!this.checked) {
                filled = false;
            }
        });

        $form.find('[type="submit"]').toggleClass('disabled', !filled);
    })


    jQuery('#full-registration-form')
        .validate({
            validClass: "success",
            focusCleanup: true,
            rules: {
                name: {
                    required: true,
                    minlength: 1
                },
                phone: {
                    required: true,
                    minlength: 11
                },
                password: {
                    required: true,
                    minlength: 6
                },
                birthday: {
                    required: true,
                },
                passport: {
                    required: true,
                    minlength: 10
                },
            },

            messages: {
                name: '',
                phone: 'Поле должно содержать 11 цифр',
                birthday: '',
                passport: 'Поле должно содержать 10 Символов',
                password: 'Пароль должен быть не менее 6 символов'
            }
        });

});



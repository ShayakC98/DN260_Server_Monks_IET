jQuery(function () {
    "use strict";

    var loader = jQuery(".wpnotif_load_overlay").first();
    var form;
    var button_text;

    jQuery(".wpnotif_subscribe").on('submit', function (e) {
        form = jQuery(this);
        var data = jQuery(this).serialize();
        if (form.data('verify') !== 1 && form.find(".wpnotif_otp_field").length) {
            if (wpn_sub.is_digits == 1) {
                return true;
            } else {
                form.data('show_otp', 1);
                data = data + "&action=wpnotif_send_otp";
            }
        } else {
            data = data + "&action=wpnotif_user_subscribe";
        }
        submit_form(data);
        return false;
    });

    function submit_form(data) {
        hideWPNotifMessage();
        loader.show();
        jQuery.ajax({
            type: 'post',
            url: wpn_sub.ajax_url,
            data: data,
            success: function (res) {
                loader.hide();
                if (res.success === true) {

                    if (form.data('show_otp') === 1) {
                        form.find('.wpnotif_otp_field').slideDown('fast').find('input').attr('required', true).trigger('focus');
                        var submit_button = form.find('[type="submit"]');
                        submit_button.text(wpn_sub.SubmitOTP);
                        form.data({'show_otp': 0, 'verify': 1});
                    } else {
                        showWPNotifSuccessMessage(res.data.message);
                        resetForm();
                    }
                } else {
                    if (res.data.level == 1) {
                        showWPNotifNoticeMessage(res.data.message);
                    } else {
                        showWPNotifErrorMessage(res.data.message);
                    }
                }

            }, error: function () {
                loader.hide();
                showWPNotifErrorMessage(wpn_sub.Error);
            }
        });
    }

    function resetForm() {
        form.find('.wpnotif_otp_field').hide();
        form.find('.wpnotif-field input').prop("disabled", true);
        form.find('[type="submit"]').text(wpn_sub.subscribe).prop("disabled", true);

    }
});
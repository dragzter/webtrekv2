$('#mc-embedded-subscribe-form-2').submit(function(e) {
    e.preventDefault();

    var formAction = $(this).attr('action') + '&c=?';
    var updatedAction = formAction.replace('post', 'post-json');

    $.ajax({
        type: $(this).attr('method'),
        url: updatedAction,
        data: $(this).serialize(),
        cache: false,
        dataType: 'json',
        contentType: "application/json; charset=utf-8",
        error: function(err) { alert("Could not connect to the registration server. Please try again later."); },
        success: function(data) {
            
            $('#mce-success-response, #mce-error-response').html('');

            if (data.result == "success") {
                $('#mce-success-response').html('Thank you for subscribing!');
                $('#mce-success-response').css('display', 'block');
            } else {
                if ( data.msg.indexOf('already subscribed')) {
                    $('#mce-error-response').html('Thank You!<br> This email is already subscribed.');
                    $('#mce-error-response').css('display', 'block');
                } else {
                    $('#mce-error-response').html('Something went wrong...');
                    $('#mce-error-response').css('display', 'block');
                }
            }
            $('input.email').val('')
        }
    });

});
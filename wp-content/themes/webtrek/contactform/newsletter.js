$(document).ready(function(){
    $('form.newsletter-form').submit(function(e) {
        e.preventDefault();
        var action = $(this).attr('action');
        var method = $(this).attr('method');
        var str = $(this).serialize();
       
    
        $.ajax({
            type: method,
            url: action,
            data: str,
            success: function(data) {
      
                $('.submit-success').removeClass('d-none');
                $('.newsletter-email').val('').attr('placeholder', 'Thanks for subscribing!');
                setTimeout(function(){
                    $('.submit-success').fadeOut('slow')
                }, 3000);
            }
        });
    });
});
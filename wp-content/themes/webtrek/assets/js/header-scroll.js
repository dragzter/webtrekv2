function changeOnScroll() {
    $(document).scroll(function() {
        if ($(window).scrollTop() > 100) {
            $('#header').addClass('header-scrolled');
        } else {
            $('#header').removeClass('header-scrolled');
        }
    })
};

$(document).ready(function() {
    changeOnScroll();
})
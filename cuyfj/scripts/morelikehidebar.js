$(function() {
    $('#donav').click(function() {
        if ($('.sidebar').hasClass('hide')) {
            $('.sidebar').removeClass('hide');
        } else {
            $('.sidebar').addClass('hide');
        }
    });
});
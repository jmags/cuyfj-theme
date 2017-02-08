$(function() {
    // Avail ourselves of a less hideous scrollbar.
    $('.siderbar').mCustomScrollbar({
        scrollInertia: 0 // Don't "improve" scroll behavior.
    });

    $('#donav').click(function() {
        if ($('.sidebar').hasClass('hide')) {
            $('.sidebar').removeClass('hide');
            $('#donav').text('Site Navigation -');
        } else {
            $('.sidebar').addClass('hide');
            $('#donav').text('Site Navigation +');
        }
    });
});
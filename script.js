$(window).scroll(function() {
    if ($(this).scrollTop() > 200) /*height in pixels when the navbar becomes non opaque*/ {
        $('.navbar').addClass('color-bg');
        $('.navbar').removeClass('no-bg');
    } else {
        $('.navbar').addClass('no-bg');
        $('.navbar').removeClass('color-bg');
    }
});
$(() => {
    cssVars();

    $('.lazy-load').visibility({
        type: 'image',
        transition: 'fade in',
        duration: 1000
    }).on('load', function(e) {
        $(this).prev('.placeholder').remove(); 
    });

    $('.ui.dropdown').dropdown();
    $('.ui.embed').embed();
    $('.ui.slider').slider();
    $('.ui.sidebar').sidebar('setting', 'transition', 'overlay');

    $('.sidebar-radio').first().each(function() {
        $(this).find('.error-wrapper .close').on('click', function(e) {
            e.preventDefault();
            $(this).parents('.sidebar-radio').removeClass('error');
        });

        $(this).find('.menu .item.close').on('click', function(e) {
            e.preventDefault();
            $('.sidebar-radio').sidebar('hide');
        });
    });

    $('.survey').first().each(function() {
        $(this).find('.progress').progress({
            showActivity: false
        });
        $('button[type=submit]').click(function(e) {
            e.preventDefault();
            $(this).parents('.widget-body').addClass("results");
            $(this).prop('disabled', true);
        });
    });
});
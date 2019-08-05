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
    })
    $('.tiny.modal')
       .modal('show')
    ;
});
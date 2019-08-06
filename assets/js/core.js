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
});
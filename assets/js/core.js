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
    $('#opinion1').progress({
        showActivity: false
      });
      $('#opinion2').progress({
        showActivity: false
      });
      $('#opinion3').progress({
        showActivity: false
      });
      $('#opinion4').progress({
        showActivity: false
      });
      $('#opinion5').progress({
        showActivity: false
      });
    $('#submit-vote').click(function () {
        $('.survey-radiobuttons').replaceWith($('.survey-results'));
        $('.survey-results').css("display","block");
    });
});
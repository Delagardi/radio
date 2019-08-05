$(() => {
    $('.navigation button.play').on('click', (e) => {
        e.preventDefault();
        $('.sidebar-radio').sidebar('show');
    });
});
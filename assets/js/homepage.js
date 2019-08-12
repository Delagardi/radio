$(() => {
    $('.navigation button.play').on('click', (e) => {
        e.preventDefault();
        $('.sidebar-radio').sidebar('show');
    });

    $('.ui.dropdown.downward').dropdown({
        direction: 'downward'
    });
});
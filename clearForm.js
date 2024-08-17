document.addEventListener('DOMContentLoaded', function() {
    const btnClean = document.querySelector('.btn-clean');
    const colourSelect = document.getElementById('colour');
    const sizeSelect = document.getElementById('size');

    btnClean.addEventListener('click', function() {
        // Restablecer los selects
        colourSelect.selectedIndex = 0;
        sizeSelect.selectedIndex = 0;
    });
});

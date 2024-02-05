document.addEventListener('DOMContentLoaded', function () {
    const openPopupBtn = document.getElementById('openPopupBtn');
    const closePopupBtn = document.getElementById('closePopupBtn');
    const popupContainer = document.getElementById('popupContainer');

    openPopupBtn.addEventListener('click', function () {
        popupContainer.style.display = 'flex';
    });

    closePopupBtn.addEventListener('click', function () {
        popupContainer.style.display = 'none';
    });

    // Fechar o pop-up clicando fora do conteúdo
    window.addEventListener('click', function (event) {
        if (event.target === popupContainer) {
            popupContainer.style.display = 'none';
        }
    });
});

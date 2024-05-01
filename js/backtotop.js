 // Espera a que se cargue todo el contenido de la página
 document.addEventListener("DOMContentLoaded", function() {
    // Encuentra el botón "Back to Top" por su ID
    var backToTopButton = document.getElementById('back-to-top');

    // Agrega un evento de clic al botón
    backToTopButton.addEventListener('click', function() {
        // Desplaza la página hacia arriba suavemente
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
document.addEventListener("DOMContentLoaded", function () {
    // Muestra el popup cuando la página se carga
    document.getElementById("popup-container").style.display = "block";

    // Cierra el popup cuando se hace clic en el botón "Cerrar"
    document.getElementById("close-popup").addEventListener("click", function () {
        document.getElementById("popup-container").style.display = "none";
    });
});


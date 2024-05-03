
document.addEventListener("DOMContentLoaded", function() {
    // Obtener el botón por su ID
    var volverIndex = document.getElementById("volverIndex");

    // Verificar si el botón existe antes de agregar el event listener
    if (volverIndex) {
        // Añadir un evento de clic al botón
        volverIndex.addEventListener("click", function() {
            // Redirigir al usuario de vuelta al index.html
            console.log("Botón clickeado");
            window.location.href = "index.html";
        });
    } else {
        console.log("El elemento con el ID 'volverIndex' no existe en el DOM.");
    }
});

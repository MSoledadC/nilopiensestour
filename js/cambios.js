document.addEventListener("DOMContentLoaded", function() {
    const readMoreButtons = document.querySelectorAll('.read-more');

    readMoreButtons.forEach(button => {
      button.addEventListener('click', function() {
        const initialDescription = this.parentElement.querySelector('.initial-description');
        const fullDescription = this.parentElement.querySelector('.full-description');

        if (initialDescription && fullDescription) {
          initialDescription.classList.toggle('d-none');
          fullDescription.classList.toggle('d-none');

          if (initialDescription.classList.contains('d-none')) {
            this.textContent = 'Mostrar menos';
          } else {
            this.textContent = 'Seguir leyendo';
          }
        }
      });
    });
  });
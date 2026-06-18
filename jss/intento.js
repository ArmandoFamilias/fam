const elementosAAnimar = document.querySelectorAll('.intro, .razones, .ame p, .ricano p, [data-animar="scroll"]');

const observador = new IntersectionObserver((entradas) => {
    entradas.forEach(entrada => {
        if (entrada.isIntersecting) {
            entrada.target.classList.add('activado');
            observador.unobserve(entrada.target);
        }
    });
}, {
    threshold: 0.15 
});

// 3. ¡Asegúrate de que esta parte final no se corte!
elementosAAnimar.forEach(elemento => {
    observador.observe(elemento);
});

// 3. Activar el observador
elementosAAnimar.forEach(elemento => {
    observador.observe(elemento);
});

function agregarAlCarrito(nombreProducto) {
  // 1. Buscar el contenedor en el HTML
  const container = document.getElementById('toast-container');
  
  // 2. Crear la notificación
  const toast = document.createElement('div');
  toast.className = 'toast';
  
  // Icono SVG de check verde
  const svgIcon = `<svg class="toast-icon" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>`;
  
  // Insertar el texto dinámico con el nombre del producto
  toast.innerHTML = `${svgIcon} <span>¡${nombreProducto} añadido al carrito!</span>`;
  
  // 3. Mostrar en pantalla
  container.appendChild(toast);
  
  // 4. Animación de salida y eliminación automática
  setTimeout(() => {
    toast.style.animation = 'toast-out 0.3s ease-in forwards';
    toast.addEventListener('animationend', () => {
      toast.remove();
    });
  }, 3000);
}
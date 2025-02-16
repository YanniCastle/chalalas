// Función para abrir el modal con la imagen seleccionada
function openModal(image) {
  const modal = document.getElementById('imageModal2');
  const modalImage = document.getElementById('modalImage2');
  modalImage.src = image.src; // Usa la misma fuente de la imagen clickeada

  modal.style.display = 'block'; // Muestra el modal
}
// Función para cerrar el modal
function closeModal() {
  const modal = document.getElementById('imageModal2');
  modal.style.display = 'none'; // Oculta el modal
}
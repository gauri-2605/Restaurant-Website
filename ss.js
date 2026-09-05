// Script to open and close booking modal
const bookBtn = document.getElementById('bookBtn');
const modal = document.getElementById('bookingModal');
const closeBtn = document.getElementById('closeModal');

bookBtn.addEventListener('click', () => {
  modal.style.display = 'flex';
});

closeBtn.addEventListener('click', () => {
  modal.style.display = 'none';
});

// Close modal when clicking outside modal content
window.addEventListener('click', (e) => {
  if (e.target == modal) {
    modal.style.display = 'none';
  }
});

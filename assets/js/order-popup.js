const orderButton = document.querySelector('.order-button');
const popup = document.getElementById('popup');

orderButton.addEventListener('click', () => {
  popup.style.display = 'block';
});

window.addEventListener('click', (event) => {
    if (event.target == popup) {
      popup.style.display = 'none';
    }
  });

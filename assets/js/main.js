function init() {
  // Проверка на существование body
  if (!document.body) {
    console.log('DOM не загружен!');
    return;
  }

  // Добавление логотипа
  const logo = document.createElement('img');
  logo.src = 'assets/imgs/logo/1000012685(1)-transformed-u_vlc6LNW-transformed.png';
  logo.width = '100';
  logo.height = '60';
  logo.style.zIndex = '1000';
  logo.style.marginLeft = '20px';
  logo.style.marginTop = '5px';
  logo.classList.add('logo');
  document.body.insertBefore(logo, document.body.firstChild);

  // logo2
  const logo2 = document.createElement('img');
  logo2.src = '../assets/imgs/logo/1000012685(1)-transformed-u_vlc6LNW-transformed.png';
  logo2.width = '100';
  logo2.height = '60';
  logo2.style.zIndex = '1000';
  logo2.style.marginLeft = '20px';
  logo2.style.marginTop = '5px';
  logo2.classList.add('logo');
  document.body.insertBefore(logo2, document.body.firstChild);

  // Добавляем отступ для контента
  const main = document.querySelector('main');
  main.style.marginTop = '70px';
}

// Вызов функции после загрузки DOM
document.addEventListener('DOMContentLoaded', init);

// Обработка клика вне выпадающего меню
document.addEventListener('click', function(event) {
  const dropdowns = document.querySelectorAll('.dropdown');
  dropdowns.forEach(dropdown => {
    const dropdownContent = dropdown.querySelector('.dropdown-content');
    if (!dropdown.contains(event.target)) {
      dropdownContent.style.display = 'none';
      dropdownContent.style.opacity = '0';
    }
  });
});
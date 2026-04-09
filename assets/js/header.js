// Получаем ссылку на заголовок
const header = document.getElementById('header');

// Функция для обработки события прокрутки
function handleScroll() {
  const scrollPosition = window.pageYOffset;

  if (scrollPosition > 0) {
    header.style.backgroundColor = 'rgba(0, 0, 0, 1)'; // Устанавливаем непрозрачный черный цвет фона
  } else {
    header.style.backgroundColor = 'transparent'; // Устанавливаем прозрачный фон
  }
}

// Добавляем обработчик события прокрутки
window.addEventListener('scroll', handleScroll);
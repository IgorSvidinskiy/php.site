function initSlider() {
    // Настройка слайдера
    const slider = document.querySelector('.slider');
    const slides = slider.querySelectorAll('.slide');
    let currentSlide = 0;
    let slideInterval = 5000; // Интервал переключения слайдов (5 секунд)
  
    // Пути к изображениям
    const imagePaths = [
      '../imgs/3qtFksNQJVY5bobyHJEgx6bhbg1LjHng.jpeg',
      '../imgs/A11178962_13-978103216.jpeg',
      '../imgs/logo/1000012685(1)-transformed-u_vlc6LNW-transformed.png',
      // Добавьте пути к остальным изображениям
    ];
  
    // Функция для отображения текущего слайда
    function showSlide(index) {
        slides.forEach((slide, i) => {
          const img = slide.querySelector('img');
          img.src = imagePaths[i];
          slide.style.display = 'none';
        });
        slides[index].style.display = 'block';
      }      
  
    // Функция для переключения на следующий слайд
    function nextSlide() {
      currentSlide++;
      if (currentSlide >= slides.length) {
        currentSlide = 0; // Возвращаемся к первому слайду
      }
      showSlide(currentSlide);
    }
  
    // Функция для автоматического переключения слайдов
    let slideTimer = setInterval(nextSlide, slideInterval);
  
    // Отзывчивые кнопки для переключения слайдов
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
  
    prevButton.addEventListener('click', () => {
      clearInterval(slideTimer); // Остановка автоматического переключения
      currentSlide--;
      if (currentSlide < 0) {
        currentSlide = slides.length - 1; // Переход к последнему слайду
      }
      showSlide(currentSlide);
    });
  
    nextButton.addEventListener('click', () => {
      clearInterval(slideTimer); // Остановка автоматического переключения
      nextSlide();
    });
  
    // Повтор слайдов с первого после последнего
    slider.addEventListener('transitionend', () => {
      slideTimer = setInterval(nextSlide, slideInterval);
    });
  }
  
  window.onload = function() {
    initSlider();
  };  
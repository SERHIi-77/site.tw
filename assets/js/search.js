
// Получаем элементы формы поиска и кнопки
const searchForm = document.getElementById('search-input');
const searchInput = searchForm.querySelector('input[name="query"]');
const searchButton = searchForm.querySelector('button[type="submit"]');

// Обработчик события отправки формы
searchForm.addEventListener('submit', (event) => {
  // Отменяем стандартное поведение формы
  event.preventDefault();
  // Получаем значение поискового запроса
  const query = searchInput.value.trim();
  // Проверяем, что запрос не пустой
  if (query) {
    // Формируем адрес страницы каталога с поиском
    const url = '/?p=catalog&q=' + encodeURIComponent(query);
    // Перенаправляем пользователя на страницу каталога с поиском
    window.location.href = url;
  }
});

// Получаем форму поиска и обработчик событий на отправку формы
const searchForm = document.querySelector('#search-input');
searchForm.addEventListener('submit', handleSearch);

// Обработчик событий на отправку формы
function handleSearch(event) {
  event.preventDefault(); // Отменяем стандартное поведение формы

  const searchQuery = event.target.query.value; // Получаем значение поискового запроса
  const productCards = document.querySelectorAll('.product-card'); // Получаем все карточки товара

  // Перебираем все карточки товара и проверяем, соответствует ли каждая из них поисковому запросу
  productCards.forEach(productCard => {
    const title = productCard.querySelector('.title-pet').textContent.toLowerCase();
    const breed = productCard.querySelector('.breed-note').textContent.toLowerCase();
    const history = productCard.querySelector('.histopy-of-pet').textContent.toLowerCase();
    const type = productCard.querySelector('.one-str-type-card').textContent.toLowerCase();

    if (title.includes(searchQuery) || breed.includes(searchQuery) || history.includes(searchQuery) || type.includes(searchQuery)) {
      productCard.style.display = 'block'; // Если карточка соответствует поисковому запросу, показываем ее
    } else {
      productCard.style.display = 'none'; // Если карточка не соответствует поисковому запросу, скрываем ее
    }
  });
}
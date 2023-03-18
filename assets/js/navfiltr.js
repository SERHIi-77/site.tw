// Обработчик события отправки формы
$('form').on('submit', function(event) {
    event.preventDefault();
  
    // Собираем выбранные значения фильтров
    var selectedTypePet = $('input[name="type-pet"]:checked').map(function() { return this.value; }).get();
    var selectedSexTypePet = $('input[name="sex-type-pet"]:checked').map(function() { return this.value; }).get();
    var selectedAgeOfPet = $('input[name="age-of-pet"]:checked').map(function() { return this.value; }).get();
    var minPrice = $('input[name="price-min"]').val();
    var maxPrice = $('input[name="price-max"]').val();
  
    // Показываем только те карточки товаров, которые соответствуют выбранным фильтрам
    $('.product-card').each(function() {
      var $card = $(this);
  
      if (
        (selectedTypePet.length === 0 || selectedTypePet.includes($card.find('.type-pet').text())) &&
        (selectedSexTypePet.length === 0 || selectedSexTypePet.includes($card.find('.sex-type-pet').text())) &&
        (selectedAgeOfPet.length === 0 || selectedAgeOfPet.includes($card.find('.age-of-pet').text())) &&
        ($card.find('.price-pet').text() >= minPrice && $card.find('.price-pet').text() <= maxPrice)
      ) {
        $card.show();
      } else {
        $card.hide();
      }
    });
  });

  
  
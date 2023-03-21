


$(document).ready(function() {
    // Функция, которая фильтрует карточки в соответствии с выбранными параметрами
    function filterCard() {
      // Собираем значения чекбоксов
      var type = $('.filter-type-pet input:checked').map(function() { return this.value; }).get();
      var sex = $('.filter-sex-type-pet input:checked').map(function() { return this.value; }).get();
      var age = $('.filter-age-of-pet input:checked').map(function() { return this.value; }).get();
      // Собираем значения диапазона цен
      var minPrice = parseInt($('input[name="price-min"]').val());
      var maxPrice = parseInt($('input[name="price-max"]').val());
  
      // Фильтруем карточки
      $('.product-card').each(function() {
        var $card = $(this);
        // Проверяем тип животного
        if (type.length && type.indexOf($card.find('.type-pet').text()) === -1) {
          $card.hide();
          return;
        }
        // Проверяем пол животного
        if (sex.length && sex.indexOf($card.find('.sex-type-pet').text()) === -1) {
          $card.hide();
          return;
        }
        // Проверяем возраст животного
        if (age.length && !age.includes($card.find('.age-of-pet').text())) {
            $card.hide();
            return;
          }
        // Проверяем цену животного
        var price = parseInt($card.find('.price-pet').text());
        if (price < minPrice || price > maxPrice) {
          $card.hide();
          return;
        }
        // Если все параметры совпадают, то показываем карточку
        $card.show();
      });
    }
  
    // При изменении любого параметра фильтра запускаем функцию filterCards
    $('.filters input, .filters select').change(filterCard);
  
    // Обработчик клика на кнопке "Сбросить фильтры"
    $('#reset-btn').click(function(event) {
      event.preventDefault();
      // Сбрасываем все значения фильтров и перезапускаем функцию filterCards
      $('.filters input').prop('checked', false);
      $('input[name="price-min"]').val(0);
      $('input[name="price-max"]').val(7000);
      filterCard();
    });
  
    // Запускаем функцию filterCards, чтобы отфильтровать карточки при загрузке страницы
    filterCard();
  });
  



  $(document).ready(function() {
      $(".i-want-by-buy").on("click", function() {
          var petId = $(this).data("pet");
          $.ajax({
              url: "../actions/buy.php",
              method: "POST",
              data: { petId: petId },
              success: function(response) {
                  if (response == "not_logged_in") {
                      window.location.href = "../partials/pages/login.php";
                  } else if (response == "success") {
                      // Handle success
                  } else {
                      // Handle other errors
                  }
              }
          });
      });
  });
 
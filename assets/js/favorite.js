$('.btnHeart').parent().on('click', function() {
    const parent = $(this);
    // Получаем идентификатор животного
    const petId = $(this).data('pet-id');
    // Отправляем AJAX запрос на сервер для проверки наличия значения в БД
    $.ajax({
      url: '/actions/favorite.php',
      method: 'POST',
      data: { pet_id: petId },
      success: function(response) {
        switch (response.status) {
            case 'unliked':
                parent.removeClass('-liked');
                break;
            case 'liked':
                parent.addClass('-liked');
                break;
            default:
                parent.removeClass('-liked');
                break;

            };
        }
    });
});
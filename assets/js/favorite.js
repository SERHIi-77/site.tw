$('.btnHeart').parent().on('click', function() {
    // Получаем идентификатор животного
    const petId = $(this).data('pet-id');
    // Отправляем AJAX запрос на сервер для проверки наличия значения в БД
    alert(petId);
    $.ajax({
      url: '/actions/favorite.php',
      method: 'POST',
      data: { pet_id: petId },
      success: function(response) {
        switch (response.status) {
            case 'unliked':
                $(this).parent().removeClass('-liked');
                break;
            case 'liked':
                $(this).parent().addClass('-liked');
                break;
            default:
                $(this).parent().removeClass('-liked');
                break;

            };
        }
    });
});
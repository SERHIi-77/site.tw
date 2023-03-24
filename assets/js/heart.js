$('#heartBtn').click(function() {
    const petId = $(this).attr('data-pet-id');
    
    // Отправляем AJAX запрос на сервер для добавления/удаления записи в БД
    $.ajax({
    method: 'POST',
    url: '/actions/favorit.php',
    data: { heart: 1, pet_id: petId }
    });
});
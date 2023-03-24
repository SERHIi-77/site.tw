<?php
if(isAuth()) {
	$userId = getUserID();

    // Проверяем, была ли нажата кнопка "Like"
    if (isset($_POST['heart'])) {
    // Получаем ID животного из атрибута data-pet-id кнопки
    $petId = $_POST['pet_id'];

    // Проверяем, есть ли запись об этом животном в таблице избранных
    $query = "SELECT * FROM fav WHERE pet = $petId AND user = $userId";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Если запись уже есть, то удаляем ее
        $query = "DELETE FROM fav WHERE pet = $petId AND user = $userId";
        mysqli_query($conn, $query);
    } else {
        // Если записи нет, то добавляем ее
        $query = "INSERT INTO fav (pet, user) VALUES ($petId, $userId)";
        mysqli_query($conn, $query);
    }
    }
}

?>

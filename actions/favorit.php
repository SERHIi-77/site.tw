<?php
// Подключаемся к БД
$conn = mysqli_connect($servername, $username, $password, $database);

// Проверяем, была ли нажата кнопка "Like"
if (isset($_POST['like'])) {
  // Получаем ID животного из атрибута data-pet-id кнопки
  $petId = $_POST['pet_id'];

  // Проверяем, есть ли запись об этом животном в таблице избранных
  $query = "SELECT * FROM favorites WHERE pet_id = $petId AND user_id = $userId";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) > 0) {
    // Если запись уже есть, то удаляем ее
    $query = "DELETE FROM favorites WHERE pet_id = $petId AND user_id = $userId";
    mysqli_query($conn, $query);
  } else {
    // Если записи нет, то добавляем ее
    $query = "INSERT INTO favorites (pet_id, user_id) VALUES ($petId, $userId)";
    mysqli_query($conn, $query);
  }
}
?>

<?php
// if(isAuth()) {
// 	$userId = getUserID();

//     // Проверяем, была ли нажата кнопка "Like"
//     if (isset($_POST['heart'])) {
//     // Получаем ID животного из атрибута data-pet-id кнопки
//     $petId = $_POST['pet_id'];
//         echo '<scripts> alert(); </scripts>';
//     // Проверяем, есть ли запись об этом животном в таблице избранных
//     $query = "SELECT * FROM fav WHERE pet = $petId AND user = $userId";
//     $result = mysqli_query($conn, $query);

//     if (mysqli_num_rows($result) > 0) {
//         // Если запись уже есть, то удаляем ее
//         $query = "DELETE FROM fav WHERE pet = $petId AND user = $userId";
//         mysqli_query($conn, $query);
//     } else {
//         // Если записи нет, то добавляем ее
//         $query = "INSERT INTO fav (pet, user) VALUES ($petId, $userId)";
//         mysqli_query($conn, $query);
//     }
//     }
// }
?>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/partials/header.php');

if(isAuth()) {
	$userId = getUserID();

    // Обработка запроса на добавление/удаление записи в БД
    if (isset($_POST['pet_id'])) {
        $petId = $_POST['pet_id'];
        
        // Проверяем наличие записи в БД
        $query = "SELECT * FROM fav WHERE pet = $petId AND user = $userId";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0) {
            // Если запись уже есть в БД, удаляем ее
            $deleteQuery = "DELETE FROM fav WHERE pet = $petId AND user = $userId";
            mysqli_query($conn, $deleteQuery);

            // Отправляем ответ клиенту
            echo json_encode(array('status' => 'unliked'));
        } else {
            // Если записи нет в БД, добавляем ее
            $insertQuery = "INSERT INTO fav (pet, user) VALUES ($petId, $userId)";
            mysqli_query($conn, $insertQuery);

            // Отправляем ответ клиенту
            echo json_encode(array('status' => 'liked'));
        }
    }
}

?>

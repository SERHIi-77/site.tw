<?php

$photoName = '';
// проверка наличия прикрепленнного файла
if(!empty($_FILES) && $_FILES['photo']['error'] != 4) {
    // определяем путь для сохранения картинок
    $uploaddir = $_SERVER['DOCUMENT_ROOT'] .'/uploads/avatars/';
    // определяем расширение файла картинки
    $ext = pathinfo($_FILES['photo']['name']);
    // конструируем имя файла случайный набор символов + текущее время (сек) . расширение
    $photoName = generateRandomString(8) . time() . "." . $ext['extension'];
    // путь + имя файла
    $uploadfile = $uploaddir . $photoName;

// проверка успешной загрузки файла картинки
    if (!move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
        echo "Возможная атака с помощью файловой загрузки!\n";
        die();
    }
}
if (isset($_POST['submit'])) {

    $sql = "INSERT INTO users (avatar) VALUES ('" . $photoName . "');";
    //INSERT INTO `users`(`id`, `username`, `email`, `password`, `role`, `phone`, `region`, `area`, `locality`, `avatar`, `tg`, `fb`, `inst`, `about`, `created`) VALUES ('','');
	if (mysqli_query($conn, $sql)) {

		return;

	} else {
		echo "Error:" . $sql . "<br>" . mysqli_error($conn);
	}

}
?>
<form action="edit=profile-photo.php" method="POST">
    <div class="row mb-3">
        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Зображення профілю</label>
        <div class="col-md-8 col-lg-9">
        <img src="/uploads/avatars/<?php echo $user['avatar'] ?>" alt="Profile">
        <div class="pt-2">
        <i class="ti-image btn-icon-prepend"></i>   
            <input id="photoProfile" type="file" name="photo" class="file-upload-default-sm" accept=".jpg, .png" ></input>    
            <button type="submit" name="submit" class="btn btn-primary btn-sm"><i class="bi bi-upload"></i></button>
            
            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
        </div>
        </div>
    </div>
</form>
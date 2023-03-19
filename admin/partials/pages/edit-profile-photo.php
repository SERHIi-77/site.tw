<?php
$userID = getUserID();
$photoName = 'noimg.jpg';
// проверка наличия прикрепленнного файла
if(!empty($_FILES) && $_FILES['avatar']['error'] != 4) {
    var_dump($_FILES);
    die();
    // определяем путь для сохранения картинок
    $uploaddir = $_SERVER['DOCUMENT_ROOT'] .'/uploads/avatars/';
    // определяем расширение файла картинки
    $ext = pathinfo($_FILES['avatar']['name']);
    // конструируем имя файла случайный набор символов + текущее время (сек) . расширение
    $photoName = generateRandomString() . time() . "." . $ext['extension'];
    // путь + имя файла
    $uploadfile = $uploaddir . $photoName;

// проверка успешной загрузки файла картинки
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], $uploadfile)) {
        echo "Возможная атака с помощью файловой загрузки!\n";
        die();
    }
}
    switch(true) {
        case isset($_POST['photo_submit']):
            echo($photoName);
            $sql = "UPDATE users SET avatar = '" . $photoName . "' WHERE id = $userID";
            mysqli_query($conn, $sql); 
            break;
        case isset($_POST['delete_submit']):
            echo("Ok");
            $sql = "UPDATE users SET avatar = 'noimg.jpg' WHERE id = $userID";
            mysqli_query($conn, $sql);
            break;
        default:
          // Код для выполнения в случае, если не был получен ни один из указанных запросов
          
          break;
      }
?>

<form action="<?php $_SERVER['DOCUMENT_ROOT'].'/admin/partials/pages/edit-profile-photo.php' ?>" method="POST">
    <div class="row mb-3">
        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Зображення профілю</label>
        <div class="col-md-8 col-lg-9">
        <img src="/uploads/avatars/<?php echo $user['avatar']; ?>" alt="Profile">
        <div class="pt-2">
        <i class="ti-image btn-icon-prepend"></i>   
            <input id="avatarProfile" type="file" name="avatar" class="file-upload-default-sm"></input>    
            <button type="submit" name="photo_submit" class="btn btn-primary btn-sm"><i class="bi bi-upload"></i></button>
            <button type="submit" name="delete_submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
            
        </div>
        </div>
    </div>
</form>
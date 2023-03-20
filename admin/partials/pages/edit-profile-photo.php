<?php
$userID = getUserID();
$photoName = 'noimg.jpg';

// проверка наличия прикрепленнного файла
if(!empty($_FILES) && $_FILES['avatar']['error'] != 4) {
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
            $sql = "UPDATE users SET avatar = '" . $photoName . "' WHERE id = $userID";
            mysqli_query($conn, $sql); 
            $txtModal ='Аватар додано';
            echo("<script> $('#smallModalOnAvatar').modal('show'); </script>");
            echo('<script> window.location.href = "/admin/index.php?p=edit-profile"; </script>');
            break;
        case isset($_POST['delete_submit']):
            $filePath = $_SERVER['DOCUMENT_ROOT'] .'/uploads/avatars/'.$user['avatar'];
            if (file_exists($filePath) && $user['avatar']!='noimg.jpg') {
                if (unlink($filePath)) {
                    $txtModal ='Аватар видалено';
                    echo("<script> $('#smallModalOnAvatar').modal('show'); </script>");
                    } else {
                    $txtModal ='Помилка видалення аватару';
                    echo("<script> $('#smallModalOnAvatar').modal('show'); </script>");
                }
            } else {
                    $txtModal ='Аватар відсутній';
                    echo("<script> $('#smallModalOnAvatar').modal('show'); </script>");
            }
            $sql = "UPDATE users SET avatar = 'noimg.jpg' WHERE id = $userID";
            mysqli_query($conn, $sql);
            echo('<script> window.location.href = "/admin/index.php?p=edit-profile"; </script>');
            break;
        default:
          // Код для выполнения в случае, если не был получен ни один из указанных запросов
          
          break;
      }
?>

<form action="<?php $_SERVER['DOCUMENT_ROOT'].'/admin/partials/pages/edit-profile-photo.php' ?>" method="POST" enctype="multipart/form-data">
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

<div class="modal fade" id="smallModalOnAvatar" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">УВАГА !!!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <?php echo $txtAvatar; ?>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div><!-- End Small Modal-->
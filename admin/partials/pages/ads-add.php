<?php

$photoName = '';
// проверка наличия прикрепленнного файла
if(!empty($_FILES) && $_FILES['photo']['error'] != 4) {
    // определяем путь для сохранения картинок
    $uploaddir = $_SERVER['DOCUMENT_ROOT'] .'/uploads/';
    // определяем расширение файла картинки
    $ext = pathinfo($_FILES['photo']['name']);
    // конструируем имя файла случайный набор символов + текущее время (сек) . расширение
    $photoName = generateRandomString() . time() . "." . $ext['extension'];
    // путь + имя файла
    $uploadfile = $uploaddir . $photoName;

// проверка успешной загрузки файла картинки
    if (!move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile)) {
        echo "Возможная атака с помощью файловой загрузки!\n";
        die();
    }
}
if (isset($_POST['submit'])) {
	//var_dump($_POST);
    $adTitle = mysqli_real_escape_string($conn, $_POST["title"]);
    $adAd = mysqli_real_escape_string($conn, $_POST["ad"]);
    $adBreed = mysqli_real_escape_string($conn, $_POST["breed"]);
    $adPrice = mysqli_real_escape_string($conn, $_POST["price"]);
    $adNote = mysqli_real_escape_string($conn, $_POST["note"]);

	$sql = "INSERT INTO pets (title, ad, type, sex, age, breed, owner, price, photo, note) VALUES ('$adTitle', '$adAd', '" . $_POST["type"] . "', '" . $_POST["sex"] . "', '" . $_POST["age"] . "', '$adBreed', '" . $_POST["owner"] . "', '$adPrice', '" . $photoName . "', '$adNote' )";
	// INSERT INTO `pets` (`id`, `title`, `ad`, `type`, `sex`, `age`, `breed`, `owner`, `price`, `photo`, `note`, `created`) VALUES (NULL, '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', current_timestamp());

	if (mysqli_query($conn, $sql)) {

		echo('<script> window.location.href = "/admin/index.php?p=ads"; </script>');;

	} else {
		echo "Error:" . $sql . "<br>" . mysqli_error($conn);
	}

}

?>

<div class="my-3 card">
    <h3 class="card-title text-center"  style="font-size: 1.5rem">Додати оголошення</h3>
    <div class="card-body">
        <!-- <div id="ajaxStatus"></div> -->
        <form class="form-group" action="#" method="POST" id="formAd" form enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" name="owner" value="<?php echo getUserID(); ?>">
                <div class="form-group-row">
                    <label for="ad_title">Заголовок оголошення</label>
                    <textarea class="form-control rounded" name="title" id="ad_title" rows="1" required="true"></textarea>
                </div>
                <div class="form-group-row">
                    <label for="ad_text">Ваше оголошення</label>
                    <textarea class="form-control rounded" name="ad" id="ad_text" rows="5"required="true"></textarea>
                </div>
                <div class="form-group-row">
                    <label for="ad_type">Вид</label>
                    <select class="form-select rounded" name="type" id="ad_type">
                        <option selected></option>
                        <option value="dog">собаки</option>
                        <option value="cat">коти</option>
                    </select>
                </div>
                <div class="form-group-row">
                    <label for="ad_sex">Стать</label>
                    <select class="form-select rounded" name="sex" id="ad_sex">
                        <option selected></option>
                        <option value="male">чоловіча стать</option>
                        <option value="female">жіноча стать</option>
                    </select>
                    <div class="form-group-row">
                        <label for="ad_age">Вік</label>
                        <select class="form-select rounded" name="age" id="ad_age">
                            <option selected></option>
                            <option value="less than 3 months">менше 3 місяців</option>
                            <option value="3-6 months">3-6 місяців</option>
                            <option value="6-9 months">6-9 місяців</option>
                            <option value="9-12 months">9-12 місяців</option>
                            <option value="1-2 years">1-2 років</option>
                            <option value="3 years">3 років</option>
                            <option value="4 years">4 років</option>
                            <option value="over 5 years">більш ніж 5 років</option>
                        </select>
                    </div>
                    <div class="form-group-row">
                        <label for="ad_breed">Порода</label>
                        <input class="form-control rounded" name="breed" id="ad_breed"></input>
                    </div>
                    <div class="form-group-row">
                        <label for="ad_price">Ціна</label>
                        <input class="form-control rounded" name="price" id="ad_price"></input>
                    </div>
                    <div class="mb-3 form-group-row">
                        <label for="ad_note">Ваші нотатки</label>
                        <textarea class="form-control rounded" name="note" id="ad_note" rows="3"></textarea>
                    </div>
                    <div class="form-group-row">
                        <div class="mb-3 row" >
                            <div >
                                <input class="form-control" type="file" name="photo" id="formFile">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="text-center" >
                                <button type="submit" name="submit" class="btn btn-primary">Додати оголошення</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>


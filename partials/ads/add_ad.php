<?php
require($_SERVER['DOCUMENT_ROOT'].'/partials/header.php');

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

		header("Location: /?p=catalog");

	} else {
		echo "Error:" . $sql . "<br>" . mysqli_error($conn);
	}

}

?>

<div class="container">
    <div class="my-5 card">
        <h3 class="my-3 card-title text-center">Додати оголошення</h3>
        <div class="card-body">
            <!-- <div id="ajaxStatus"></div> -->
            <form class="form-group" action="#" method="POST" id="formAd" form enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="owner" value="<?php echo getUserID(); ?>">
                    <div class="form-group-row">
                        <label for="ad_title">Title Ad</label>
                        <textarea class="form-control rounded" name="title" id="ad_title" rows="1"></textarea>
                    </div>
                    <div class="form-group-row">
                        <label for="ad_text">Your Ad</label>
                        <textarea class="form-control rounded" name="ad" id="ad_text" rows="5"></textarea>
                    </div>
                    <div class="form-group-row">
                        <label for="ad_type">type</label>
                        <select class="form-select rounded" name="type" id="ad_type">
                            <option selected></option>
                            <option value="dog">dog</option>
                            <option value="cat">cat</option>
                        </select>
                    </div>
                    <div class="form-group-row">
                        <label for="ad_sex">sex</label>
                        <select class="form-select rounded" name="sex" id="ad_sex">
                            <option selected></option>
                            <option value="male">male</option>
                            <option value="female">female</option>
                        </select>
                        <div class="form-group-row">
                            <label for="ad_age">age</label>
                            <select class="form-select rounded" name="age" id="ad_age">
                                <option selected></option>
                                <option value="less than 3 months">less than 3 months</option>
                                <option value="3-6 months">3-6 months</option>
                                <option value="6-9 months">6-9 months</option>
                                <option value="9-12 months">9-12 months</option>
                                <option value="1-2 years">1-2 years</option>
                                <option value="3 years">3 years</option>
                                <option value="4 years">4 years</option>
                                <option value="over 5 years">over 5 years</option>
                            </select>
                        </div>
                        <div class="form-group-row">
                            <label for="ad_breed">breed</label>
                            <input class="form-control rounded" name="breed" id="ad_breed"></input>
                        </div>
                        <div class="form-group-row">
                            <label for="ad_price">price</label>
                            <input class="form-control rounded" name="price" id="ad_price"></input>
                        </div>
                        <div class="form-group-row">
                            <label for="ad_note">Your Notes</label>
                            <textarea class="form-control rounded" name="note" id="ad_note" rows="3"></textarea>
                        </div>
                        <div class="form-group-row">
                            <i class="ti-image btn-icon-prepend"></i>
                            <input id="twitImage" type="file" name="photo" class="file-upload-default"></input>
                            <button type="submit" name="submit" class="btn btn-primary mr-2">SEND</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
?>


<?php
$adID = $_SESSION['ad_id'];
$ad = getCurrentAd ($adID);

if (isset($_POST['edit-submit'])) {
	// var_dump($_POST);
  // die();
    $uUsername = mysqli_real_escape_string($conn, $_POST["username"]);
    $uEmail = mysqli_real_escape_string($conn, $_POST["email"]);
    $uPhone = mysqli_real_escape_string($conn, $_POST["phone"]);
    $uRegion = mysqli_real_escape_string($conn, $_POST["region"]);
    $uArea = mysqli_real_escape_string($conn, $_POST["area"]);
    $uLocality = mysqli_real_escape_string($conn, $_POST["locality"]);
    $uAbout = mysqli_real_escape_string($conn, $_POST["about"]);
	
	$sql = "UPDATE users SET username = '" . $uUsername . "', email = '" . $uEmail . "', phone = '" . $uPhone . "', region = '" . $uRegion . "', area = '" . $uArea . "', locality = '" . $uLocality . "', about = '" . $uAbout . "' WHERE id = $userID";
  //UPDATE `users` SET `phone` = '1', `region` = '1', `area` = '1', `locality` = '1', `avatar` = '2', `tg` = '1', `fb` = '1', `inst` = '1', `about` = '1' WHERE `users`.`id` = 4;

	if (mysqli_query($conn, $sql)) {
    //header("Location: " . $_SERVER['DOCUMENT_ROOT'].'/admin/index.php?p=view-profile');
    //header('Location: ' . $_SERVER['PHP_SELF']);
    echo('<script> window.location.href = "/admin/index.php?p=view-profile"; </script>');
	} else {
		echo "Error:" . $sql . "<br>" . mysqli_error($conn);
	}
}

?>

<div class="my-3 card">
    <h3 class="card-title text-center"  style="font-size: 1.5rem">Редагування оголошення</h3>
    <div class="card-body">
        <!-- <div id="ajaxStatus"></div> -->
        <form class="form-group" action="<?php $_SERVER['DOCUMENT_ROOT'].'/admin/partials/pages/ads-edit.php' ?>" method="POST" id="formAd" form enctype="multipart/form-data">
            <div class="form-group">
                <input type="hidden" name="owner" value="<?php echo getUserID(); ?>">
                <div class="form-group-row">
                    <label for="ad_title">Заголовок оголошення</label>
                    <textarea class="form-control rounded" name="title" id="ad_title" rows="1" required="true"><?php echo htmlspecialchars($ad['title']); ?></textarea>
                </div>
                <div class="form-group-row">
                    <label for="ad_text">Ваше оголошення</label>
                    <textarea class="form-control rounded" name="ad" id="ad_text" rows="5"required="true"><?php echo htmlspecialchars($ad['ad']); ?></textarea>
                </div>
                <div class="form-group-row">
                    <label for="ad_type">Вид</label>
                    <select class="form-select rounded" name="type" id="ad_type">
                        <option selected><?php echo $ad['type']; ?></option>
                        <option value="dog">собаки</option>
                        <option value="cat">коти</option>
                    </select>
                </div>
                <div class="form-group-row">
                    <label for="ad_sex">Стать</label>
                    <select class="form-select rounded" name="sex" id="ad_sex">
                        <option selected><?php echo $ad['sex']; ?></option>
                        <option value="male">чоловіча стать</option>
                        <option value="female">жіноча стать</option>
                    </select>
                    <div class="form-group-row">
                        <label for="ad_age">Вік</label>
                        <select class="form-select rounded" name="age" id="ad_age">
                            <option selected><?php echo $ad['age']; ?></option>
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
                        <input class="form-control rounded" name="breed" id="ad_breed" value="<?php echo htmlspecialchars($ad['breed']); ?>"></input>
                    </div>
                    <div class="form-group-row">
                        <label for="ad_price">Ціна</label>
                        <input class="form-control rounded" name="price" id="ad_price" value="<?php echo $ad['price'];  ?>"></input>
                    </div>
                    <div class="mb-3 form-group-row">
                        <label for="ad_note">Ваші нотатки</label>
                        <textarea class="form-control rounded" name="note" id="ad_note" rows="3"><?php echo htmlspecialchars($ad['note']); ?></textarea>
                    </div>
                    <div class="form-group-row">
                        <div class="mb-3 row" >
                            <div >
                                <input class="form-control" type="file" name="photo" id="formFile">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="text-center" >
                                <button type="submit" name="submit" class="btn btn-primary">Зберегти</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
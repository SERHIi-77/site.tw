<?php
if (isset($_POST['submit'])) {
	//var_dump($_POST);
  $hasPas = password_hash($_POST['password'], PASSWORD_DEFAULT);
  $sql = "INSERT INTO `users` (`password`) VALUES ('" . $hasPas . "');";
  //INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`, `phone`) VALUES (NULL, '', '', '', '', '');
  if (mysqli_query($conn, $sql)) {
    //echo "Stored." . "<br>";
    mysqli_close($conn);
    header("Location: /");
  } else {
    echo "Error:" . $sql . "<br>" . mysqli_error($conn);
  }
}

?>

<form>

    <div class="row mb-3">
        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
        <div class="col-md-8 col-lg-9">
            <input name="password" type="password" class="form-control" id="currentPassword">
        </div>
    </div>

    <div class="row mb-3">
        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
        <div class="col-md-8 col-lg-9">
            <input name="newpassword" type="password" class="form-control" id="newPassword">
        </div>
    </div>

    <div class="row mb-3">
        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
        <div class="col-md-8 col-lg-9">
            <input name="renewpassword" type="password" class="form-control" id="renewPassword">
        </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-primary">Change Password</button>
    </div>
</form>

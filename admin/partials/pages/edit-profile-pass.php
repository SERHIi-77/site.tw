<?php
$user = getCurrentUser();
$userID = getUserID();

if (isset($_POST['submit'])) {

  $hasPas = password_hash($_POST['newpassword'], PASSWORD_DEFAULT);
    echo($_POST['newpassword']);
    echo($hasPas);

  $sql = "UPDATE users SET password = '" . $hasPas . "' WHERE id = $userID;";

  if (mysqli_query($conn, $sql)) {

    echo('<script> window.location.href = "/admin/index.php?p=view-profile"; </script>');
  } else {
    echo "Error:" . $sql . "<br>" . mysqli_error($conn);
  }
}

?>
<form id="changePassword" action="<?php $_SERVER['DOCUMENT_ROOT'].'/admin/partials/pages/edit-profile-pass.php' ?>" method="POST">

<div class="row mb-3">
    <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
    <div class="col-md-8 col-lg-9">
        <input name="password" type="password" class="form-control" id="currentPassword" value="<?php echo ($user['password']); ?>">
    </div>
</div>

<div class="row mb-3" >
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
    <button id="btnChPass" type="submit" name="submit" class="btn btn-primary">Change Password</button>
</div>

</form>

<div class="modal fade" id="smallModalOnPass" tabindex="-1">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">УВАГА !!!</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        Паролі не співпадають
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
</div><!-- End Small Modal-->
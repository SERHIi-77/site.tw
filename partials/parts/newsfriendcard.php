<?php
$userID = getUserID();
$sql = "SELECT * FROM pets WHERE id IN (25, 26, 27, 28) ORDER BY created DESC";
$result = $conn->query($sql);

if($result = $conn->query($sql)):
    foreach($result as $pet):

        require($_SERVER['DOCUMENT_ROOT'].'/partials/parts/pet-card.php');

    endforeach;
endif;
?>
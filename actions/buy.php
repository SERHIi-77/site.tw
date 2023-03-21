<?php session_start();
 if (!isset($_SESSION['user_id'])) {
     if (isset($_COOKIE['user_id']))
 { $_SESSION['user_id'] = $_COOKIE['user_id']; 
} else { echo "not_logged_in";
    exit();} }

require_once "../configs/db.php";
$user_id = $_SESSION['user_id'];
$pet_id = $_POST['petId'];

$sql = "INSERT INTO orders (user, pet) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ii", $user_id, $pet_id);
if ($stmt->execute()) {
    echo "success";
} else {
    echo "error";
}
$stmt->close();
$conn->close();
?>
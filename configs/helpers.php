<?php

// check if user is authenticated
function isAuth () {
    $is_session = isset($_SESSION['user_id']) && $_SESSION['user_id'] != null; // true/false
    $is_cookie = isset($_COOKIE['user_id']) && $_COOKIE['user_id'] != null; //true/false
    // проверяем сесия или куки
    if ($is_session || $is_cookie){
        return true;
    } else {
        return false;
    }
}

// getting the current authorized user
function getCurrentUser () {
    global $conn;
    $is_session = isset($_SESSION['user_id']) && $_SESSION['user_id'] != null; // true/false
    $is_cookie = isset($_COOKIE['user_id']) && $_COOKIE['user_id'] != null; //true/false
    // проверяем сесия или куки
    if ($is_session || $is_cookie){
        // тернарный оператор если <true> ? то равно <value> : иначе <value>
        $userID = $is_session ? $_SESSION['user_id'] : $_COOKIE['user_id']; 
        $sql = "SELECT * FROM users WHERE id=" . $userID;
        $result = mysqli_query($conn, $sql);
        return $user = $result->fetch_assoc();
    } else {
        return null;
    }
}

function getUserID() {
    $is_session = isset($_SESSION['user_id']) && $_SESSION['user_id'] != null; // true/false
    $is_cookie = isset($_COOKIE['user_id']) && $_COOKIE['user_id'] != null; //true/false
    // проверяем сесия или куки
    if ($is_session || $is_cookie){
        return $is_session ? $_SESSION['user_id'] : $_COOKIE['user_id'];
    } else {
        return null;
    }
}

function getAllbyUser ($iD) {
    global $conn;
        $sql = "SELECT * FROM users WHERE id=" . $iD;
        $result = mysqli_query($conn, $sql);
        return $user = $result->fetch_assoc();
}

function getAllbyPet ($iD) {
    global $conn;
        $sql = "SELECT * FROM pets WHERE id=" . $iD;
        $result = mysqli_query($conn, $sql);
        return $user = $result->fetch_assoc();
}



function getCurrentAd ($adID) {
    global $conn;
        $sql = "SELECT * FROM pets WHERE id=" . $adID;
        $result = mysqli_query($conn, $sql);
        return $ad = $result->fetch_assoc();
}

function getAllAdsByUser($userID) {
    global $conn;
    $sql = "SELECT * FROM pets WHERE owner=" . $userID . " ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function getAllFavByUser($userID) {
    global $conn;
    $sql = "SELECT * FROM fav WHERE user=" . $userID . " ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function getAllOrdersByPets($petID) {
    global $conn;
    $sql = "SELECT * FROM orders WHERE pet=" . $petID . " ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);
    return $result;
}

// генерация рандомной строки для создания уникального имени файла
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>
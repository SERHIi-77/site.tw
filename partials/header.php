<?php
// connecting DB
require($_SERVER['DOCUMENT_ROOT'].'/configs/db.php');
// open session for user
session_start();

require($_SERVER['DOCUMENT_ROOT'].'/configs/helpers.php');

?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Site T1-TW3</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Place favicon.ico in the root directory -->

  <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

  <meta name="theme-color" content="#fafafa">
  
  <link rel="stylesheet" type="text/css" href="assets/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="assets/slick/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arimo:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>


<?php
      include("includes/config.php");
      include("includes/classes/Artist.php");
      include("includes/classes/Album.php");
      include("includes/classes/Song.php");

      if (isset($_SESSION['userLoggedIn'])) {
            $userLoggedIn = $_SESSION['userLoggedIn'];
            echo "<script>userLoggedIn = '$userLoggedIn';</script>";
      } else {
            header("Location: register.php");
      }
?>

<!DOCTYPE html>
<html>
      <head>
            <meta charset="utf-8">
            <title>Slothify</title>
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="icon" href="assets/images/icons/sloth-logo-filled.png" type="image/gif" sizes="16x16">

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
            <script src="assets/js/script.js"></script>
      </head>

      <body>
            <div class="" id="mainContainer">
                  <div class="" id="topContainer">
                        <?php include("includes/navBarContainer.php") ?>

                        <div class="" id="mainViewContainer">
                              <div class="" id="mainContent">

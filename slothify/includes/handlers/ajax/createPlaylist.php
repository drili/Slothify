<?php
      include("../../config.php");

      if (isset($_POST['name']) && isset($_POST['username'])) {
            $name = $_POST['name'];
            $username = $_POST['username'];
            $date = date("Y-m-d");

            $query = mysqli_query($con, "INSERT into playlists VALUES('', '$name', '$username', '$date')");
      } else {
            echo "ERROR: Name or username parameters not passed into file.";
      }
?>

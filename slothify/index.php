<?php
      include("includes/config.php");

      if (isset($_SESSION['userLoggedIn'])) {
            $userLoggedIn = $_SESSION['userLoggedIn'];
      } else {
            header("Location: register.php");
      }
?>

<!DOCTYPE html>
<html>
      <head>
            <meta charset="utf-8">
            <title>Slothify</title>
      </head>
      <body>
            <h1>Hello World!</h1>
            <p>Welcome back, <?php echo $userLoggedIn; ?></p>
      </body>
</html>

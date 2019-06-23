<?php
      if (isset($_POST['loginButton'])) {
            // Login
            $username = $_POST['loginUsername'];
            $password = $_POST['loginPassword'];

            $result = $account->login($username, $password);
            if ($result == true) {
                  $_SESSION['userLoggedIn'] = $username;
                  header("Location: index.php");
            } else if ($result == false) {
                  $ip = $_SERVER["REMOTE_ADDR"];
                  mysqli_query($con, "INSERT INTO `ip` (`address` ,`timestamp`)VALUES ('$ip',CURRENT_TIMESTAMP)");
                  $result = mysqli_query($con, "SELECT COUNT(*) FROM `ip` WHERE `address` LIKE '$ip' AND `timestamp` > (now() - interval 5 minute)");
                  $count = mysqli_fetch_array($result, MYSQLI_NUM);

                  if($count[0] == 3){
                        echo "Your are allowed 3 attempts in 5 minutes";
                  }
            }
      }
?>

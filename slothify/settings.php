<?php
      include("includes/includedFiles.php");
?>

<div class="entityInfo">
      <div class="centerSection">
            <div class="userInfo">
                  <h1><?php echo $userLoggedIn->getFirstAndLastName(); ?></h1>
            </div>
      </div>

      <div class="buttonItems">
            <button class="button" type="button" name="button" onclick="openPage('updateDetails.php')">User Details</button>
            <button class="button" type="button" name="button" onclick="logout()">Logout</button>
            <br>
            <br>
            <div class="deleteAcc">
                  <p>Delete account</p>
                  <button class="button" type="button" name="button" onclick="">Delete Account</button>
            </div>
      </div>
</div>

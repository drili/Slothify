<?php
      include('classes/Playlist.php');
      if (isset($_GET['term'])) {
            $term = urldecode($_GET['term']);
            // echo $term;
      } else {
            $term = "";
      }
?>

<div id="navBarContainer">
      <nav class="navBar">
            <div class="navBarLogo">
                  <span role="link" tabindex="0" onclick="openPage('index.php')" class="logo">
                        <img src="assets/images/icons/sloth-logo.png" alt="">
                        Slothify
                  </span>
            </div>
            <div class="group groupSearch">
                  <div class="navItem">
                        <!-- <span role="link" tabindex="0" onclick="openPage('search.php')" class="navItemLink">
                              Search
                              <img src="assets/images/icons/search.png" alt="Search" class="icon">
                              onfocus="this.selectionStart = this.selectionEnd = this.value.length;"
                        </span> -->
                        <input type="text" name="" value="<?php echo $term; ?>" class="searchInput" placeholder="Search">
                  </div>
            </div>

            <?php
                  $username = $userLoggedIn->getUsername();
                  $playlistQuery = mysqli_query($con, "SELECT * FROM playlists WHERE owner = '$username'");

                  if (mysqli_num_rows($playlistQuery) == 0) {
                        echo "<span class='noResults'>You don't have any playlists yet.</span>";
                  }
            ?>
            <div class="group groupItems">
                  <div class="navItem">
                        <span role="link" tabindex="0" onclick="openPage('settings.php')" class="navItemLink">
                              <div class="navItemItems">
                                    <img src="assets/images/icons/usericon.png" alt="">
                                    <?php echo $username; ?>
                              </div>
                        </span>
                  </div>
                  <hr>
                  <div class="navItem navItem2" role="link" tabindex="0" onclick="openPage('browse.php')">
                        <span class="navItemLink"></span>
                        <div class="navItemItems">
                              <img src="assets/images/icons/browseicon.png" alt="">
                              Browse
                        </div>
                  </div>
                  <div class="navItem" role="link" tabindex="0" onclick="openPage('yourMusic.php')">
                        <span class="navItemLink"></span>
                        <div class="navItemItems">
                              <img src="assets/images/icons/playlistlisticon.png" alt="">
                              Your Music
                        </div>
                  </div>
                  <?php
                        while ($row = mysqli_fetch_array($playlistQuery)) {
                              $playlist = new Playlist($con, $row);

                              echo "<div class='navItem navItemPlaylist'>
                                          <span role='link' tabindex='0' onclick='openPage(\"playlist.php?id=" . $playlist->getId() . "\")' class='navItemLink'>" . $playlist->getName() ."</span>
                                    </div>";
                        }
                  ?>
                  <div class="navItem navItemPlaylist">

                  </div>
            </div>
      </nav>
</div> <!--- #navBarContainer --->

<script type="text/javascript">
      // $(".searchInput").focus();

      $(function() {
            $(".searchInput").keyup(function() {
                  clearTimeout(timer);
                  var val = $(".searchInput").val();
                  if (val == "") {
                        openPage("browse.php");
                  } else {
                        timer = setTimeout(function() {
                              openPage("search.php?term=" + val);
                        }, 400);
                  }
            });
      });
</script>

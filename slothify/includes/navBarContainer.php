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
                        <span role="link" tabindex="0" onclick="openPage('search.php')" class="navItemLink">
                              Search
                              <img src="assets/images/icons/search.png" alt="Search" class="icon">
                        </span>
                  </div>
            </div>
            <div class="group">
                  <div class="navItem">
                        <span role="link" tabindex="0" onclick="openPage('browse.php')" class="navItemLink">Browse</span>
                  </div>
                  <div class="navItem">
                        <span role="link" tabindex="0" onclick="openPage('yourMusic.php')" class="navItemLink">Your Music</span>
                  </div>
                  <div class="navItem">
                        <span role="link" tabindex="0" onclick="openPage('profile.php')" class="navItemLink"><?php //echo $userLoggedIn; ?>Username</span>
                  </div>
            </div>
      </nav>
</div> <!--- #navBarContainer --->

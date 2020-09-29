<?php include $page == "index" ? "assets/functions/nav_links.php" : "../assets/functions/nav_links.php" ?>
           

<nav class="navbar navbar-expand-lg navbar-dark pt-5" style="font-size: 30px;font-family: 'Advent Pro', sans-serif;">
<a href="../index.php"><h1 class="pl-5" id="savvy">Savvy Designs</h1></a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto pr-5">
      <a class="nav-link text-light" href="<?php nav_links(); ?>pages/work.php">Work</a>
      <a class="nav-link text-light" href="<?php nav_links(); ?>pages/theteam.php">Team</a>
      <a class="nav-link text-light" href="<?php nav_links(); ?>index.php#contact_container">Contact</a>
    </div>
  </div>
</nav>




           <?php
                $nav_links = '';
                if($page == 'index'){
                   $nav_links = 'pages/'; 
                }else{
                    $nav_links = '';
                }
            ?>
           <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color: rgba(255, 255, 255, 0.15);">
            <div class="container"><a class="navbar-brand text-left" href="../index.php" style="font-size: 30px;font-family: 'Advent Pro', sans-serif;">
               
               <i class="material-icons" data-bs-hover-animate="jello" style="font-size: 58px;margin-bottom: 0px;padding: 0px;">home</i></a>
               <a href="../index.php"><h1 id="savvy">Savvy Designs</h1></a> <button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">    
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo $nav_links; ?>work.php" style="color: rgb(246,249,252);font-family: 'Advent Pro', sans-serif;">Work</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo $nav_links; ?>theteam.php" style="color: rgb(248,250,252);font-family: 'Advent Pro', sans-serif;">Team</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="../index.php#contactForm" style="color: rgb(248,250,252);font-family: 'Advent Pro', sans-serif;">Contact</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
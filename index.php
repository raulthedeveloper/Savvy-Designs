<?php $page ='index' ?>

<?php include "includes/head_links.php" ?>
<?php include "assets/functions/db.php"; ?>

<body>
    <section id="hero">

        <!---- Navigation in includes file ------->
        <?php include './includes/navbar.php'?>

        <div class="container m-auto pt-5">
            <div class="row pt-5">
                <div class="col">
                    <h1 class="display-1 text-light">Savvy Designs</h1>
                    <h4 class="text-light"><em>The team you've been waiting for</em></h4>
                    <button class="btn btn-lg text-justify border border-white d-flex text-light swing animated mt-4"
                        onclick="window.location.href ='pages/work.php';" type="button">Recent
                        Projects</button>
                </div>
            </div>
        </div>

    </section>
    <section id="services">
        <div class="container p-5">
            <div class="row">
                <div class="col-md-12 d-flex flex-grow-1">
                    <div>
                        <h1 class="text-center pt-5">We Specialize in Architectural Redesign</h1>
                        <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section id="work_grid">
        <div class="container-fluid">


            <?php


 if (!$result) { ?>
            <div class="row"> 
                <div class="col-md-6 col-sm-12 bg-light pb-md-4">
                    <div class="d-block m-auto text-box">
                        <h2>Connect to Database</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt suscipit dolore, rerum
                            minima ut consequuntur veritatis, eligendi optio, atque aliquam iusto. Harum itaque corporis
                            perferendis minus, neque corrupti sed laboriosam?
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt suscipit dolore, rerum
                            minima ut consequuntur veritatis, eligendi optio, atque aliquam iusto. Harum itaque corporis
                            perferendis minus, neque corrupti sed laboriosam?
                        </p>
                    </div>
                    <a href="pages/work-item.php?src=index&id=<?php echo $id ?>"><button
                            class="btn btn-dark btn-lg text-justify  d-flex text-light  mt-4 d-block m-auto">See
                            More</button></a>

                </div>
                <div class="col-md-6 col-sm-12">
                    <img class="img-fluid" src="Images/placeholder.png" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img class="img-fluid" src="Images/placeholder.png" alt="">
                </div>
                <div class="col-md-6 col-sm-12 bg-light pb-md-4">
                    <div class="d-block m-auto text-box">
                        <h2>Connect to Database</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt suscipit dolore, rerum
                            minima ut consequuntur veritatis, eligendi optio, atque aliquam iusto. Harum itaque corporis
                            perferendis minus, neque corrupti sed laboriosam?
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt suscipit dolore, rerum
                            minima ut consequuntur veritatis, eligendi optio, atque aliquam iusto. Harum itaque corporis
                            perferendis minus, neque corrupti sed laboriosam?
                        </p>
                    </div>
                    <a href="pages/work-item.php?src=index&id=<?php echo $id ?>"><button
                            class="btn btn-dark btn-lg text-justify  d-flex text-light  mt-4 d-block m-auto">See
                            More</button></a>

                </div>

            </div>
        </div>
        <?php 
  }
  
 
else if(mysqli_num_rows($result) > 0){
  
    
 
    $even_row = False;


    for ($i = 0; $i < 4; $i++) {
        global $result;

        $row = mysqli_fetch_assoc($result);

        $title = $row['work_title'];
        $img = $row['work_img_1'];
        $id= $row['work_ID'];
        $description = $row['work_description'];
        
         
        ?>

        <?php
        
        if($even_row){ ?>

        <div class="row even" data-aos="fade" data-aos-anchor-placement="center" data-aos-duration="1500">
            <div class="col-md-6 col-sm-12 bg-light  pb-sm-5 overlay">
                <div class="d-block m-auto text-box">
                    <h2><?php echo $title ?></h2>
                    <p><?php echo $description; ?>
                    </p>
                </div>

            </div>


            <div class="col-md-6 col-sm-12  overlay">
                <a href="pages/work-item.php?src=index&id=<?php echo $id ?>"><img class="img-fluid image"
                        src="<?php echo $img; ?>" alt="">
                    <div class="middle">
                        <div class="text">Click to Learn More</div>
                    </div>
                </a>
            </div>
        </div>


        <?php
     
      $even_row = !$even_row;
    
        }else if(!$even_row){?>

        <div class="row" data-aos="fade" data-aos-anchor-placement="center" data-aos-duration="1500">

            <div class="col-md-6 col-sm-12  overlay ">
                <a href="pages/work-item.php?src=index&id=<?php echo $id ?>"> <img class="img-fluid image"
                        src="<?php echo $img; ?>" alt="">
                    <div class="middle">
                        <div class="text">Click to Learn More</div>
                    </div>
                </a>
            </div>


            <div class="col-md-6 col-sm-12 bg-light  pb-sm-5">
                <div class="d-block m-auto text-box">
                    <h2>
                        <?php echo $title ?>
                    </h2>
                    <p><?php echo $description ?>
                    </p>
                </div>

            </div>

        </div>

        <?php 
        
        $even_row = !$even_row;
    } ?>


        <?php }

    }
 ?>

        </div>
    </section>

    <section id="testimonial">
        <div class="testimonials-clean">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center">Testimonials </h2>
                    <p class="text-center">Our customers love us! Read what they have to say below. Aliquam sed justo
                        ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
                </div>
                <div class="row people">
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box">
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus.
                                Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                        </div>
                        <div class="author"><img class="rounded-circle" src="assets/img/1.jpg">
                            <h5 class="name">Ben Johnson</h5>
                            <p class="title">CEO of Company Inc.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box">
                            <p class="description">Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et
                                interdum justo suscipit id.</p>
                        </div>
                        <div class="author"><img class="rounded-circle" src="assets/img/3.jpg">
                            <h5 class="name">Carl Kent</h5>
                            <p class="title">Founder of Style Co.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box">
                            <p class="description">Aliquam varius finibus est, et interdum justo suscipit. Vulputate
                                quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p>
                        </div>
                        <div class="author"><img class="rounded-circle" src="assets/img/2.jpg">
                            <h5 class="name">Emily Clark</h5>
                            <p class="title">Owner of Creative Ltd.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="contact" class="pb-4">
        <div class="container" id="contact_container">
            <div class="row">
                <div class="col">
                    <div>
                        <div class="container-fluid">
                            <h1 class="text-center">Contact</h1>
                            <hr>



                            <?php include 'includes/form.php' ?>

                            <hr class="d-flex d-md-none">

                        </div>

                        <?php include 'includes/map.php' ?>

                    </div>

                </div>

                <?php include 'includes/modal.php' ?>


            </div>
        </div>
        </div>

        <a id="back-to-top" href="index.php#hero">Back to top<i class="fa fa-arrow-circle-up pl-1"></i></a>
        </div>
    </section>
    <?php include 'includes/footer.php'?>
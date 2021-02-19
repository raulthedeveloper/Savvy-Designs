<?php $title = "Our Team";

 $page ='secondary'; 

 include '../assets/functions/db.php'; 

 include '../includes/header.php';  


$db->setTable("team");

$result = $db->makeQuery();

?>



<section class="home-team pt-5 pb-5">
    <h1 class="text-center secondary-headers">
        <?php echo $result ?  "Meet the Team" :  "connect to the Database to see your team"; ?></h1>
    <div class="container">
        <div class="row" data-aos="fade-in" data-aos-anchor-placement="center">


            <?php

if(!$result){
    for ($i = 0; $i < 8; $i++){ ?>
            <div class="col-md-6 col-lg-3">
                <div class="card card-style2 team-card">
                    <div class="card_img"><img class="img-fluid img-full loaded" height="400" data-original="img/"
                            data-was-processed="true" src="../images/generic_profile_pic.jpg" alt="Team one">

                        <div class="hover-overlay effect-scale"><a class="overlay_icon" target="_blank"
                                href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a><a
                                class="overlay_icon" target="_blank" href="https://twitter.com/"><i
                                    class="fa fa-twitter"></i></a><a class="overlay_icon" target="_blank"
                                href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>

                        </div>

                    </div>
                    <div class="card-block">
                        <a href="team_member.php?id=test">
                            <h4 class="card-title"> </h4>
                            <span><?php echo "Team Member" ?></span>
                        </a>
                    </div>
                </div>
            </div>
            <?php } 
    
}else{
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $image = $row["team_image"];
         
            ?>

            <div class="col-md-6 col-lg-3">
                <div class="card card-style2 team-card">


                    <div class="card_img"><img class="img-fluid img-full loaded" height="400" data-original="img/"
                            data-was-processed="true" src="<?php echo $image;?>" alt="Team one">

                       <div class="hover-overlay effect-scale">
                                <a class="overlay_icon" target="_blank" href="https://www.facebook.com/"><i
                                        class="fa fa-facebook"></i></a>

                                <a class="overlay_icon" target="_blank" href="https://twitter.com/"><i
                                        class="fa fa-twitter"></i>
                                </a>
                                <a class="overlay_icon" target="_blank" href="https://www.linkedin.com/"><i
                                        class="fa fa-linkedin"></i></a></div>
                    </div> 

                    <div class="card-block">
                        <h4 class="card-title"><a
                                href="team_member.php?id=<?php echo $row['team_ID']; ?>"><?php echo $row["team_name"]; ?></a>
                        </h4>
                        <span><?php echo $row["team_title"]; ?></span>
                    </div>
                </div>
                </a>
            </div>
            <?php }
      
    } 
  

}


 

 ?>

        </div>
</section>
<?php include '../includes/footer.php'?>
<?php $title = "Our Team";?>
<?php $page ='secondary' ?>

<?php include '../assets/functions/db.php' ?>

<?php include '../includes/header.php' ?>

<!-- echo "id: " . $row["team_ID"]. " - Name: " . $row["team_name"]. " " . $row["team_title"]. " " . $row["team_title"]. " " . $row["team_image"]. "<br>"; -->



<section class="home-team pt-5 pb-5">
    <h1 class="text-center secondary-headers">Meet the Team</h1>
    <div class="container">
        <div class="row">

            <?php
 

 if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $image = $row["team_image"];
       
        ?>

            <div class="col-md-6 col-lg-3">
                <div class="card card-style2 team-card">
                    <div class="card_img"><img class="img-fluid img-full loaded" height="400" data-original="img/"
                            data-was-processed="true" src="../assets/img/<?php echo $image;?>"
                            alt="Team one">
                        <div class="hover-overlay effect-scale"><a class="overlay_icon" target="_blank"
                                href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a><a
                                class="overlay_icon" target="_blank" href="https://twitter.com/"><i
                                    class="fa fa-twitter"></i></a><a class="overlay_icon" target="_blank"
                                href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a></div>
                    </div>
                    <div class="card-block">
                        <h4 class="card-title"><a href="team_member.php?id=<?php echo $row['team_ID'] ?>"><?php echo $row["team_name"]; ?></a> </h4>
                        <span><?php echo $row["team_title"]; ?></span>
                    </div>
                </div>
            </div>
            <?}
  } else {
    echo "data base error";
  }
 
 
 ?>

        </div>
</section>

<?php include '../includes/footer.php'?>

<?php include '../assets/functions/db.php' ?>



<?php 



if(null !== $_GET['id']){

    $ID = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM team WHERE team_ID='$ID' ";

    $result = mysqli_query($conn, $sql) or die();

    $row = mysqli_fetch_array($result);

}



$title =  $row['team_title'];
$name = $row['team_name'];
$description = $row['team_description'];
$image = $row['team_image'];

$page ='secondary';

?>


 <?php include '../includes/header.php' ?>
   
    <section id="team_member_section">
        <div class="container">
            <div class="row" id="team_row">
                <div class="col">
                    <img class="img-fluid img-full loaded" data-original="img/<?php echo $image; ?>" data-was-processed="true" src="../assets/img/<?php echo $image; ?>" alt="Team one">
                </div>
                <div class="col"><h1><?php echo $name; ?></h1>
                <p><?php echo $description ?></p>
                
                <?php include "../includes/have_any_question.php";?>
                </div>
            </div>
        </div>
    </section>
      
       <?php include '../includes/footer.php';
       
       mysqli_close($conn);
       ?>
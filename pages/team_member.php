
<?php include '../assets/functions/db.php' ?>



<?php 
$title =  "";
$name = "";
$description = "";
$image = "";

$page ='secondary';


if(null !== $_GET['id']){

    if($_GET['id'] === 'test'){
        $title =  'Team Member ';
        $name = 'John Doe (Connect Database)';
        $description =  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
        $image = "../images/generic_profile_pic.jpg";
    } else{
            $ID = mysqli_real_escape_string($conn, $_GET['id']);

            $sql = "SELECT * FROM team WHERE team_ID='$ID' ";

            $result = mysqli_query($conn, $sql) or die();

            $row = mysqli_fetch_array($result);

            $title =  $row['team_title'];
            $name = $row['team_name'];
            $description = $row['team_description'];
            $image = $row['team_image'];
            
            $page ='secondary';
            
            }

    

}





?>


 <?php include '../includes/header.php' ?>
    
   
    <section id="team_member_section">
        <div class="container pt-5 pb-5">
            <div class="row" id="team_row">
                <div class="col">
                    <img class="img-fluid img-full loaded" data-original="img/<?php echo $image; ?>" data-was-processed="true" src="<?php echo $image; ?>" alt="Team one">
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

<?php include '../assets/functions/db.php';

$db->setTable("team");


?>



<?php 

$page ='secondary';

$backupData = [
    'team_title' =>  'Team Member ',
    'team_name' => 'John Doe (Connect Database)',
    'team_description' =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
    'team_image' => "../images/generic_profile_pic.jpg"
];


$data = $db->route("team_ID",$backupData);

$title = $data['team_title'];



$page ='secondary';





?>


 <?php include '../includes/header.php' ?>
    
   
    <section id="team_member_section">
        <div class="container pt-5 pb-5">
            <div class="row" id="team_row" data-aos="fade-up">
                <div class="col-md-6 col-sm-12 pb-sm-4">
                    <img class="img-fluid img-full loaded" data-original="img/<?php echo $data['team_image']; ?>" data-was-processed="true" src="<?php echo $data['team_image']; ?>" alt="Team one">
                </div>
                <div class="col-md-6 col-sm-12"><h1><?php echo $data['team_name']; ?></h1>
                <p><?php echo $data['team_description'] ?></p>
                
                <hr>
                <h2>Have any questions?</h2>
                <ul class="d-inline-flex pt-4">
                    <li><a href="mailto:Example@email.com"><img src="https://img.icons8.com/ios/40/000000/composing-mail.png"></a></li>
                    <li><a target="_blank" href="https://www.facebook.com/"><img src="https://img.icons8.com/ios-filled/40/000000/facebook-new.png"></a></li>
                    <li><a target="_blank" href="https://www.instagram.com/"><img src="https://img.icons8.com/ios-glyphs/40/000000/instagram-new.png"></a></li>
                </ul>
                </div>
            </div>
        </div>
    </section>
       
       <?php include '../includes/footer.php';
       
       ?>
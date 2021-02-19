  <?php 
  
  
   $title = "Main Street Place";
   $page ='secondary';

   include '../assets/functions/db.php'; 


  

$backupData = array(
  "work_title"=>"Example Item",
  "work_img_1"=>"Images/placeholder.png",
  "work_img_2"=>"Images/placeholder.png",
  "work_img_3"=>"Images/placeholder.png",
  "work_img_4"=>"Images/placeholder.png",
  "work_description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
);




$data = $db->route("work_ID",$backupData);



$page ='secondary';

?>


<?php include '../includes/header.php'?>


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo $_GET['src'] === 'index' ? '../index.php#more_work' : 'work.php' ?>">Go Back</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $data['work_title']; ?></li>
  </ol>
</nav>


<section id="item_section">
  <div class="container-fluid">
  <div class="row" data-aos="fade" data-aos-anchor-placement="center" data-aos-duration="1500">
    <div class="col-lg-12  p-4">
      <div class="text-box-2">
      <h1 class="text-center"><?php echo !$result ? 'Connect to Database' : $data['work_title'] ?></h1>
      <p class="text-center"><?php echo $data['work_description'] ?></p>
      </div>

    </div>
  </div>
  <div class="row" data-aos="fade" data-aos-anchor-placement="center" data-aos-duration="1500">
    <div class="col-lg-12"><img class="img-fluid" src="<?php echo $page === 'secondary' ? '../' : ''?><?php echo $data['work_img_1']; ?>" alt=""></div>
  </div>
  <div class="row" data-aos="fade" data-aos-anchor-placement="center" data-aos-duration="1500">
    <div class="col-md-6"><img class="img-fluid" src="<?php echo $page === 'secondary' ? '../' : ''?><?php echo $data['work_img_2']; ?>" alt=""></div>
    <div class="col-md-6"><img class="img-fluid" src="<?php echo $page === 'secondary' ? '../' : ''?><?php echo $data['work_img_3']; ?>" alt=""></div>
  </div>
  
  <div class="row" data-aos="fade" data-aos-anchor-placement="center" data-aos-duration="1500">
    <div class="col-md-12 p-4">
    <div class="text-box-2">
      <h1 class="text-center"><?php echo !$result ? 'Connect to Database' : "Custom Title" ?></h1>
      <p class="text-center"><?php echo $data['work_description'] ?></p>
      </div>
    </div>

    
  </div>
  <div class="row" data-aos="fade" data-aos-anchor-placement="center" data-aos-duration="1500">
    <div class="col-lg-12"><img class="img-fluid" src="<?php echo $page === 'secondary' ? '../' : ''?><?php echo $data['work_img_4'] ?>" alt=""></div>

</div>
  </section>



 


  


  <?php include '../includes/footer.php'?>
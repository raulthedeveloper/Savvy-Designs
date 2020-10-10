  <?php $title = "Main Street Place";?>
  <?php $page ='secondary' ?>
  <?php include '../assets/functions/db.php'; ?>


  <?php 

    $title = '';
    $img1 = '';
    $img2 = '';
    $img3 = '';
    $description = '';

if(null !== $_GET['id']){

  if($_GET['id'] == 'test'){
    $title =  "Example Item";
    $img1 = "Images/placeholder.png";
    $img2 = "Images/placeholder.png";
    $img3 = "Images/placeholder.png";
    $description = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

  }else{

    $ID = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM work_items WHERE work_ID='$ID' ";

    $result = mysqli_query($conn, $sql) or die();

    $row = mysqli_fetch_array($result);

    $title =  $row['work_title'];
    $img1 = $row['work_img_1'];
    $img2 = $row['work_img_2'];
    $img3 = $row['work_img_3'];
    $img4 = $row['work_img_4'];
    $description = $row['work_description'];

  }
}



$page ='secondary';

?>


<?php include '../includes/header.php'?>


<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo $_GET['src'] === 'index' ? '../index.php#more_work' : 'work.php' ?>">Go Back</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $title; ?></li>
  </ol>
</nav>


<section id="item_section">
  <div class="container-fluid">
  <div class="row" data-aos="fade" data-aos-anchor-placement="center" data-aos-duration="1500">
    <div class="col-lg-12  p-4">
      <div class="text-box-2">
      <h1 class="text-center"><?php echo !$result ? 'Connect to Database' : $title ?></h1>
      <p class="text-center"><?php echo $description ?></p>
      </div>

    </div>
  </div>
  <div class="row" data-aos="fade" data-aos-anchor-placement="center" data-aos-duration="1500">
    <div class="col-lg-12"><img class="img-fluid" src="<?php echo $page === 'secondary' ? '../' : ''?><?php echo $img1; ?>" alt=""></div>
  </div>
  <div class="row" data-aos="fade" data-aos-anchor-placement="center" data-aos-duration="1500">
    <div class="col-md-6"><img class="img-fluid" src="<?php echo $page === 'secondary' ? '../' : ''?><?php echo $img2; ?>" alt=""></div>
    <div class="col-md-6"><img class="img-fluid" src="<?php echo $page === 'secondary' ? '../' : ''?><?php echo $img3; ?>" alt=""></div>
  </div>
  
  <div class="row" data-aos="fade" data-aos-anchor-placement="center" data-aos-duration="1500">
    <div class="col-md-12 p-4">
    <div class="text-box-2">
      <h1 class="text-center"><?php echo !$result ? 'Connect to Database' : "Custom Title" ?></h1>
      <p class="text-center"><?php echo $description ?></p>
      </div>
    </div>

    
  </div>
  <div class="row" data-aos="fade" data-aos-anchor-placement="center" data-aos-duration="1500">
    <div class="col-lg-12"><img class="img-fluid" src="<?php echo $page === 'secondary' ? '../' : ''?><?php echo $img4; ?>" alt=""></div>

</div>
  </section>



 


  


  <?php mysqli_close($conn); ?>
  <?php include '../includes/footer.php'?>
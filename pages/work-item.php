  <?php $title = "Main Street Place";?>
  <?php $page ='secondary' ?>
  <?php include '../assets/functions/db.php'; ?>
  <?php include '../includes/header.php'?>

  <?php 



if(null !== $_GET['id']){

    $ID = mysqli_real_escape_string($conn, $_GET['id']);

    $sql = "SELECT * FROM work_items WHERE work_ID='$ID' ";

    $result = mysqli_query($conn, $sql) or die();

    $row = mysqli_fetch_array($result);

}

$title =  $row['work_title'];
$img1 = $row['work_img_1'];
$img2 = $row['work_img_2'];
$img3 = $row['work_img_3'];
$description = $row['work_description'];


$page ='secondary';

?>





  <div class="container pb-5" id="work_item_container">

    <div class="row">

      <div class="col-md-5">
        <div class="work_text">
          <h2><?php echo $title; ?></h2>
          <p><?php echo $description; ?></p>


          <button onclick="window.location.href='learn_more.php';" class="btn-success">Contact Me</button>
        </div>
      </div>
      <div class="col-md-7">

        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="<?php echo $img1; ?>" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="<?php echo $img2 ?>" class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item">
              <img src="<?php echo $img3 ?>" class="d-block w-100" alt="...">
            </div>

          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>



      </div>
    </div>



  </div>
  <?php mysqli_close($conn); ?>
  <?php include '../includes/footer.php'?>
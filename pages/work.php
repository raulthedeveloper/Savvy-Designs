  <?php $title = "Our Work";?>
  <?php include '../assets/functions/db.php'; ?>

  <?php $page ='secondary' ?>




  <?php include '../includes/header.php'?>


  <div class="photo-gallery">
      <div class="container pt-5 pb-5">
          <div class="row photos">


              <?php
 

 if (mysqli_num_rows($result) > 0) {
    // output data of each row
$sql = "SELECT work_ID, work_title, work_img_1 FROM work_items;";
$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        
     
        ?>

              <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="work-item.php?id=<?php echo $row["work_ID"] ?>"><img
                          class="img-fluid" data-bs-hover-animate="pulse" src="<?php echo $row['work_img_1']; ?>"></a>
                  <h6 class="text-center" style="font-family: 'Advent Pro', sans-serif;">
                      <?php echo $row['work_title'] ?></h6>
              </div>
              <?php }
  
} 
else {
    echo "data base error";
  }


 ?>





          </div>
      </div>
      <?php include '../includes/footer.php'?>
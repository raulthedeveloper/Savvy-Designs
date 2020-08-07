  <?php $title = "Our Work";?>
  <?php include '../assets/functions/db.php'; ?>

  <?php $page ='secondary' ?>




  <?php include '../includes/header.php'?>

  <h1 class="text-center pt-4"><?php echo !$result ? 'Connect Database to see work items' : "" ?></h1>

  <div class="photo-gallery">
      <div class="container pt-5 pb-5">
          <div class="row photos">

              <?php
 

 if (!$result) {
    for($i = 0; $i < 8; $i++){?>
        <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="work-item.php?id=test&src=work&src=work"><img
                          class="img-fluid" data-bs-hover-animate="pulse" src="../Images/placeholder.png"></a>
                  <h6 class="text-center" style="font-family: 'Advent Pro', sans-serif;">
                      Work Item</h6>
              </div>
    <?php }
  }
  
 
else if(mysqli_num_rows($result) > 0){
  

// output data of each row
    $sql = "SELECT work_ID, work_title, work_img_1 FROM work_items;";
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)) {
  
        ?>

              <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="work-item.php?id=<?php echo $row["work_ID"] ?>&src=work"><img
                          class="img-fluid" data-bs-hover-animate="pulse" src="<?php echo $page === 'secondary' ? '../' : ''?><?php echo  $row['work_img_1']; ?>"></a>
                  <h6 class="text-center" style="font-family: 'Advent Pro', sans-serif;">
                      <?php echo $row['work_title'] ?></h6>
              </div>
              <?php }

    }
 ?>

  



          </div>
          
      </div>
      <?php include '../includes/footer.php'?>
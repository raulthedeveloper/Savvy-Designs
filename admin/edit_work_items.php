<?php $page ='secondary' ?>
<?php include '../assets/functions/db.php'; ?>

<?php include 'includes/header.php' ?>

<?php 
    if(isset($_POST['add_submit'])){
        $title = $_POST['item_title'];
        $img1 = $_POST['item_img1'];
        $img2 = $_POST['item_img2'];
        $img3 = $_POST['item_img3'];
        $desc = $_POST['item_desc'];

        // $query = "INSERT INTO work_items(item_ID,item_title,item_img1, item_img2, item_img3, item_desc) VALUES ('{$title}','{$img1}','{$img2}','{$img3}','{$desc}');";
     $query = "INSERT INTO work_items(item_title,item_img1, item_img2, item_img3, item_desc) VALUES ('{$title}','{$img1}','{$img2}','{$img3}','{$desc}');";
        $insert_query = mysqli_query($conn, $query);

    }

    


?>



<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col">
            <h1>Add</h1>
            <form method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input name="item_title" type="text" class="form-control" id="exampleInputEmail1" name="item_title" aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image 1</label>
                    <input name="item_img1" type="url" class="form-control" aria-describedby="emailHelp" name="item_img1"
                        placeholder="paste in image url">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image 2</label>
                    <input name="item_img2" type="url" class="form-control" aria-describedby="emailHelp"
                        placeholder="paste in image url" name="item_img2">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image 3</label>
                    <input name="item_img3" type="url" class="form-control" aria-describedby="emailHelp"
                        placeholder="paste in image url" name="item_img3">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Property Description</label>
                    <input name="item_desc" type="textarea" class="form-control" cols="50" rows="5" aria-describedby="emailHelp">

                </div>
                <button name="add_submit" type="submit" class="btn btn-primary" >Add</button>
            </form>
        </div>
        <div class="col">
            <h1>Remove</h1>
            <form>
                <div id="edit_scroll_box"
                    style=" margin-top: 30px;margin-bottom:30px;height:400px;width:400px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
                    
                   <?php 
                     $sql = "SELECT item_ID, item_img1, item_desc, item_title FROM work_items";
                        $result = mysqli_query($conn, $sql);
                        ?>

                  <?php  while($row = mysqli_fetch_assoc($result)) { ?>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                        </div>
                 

                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="<?php echo $row['item_title'] ?>" readonly>
                    </div>
                    <?php } ?>
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Are you sure?</label>
                </div>
                <button type="submit" class="btn btn-primary" disabled>Remove</button>
            </form>

        </div>
       


    </div>
</div>
</div>
</div>

<?php include './includes/footer.php'; ?>

<?php $page ='secondary' ?>
<?php include '../assets/functions/db.php'; ?>

<?php include 'includes/header.php' ?>


<?php 
    if(isset($_POST['add_submit'])){
        $name = $_POST['team_name'];
        $title = $_POST['team_title'];
        $image = $_POST['team_image'];     
        $description = $_POST['team_description'];

        $query = "INSERT INTO team (team_title,team_name,team_image, team_description) VALUES ('{$title}','{$name}','{$image}','{$description}');";    
        $insert_query = mysqli_query($conn, $query);
      

    }

    if(isset($_POST['remove_submit'])){     
        $ID = $_POST['checkbox'];

        //Assign current ID to checkbox to insert in query
        echo $ID;

     $query = "DELETE FROM team WHERE team_ID={$ID};";    
        $insert_query = mysqli_query($conn, $query) or die(mysqli_error($conn));

        //  INSERT INTO team(team_title,team_name,team_image, team_description) VALUES ('commander','Raul Shepard','https://giantbomb1.cbsistatic.com/uploads/scale_medium/0/1366/1775330-shepard.jpg','I am the king')
      

    }


?>


<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col">
            <h1>Add</h1>



            <form method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Job Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="team_title"
                        aria-describedby="emailHelp">

                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="team_name"
                        aria-describedby="emailHelp">

                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Profile Picture</label>
                    <input type="url" class="form-control" aria-describedby="emailHelp" name="team_image"
                        placeholder="paste in image url">

                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1">Member Description</label>
                    <input name="team_description" type="text" class="form-control" aria-describedby="emailHelp">

                </div>
                <button name="add_submit" type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
        <div class="col">
            <h1>Remove</h1>
            <form method="post">
                <div id="edit_scroll_box"
                    style=" margin-top: 30px;margin-bottom:30px;height:400px;width:400px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">

                    <?php  while($row = mysqli_fetch_assoc($result)) { ?>

                    <div class="form-check">
                        <input name="checkbox" class="form-check-input" type="checkbox" value="<?php echo $row['team_ID']; ?>" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            <?php echo $row['team_name']; ?>
                        </label>
                    </div>
                    <?php } ?>

                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label name="team_description" class="form-check-label" for="exampleCheck1">Are you sure?</label>
                </div>
                <button name="remove_submit" type="submit" class="btn btn-primary">Remove</button>
            </form>

        </div>


    </div>


    <div class="row">
        <div class="col">
            <iframe allowfullscreen src="../pages/theteam.php" title="W3Schools Free Online Web Tutorials"></iframe>
            <button class="btn btn-primary" onclick="document.querySelector('iframe').requestFullscreen()">Full
                Screen</button>
        </div>
    </div>
</div>
</div>
</div>

<?php include './includes/footer.php'; ?>
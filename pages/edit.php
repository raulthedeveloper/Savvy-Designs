<?php $title = "Edit";?>
<?php $page ='secondary' ?>

<?php include '../assets/functions/db.php' ?>

<?php include '../includes/header.php' ?>

<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col">
            <h1>Add</h1>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="item_title" aria-describedby="emailHelp">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image 1</label>
                    <input type="url" class="form-control" aria-describedby="emailHelp" name="item_img1"
                        placeholder="paste in image url">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image 2</label>
                    <input type="url" class="form-control" aria-describedby="emailHelp"
                        placeholder="paste in image url" name="item_img2">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image 3</label>
                    <input type="url" class="form-control" aria-describedby="emailHelp"
                        placeholder="paste in image url" name="item_img3">

                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Property Description</label>
                    <input type="textarea" class="form-control" cols="50" rows="5" aria-describedby="emailHelp">

                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
        <div class="col">
            <h1>Remove</h1>
            <form>
                <div id="edit_scroll_box"
                    style=" margin-top: 30px;margin-bottom:30px;height:400px;width:400px;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto;">
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <input type="checkbox" aria-label="Checkbox for following text input">
                            </div>
                        </div>
                        <input type="text" class="form-control" aria-label="Text input with checkbox" value="Item One" readonly>
                    </div>
                    
                </div>

                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Are you sure?</label>
                </div>
                <button type="submit" class="btn btn-primary">Remove</button>
            </form>

        </div>


    </div>
</div>
</div>
</div>

<?php include '../includes/footer.php'?>
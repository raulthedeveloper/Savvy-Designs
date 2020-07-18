<?php include 'includes/header.php'; ?>

<!------ Uses form to check database if info is correct -->

<?php 

//check form submit for correct password and user against database


?>

<div class="container pt-5">
    <div class="row">
        <div class="col-6">
        <h1>Sign In</h1>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
               
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <a href="new_user.php">create new account</a>
        </div>
       
    </div>
</div>









<?php include 'includes/footer.php'; ?>
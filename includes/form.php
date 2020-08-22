<?php 

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];     
    $time_to_call = $_POST['call_time'];
    $comments = $_POST['comments'];

    echo $name . "<br>". $email ."<br>". $phone ."<br>". $time_to_call ."<br>". $comments;

    $query = "INSERT INTO prospect_emails(full_name,email,phone,time_to_call,comments) VALUES ('{$name}','{$email}',$phone,'{$time_to_call}','{$comments}');";    
    $insert_query = mysqli_query($conn, $query) or die(mysqli_error($conn));
    

}


?>

<form id="contactForm" action="" method="post"><input class="form-control" type="hidden" name="Introduction"
        value="This email was sent from www.awebsite.com"><input class="form-control" type="hidden" name="subject"
        value="Awebsite.com Contact Form"><input class="form-control" type="hidden" name="to"
        value="email@awebsite.com">
    <div class="form-row">
        <div class="col-md-6">
            <div id="successfail"></div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-12 col-md-6" id="message">
            <h2 class="h4"><i class="fa fa-envelope"></i> Contact Me<small><small
                        class="required-input">&nbsp;(*required)</small></small>
            </h2>
            <div class="form-group"><label for="from-name">Name</label><span class="required-input">*</span>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user-o"></i></span>
                    </div><input class="form-control" type="text" id="from-name" name="name" required=""
                        placeholder="Full Name">
                </div>
            </div>
            <div class="form-group"><label for="from-email">Email</label><span class="required-input">*</span>
                <div class="input-group">
                    <div class="input-group-prepend"><span class="input-group-text"><i
                                class="fa fa-envelope-o"></i></span></div><input class="form-control" type="text"
                        id="from-email" name="email" required="" placeholder="Email Address">
                </div>
            </div>
            <div class="form-row">
                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                    <div class="form-group"><label for="from-phone">Phone</label><span class="required-input">*</span>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i
                                        class="fa fa-phone"></i></span></div><input class="form-control" type="text"
                                id="from-phone" name="phone" required="" placeholder="Primary Phone">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                    <div class="form-group"><label for="from-calltime">Best Time to
                            Call</label>
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text"><i
                                        class="fa fa-clock-o"></i></span></div><select class="form-control"
                                id="from-calltime" name="call_time">
                                <optgroup label="Best Time to Call">
                                    <option value="Morning" selected="">Morning</option>
                                    <option value="Afternoon">Afternoon</option>
                                    <option value="Evening">Evening</option>
                                </optgroup>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group"><label for="from-comments">Comments</label><textarea class="form-control"
                    id="from-comments" name="comments" placeholder="Enter Comments" rows="5"></textarea></div>
            <div class="form-group">
                <div class="form-row">
                    <div class="col"><button class="btn btn-primary btn-block" type="reset"
                            style="background-color: rgba(0,123,255,0);"><i class="fa fa-undo"></i> Reset</button></div>
                    <div class="col">

                        <button class="btn btn-primary btn-block" type="submit" id="submit" name="submit"
                            style="background-color: rgba(0,123,255,0);">Submit
                            <i class="fa fa-chevron-circle-right"></i></button>

                    </div>
                </div>
</form>
<h3 class="text-danger"></h3>

</div>
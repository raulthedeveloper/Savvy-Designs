<?php $page ='index' ?>

<?php include "includes/head_links.php" ?>
<?php include "assets/functions/db.php"; ?>
<body>
    <section id="hero">

        <!---- Navigation in includes file ------->
        <?php include './includes/navbar.php'?>

        <div class="container">
            <div class="row">
                <div id="header-box">
                    <div class="col-auto text-left">
                        <h1 class="text-center" id="main__header">Savvy Interior Designs</h1>

                        <button class="btn btn-primary btn-lg text-justify d-flex swing animated"
                            onclick="window.location.href ='pages/work.php';" type="button"
                            id="main__header__btn">Recent Projects</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section id="services" style="padding-bottom: 39px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 d-flex flex-grow-1" style="font-family: 'Advent Pro', sans-serif;">
                    <div>
                        <h1 class="text-center" style="padding-top: 39px;">We Specialize in Interior Redesign</h1>
                        <p class="text-left" style="font-size: 26px;">Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                            veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum.</p>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="carousel slide carousel-fade" data-ride="carousel" id="carousel-1"
                        style="padding-top: 52px;">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"><img class="w-100 d-block" id="carousal"
                                    src="assets/img/before%20and%20after%201.jpg" alt="Slide Image"
                                    style="padding-top: 0;padding-bottom: 0px;" width="750" height="320"></div>
                            <div class="carousel-item"><img class="w-100 d-block"
                                    src="assets/img/before%20and%20after%202.jpg" alt="Slide Image" width="750"
                                    height="320"></div>
                            <div class="carousel-item"><img class="w-100 d-block"
                                    src="assets/img/before%20and%20after%203.jpg" alt="Slide Image" width="750"
                                    height="320"></div>
                            <div class="carousel-item"><img class="w-100 d-block"
                                    src="assets/img/before%20and%20after%204.png" alt="Slide Image" width="750"
                                    height="329"></div>
                        </div>
                        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span
                                    class="carousel-control-prev-icon"></span><span
                                    class="sr-only">Previous</span></a><a class="carousel-control-next"
                                href="#carousel-1" role="button" data-slide="next"><span
                                    class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a>
                        </div>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-1" data-slide-to="1"></li>
                            <li data-target="#carousel-1" data-slide-to="2"></li>
                            <li data-target="#carousel-1" data-slide-to="3"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="photo-gallery" style="padding-top: 3em;padding-bottom: 3em;">
        <div class="container">
            <div class="intro">
                <h1 class="text-center" style="font-family: 'Advent Pro', sans-serif;"><a href="work.php"
                        style="color: black;text-decoration: none;">More of Our Work</a></h1>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh
                    erat, pellentesque ut laoreet vitae. </p>
            </div>
            <div class="row photos">
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="pages/work-item.php"><img
                            class="img-fluid img-fluid-work"
                            src="https://cdn.pixabay.com/photo/2017/12/11/13/24/interior-3012218_960_720.png"></a></div>

                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="pages/work-item.php"><img
                            class="img-fluid img-fluid-work"
                            src="https://storage.needpix.com/rsynced_images/interior-design-2047072_1280.jpg"></a></div>

                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="pages/work-item.php"><img
                            class="img-fluid img-fluid-work"
                            src="https://cdn.pixabay.com/photo/2017/12/11/13/33/interior-3012235_960_720.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="pages/work-item.php"><img
                            class="img-fluid img-fluid-work" src="assets/img/loft.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="pages/work-item.php"><img
                            class="img-fluid img-fluid-work"
                            src="https://storage.needpix.com/rsynced_images/kitchen-1940177_1280.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="pages/work-item.php"><img
                            class="img-fluid img-fluid-work"
                            src="https://p1.pxfuel.com/preview/544/967/767/interior-design-rendering-interior-3d-design-apartment.jpg"></a>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="pages/work-item.php"><img
                            class="img-fluid img-fluid-work"
                            src="https://live.staticflickr.com/1748/42708805361_14c8bf408f_b.jpg"></a></div>
                <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="pages/work-item.php"><img
                            class="img-fluid img-fluid-work"
                            src="https://cdn.pixabay.com/photo/2019/12/26/18/41/lamp-4720975_960_720.jpg"></a></div>
            </div>
        </div>
    </div>
    <section id="testimonial">
        <div class="testimonials-clean">
            <div class="container">
                <div class="intro">
                    <h2 class="text-center">Testimonials </h2>
                    <p class="text-center">Our customers love us! Read what they have to say below. Aliquam sed justo
                        ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae.</p>
                </div>
                <div class="row people">
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box">
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus.
                                Praesent aliquam in tellus eu gravida. Aliquam varius finibus est.</p>
                        </div>
                        <div class="author"><img class="rounded-circle" src="assets/img/1.jpg">
                            <h5 class="name">Ben Johnson</h5>
                            <p class="title">CEO of Company Inc.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box">
                            <p class="description">Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, et
                                interdum justo suscipit id.</p>
                        </div>
                        <div class="author"><img class="rounded-circle" src="assets/img/3.jpg">
                            <h5 class="name">Carl Kent</h5>
                            <p class="title">Founder of Style Co.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 item">
                        <div class="box">
                            <p class="description">Aliquam varius finibus est, et interdum justo suscipit. Vulputate
                                quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu.</p>
                        </div>
                        <div class="author"><img class="rounded-circle" src="assets/img/2.jpg">
                            <h5 class="name">Emily Clark</h5>
                            <p class="title">Owner of Creative Ltd.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" style="padding-bottom: 41px;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div>
                        <div class="container-fluid">
                            <h1 class="text-center" style="font-family: 'Advent Pro', sans-serif;padding-top: 1em;">
                                Contact</h1>
                            <hr>

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
    
    
    //  INSERT INTO team(team_title,team_name,team_image, team_description) VALUES ('commander','Raul Shepard','https://giantbomb1.cbsistatic.com/uploads/scale_medium/0/1366/1775330-shepard.jpg','I am the king')
  

}


?>


                            <form id="contactForm" action="" method="post"><input
                                    class="form-control" type="hidden" name="Introduction"
                                    value="This email was sent from www.awebsite.com"><input class="form-control"
                                    type="hidden" name="subject" value="Awebsite.com Contact Form"><input
                                    class="form-control" type="hidden" name="to" value="email@awebsite.com">
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
                                        <div class="form-group"><label for="from-name">Name</label><span
                                                class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="fa fa-user-o"></i></span></div><input
                                                    class="form-control" type="text" id="from-name" name="name"
                                                     required="" placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="form-group"><label for="from-email">Email</label><span
                                                class="required-input">*</span>
                                            <div class="input-group">
                                                <div class="input-group-prepend"><span class="input-group-text"><i
                                                            class="fa fa-envelope-o"></i></span></div><input
                                                    class="form-control" type="text" id="from-email"
                                                     name="email" required=""
                                                    placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                <div class="form-group"><label for="from-phone">Phone</label><span
                                                        class="required-input">*</span>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span
                                                                class="input-group-text"><i
                                                                    class="fa fa-phone"></i></span></div><input
                                                            class="form-control" type="text" id="from-phone"
                                                             name="phone" required=""
                                                            placeholder="Primary Phone">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                <div class="form-group"><label for="from-calltime">Best Time to
                                                        Call</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span
                                                                class="input-group-text"><i
                                                                    class="fa fa-clock-o"></i></span></div><select
                                                            class="form-control" id="from-calltime" name="call_time">
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
                                        <div class="form-group"><label for="from-comments">Comments</label><textarea
                                                class="form-control" id="from-comments" name="comments"
                                                 placeholder="Enter Comments"
                                                rows="5"></textarea></div>
                                        <div class="form-group">
                                            <div class="form-row">
                                                <div class="col"><button class="btn btn-primary btn-block" type="reset"
                                                        style="background-color: rgba(0,123,255,0);"><i
                                                            class="fa fa-undo"></i> Reset</button></div>
                                                <div class="col">

                                                    <button class="btn btn-primary btn-block" type="submit"
                                                        id="submit" name="submit" style="background-color: rgba(0,123,255,0);">Submit
                                                        <i class="fa fa-chevron-circle-right"></i></button>
                                                    
                                                    </div>
                                            </div>
                                            </form>
                                            <h3 style="color:red"></h3>

                                        </div>
                                        <hr class="d-flex d-md-none">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <h2 class="h4"><i class="fa fa-location-arrow"></i> Locate My Office</h2>
                                        <div class="form-row">
                                            <div class="col-12">
                                                <div class="static-map"><a rel="noopener"
                                                        href="https://www.google.com/maps/place/Daytona+International+Speedway/@29.1815062,-81.0744275,15z/data=!4m13!1m7!3m6!1s0x88e6d935da1cced3:0xa6b3e1bc0f2fc83a!2s1801+W+International+Speedway+Blvd,+Daytona+Beach,+FL+32114!3b1!8m2!3d29.187028!4d-81.0703076!3m4!1s0x88e6d949a4cb8593:0x1387c6c0b5c8cc97!8m2!3d29.1851681!4d-81.0705292"
                                                        target="_blank"> <iframe
                                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96708.34209253524!2d-74.03944241588636!3d40.759040225630976!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2588f046ee661%3A0xa0b3281fcecc08c!2sManhattan%2C%20New%20York%2C%20NY!5e0!3m2!1sen!2sus!4v1573691932830!5m2!1sen!2sus"
                                                            width="400" height="300" frameborder="0" style="border:0;"
                                                            allowfullscreen=""></iframe></a></div>
                                            </div>
                                            <div class="col-sm-6 col-md-12 col-lg-6">
                                                <h2 class="h4"><i class="fa fa-user"></i> Our Info</h2>
                                                <div><span><strong>Name</strong></span></div>
                                                <div><span>Bigmamma2019@me.org</span></div>
                                                <div><span>www.awebsite.com</span></div>
                                                <hr class="d-sm-none d-md-block d-lg-none">
                                            </div>
                                            <div class="col-sm-6 col-md-12 col-lg-6">
                                                <h2 class="h4"><i class="fa fa-location-arrow"></i> Our Address</h2>
                                                <div><span><strong>Office Name</strong></span></div>
                                                <div><span>55 Broadway Ave.</span></div>
                                                <div><span>Manhattan, NY 85150</span></div>
                                                <div><abbr data-toggle="tooltip" data-placement="top"
                                                        title="Office Phone: 555-867-5309">O:</abbr> 555-867-5309</div>
                                                <hr class="d-sm-none">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                        <div class="modal fade" role="dialog" tabindex="-1" id="modal1">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Contact Information</h4><button type="button"
                                            class="close" data-dismiss="modal" aria-label="Close"><span
                                                aria-hidden="true">×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="contactForm" action="javascript:void(0);" method="get"><input
                                                class="form-control" type="hidden" name="Introduction"
                                                value="This email was sent from www.awebsite.com"><input
                                                class="form-control" type="hidden" name="subject"
                                                value="Awebsite.com Contact Form"><input class="form-control"
                                                type="hidden" name="to" value="email@awebsite.com">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div id="successfail"></div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-12 col-md-6" id="message">
                                                    <h2 class="h4"><i class="fa fa-envelope"></i> Contact
                                                        Us<small><small
                                                                class="required-input">&nbsp;(*required)</small></small>
                                                    </h2>
                                                    <div class="form-group"><label for="from-name">Name</label><span
                                                            class="required-input">*</span>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text"><i
                                                                        class="fa fa-user-o"></i></span></div><input
                                                                class="form-control" type="text" id="from-name"
                                                                name="name" required="" placeholder="Full Name">
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label for="from-email">Email</label><span
                                                            class="required-input">*</span>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend"><span
                                                                    class="input-group-text"><i
                                                                        class="fa fa-envelope-o"></i></span></div><input
                                                                class="form-control" type="text" id="from-email"
                                                                name="email" required="" placeholder="Email Address">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                            <div class="form-group"><label
                                                                    for="from-phone">Phone</label><span
                                                                    class="required-input">*</span>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><span
                                                                            class="input-group-text"><i
                                                                                class="fa fa-phone"></i></span></div>
                                                                    <input class="form-control" type="text"
                                                                        id="from-phone" name="phone" required=""
                                                                        placeholder="Primary Phone">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-6 col-md-12 col-lg-6">
                                                            <div class="form-group"><label for="from-calltime">Best Time
                                                                    to Call</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><span
                                                                            class="input-group-text"><i
                                                                                class="fa fa-clock-o"></i></span></div>
                                                                    <select class="form-control" id="from-calltime"
                                                                        name="call time">
                                                                        <optgroup label="Best Time to Call">
                                                                            <option value="Morning" selected="">Morning
                                                                            </option>
                                                                            <option value="Afternoon">Afternoon</option>
                                                                            <option value="Evening">Evening</option>
                                                                        </optgroup>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group"><label
                                                            for="from-comments">Comments</label><textarea
                                                            class="form-control" id="from-comments" name="comments"
                                                            placeholder="Enter Comments" rows="5"></textarea></div>
                                                    <div class="form-group">
                                                        <div class="form-row">
                                                            <div class="col"><button class="btn btn-primary btn-block"
                                                                    type="reset"><i class="fa fa-undo"></i>
                                                                    Reset</button></div>
                                                            <div class="col"><button class="btn btn-primary btn-block"
                                                                    type="submit">Submit <i
                                                                        class="fa fa-chevron-circle-right"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="d-flex d-md-none">
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <h2 class="h4"><i class="fa fa-location-arrow"></i> Locate Us</h2>
                                                    <div class="form-row">
                                                        <div class="col-12">
                                                            <div class="static-map"><a rel="noopener"
                                                                    href="https://www.google.com/maps/place/Daytona+International+Speedway/@29.1815062,-81.0744275,15z/data=!4m13!1m7!3m6!1s0x88e6d935da1cced3:0xa6b3e1bc0f2fc83a!2s1801+W+International+Speedway+Blvd,+Daytona+Beach,+FL+32114!3b1!8m2!3d29.187028!4d-81.0703076!3m4!1s0x88e6d949a4cb8593:0x1387c6c0b5c8cc97!8m2!3d29.1851681!4d-81.0705292"
                                                                    target="_blank"> <img class="img-fluid"
                                                                        src="http://maps.googleapis.com/maps/api/staticmap?autoscale=2&amp;size=600x210&amp;maptype=roadmap&amp;format=png&amp;visual_refresh=true&amp;markers=size:mid%7Ccolor:0xff0000%7Clabel:%7C582+1801+W+International+Speedway+Blvd+Daytona+Beach+FL+32114&amp;zoom=12"
                                                                        alt="Google Map of Daytona International Speedway"></a>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-md-12 col-lg-6">
                                                            <h2 class="h4"><i class="fa fa-user"></i> Our Info</h2>
                                                            <div><span><strong>Name</strong></span></div>
                                                            <div><span>email@awebsite.com</span></div>
                                                            <div><span>www.awebsite.com</span></div>
                                                            <hr class="d-sm-none d-md-block d-lg-none">
                                                        </div>
                                                        <div class="col-sm-6 col-md-12 col-lg-6">
                                                            <h2 class="h4"><i class="fa fa-location-arrow"></i> Our
                                                                Address</h2>
                                                            <div><span><strong>Office Name</strong></span></div>
                                                            <div><span>55 Icannot Dr</span></div>
                                                            <div><span>Daytone Beach, FL 85150</span></div>
                                                            <div><abbr data-toggle="tooltip" data-placement="top"
                                                                    title="Office Phone: 555-867-5309">O:</abbr>
                                                                555-867-5309</div>
                                                            <hr class="d-sm-none">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><a id="back-to-top" href="index.php#hero" style="font-family: 'Advent Pro', sans-serif;">Back to top<i
                    class="fa fa-arrow-circle-up" style="margin-right: -1px;padding-left: 5px;"></i></a>
        </div>
    </section>

    <?php include 'includes/footer.php'?>
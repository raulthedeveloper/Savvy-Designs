<div class="footer-dark">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Interior Design</a></li>
                        <li><a href="#">Consultation</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li><a class="nav-link" href="<?php echo $nav_links; ?>../admin/index.php" style="color: rgb(246,249,252);font-family: 'Advent Pro', sans-serif;">Edit</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Careers</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Savvy Interior Designs</h3>
                    <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                </div>
                <div class="col item social"><a target="_blank" href="https://www.facebook.com/"><i class="icon ion-social-facebook"></i></a><a target="_blank" href="https://twitter.com/"><i class="icon ion-social-twitter"></i></a><a target="_blank" href="https://www.snapchat.com/"><i class="icon ion-social-snapchat"></i></a><a target="_blank" href="https://www.instagram.com/"><i class="icon ion-social-instagram"></i></a></div>
            </div>
            <p class="copyright">Savvy Designs © <?php echo date("Y") ?></p>
        </div>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $page === 'secondary' ? '../' : '' ?>assets/js/bs-init.js"></script>
<script src="<?php echo $page === 'secondary' ? '../' : '' ?>assets/js/Contact-Form-v2-Modal--Full-with-Google-Map.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
</body>

</html>

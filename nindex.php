<?php 
  include 'htmlh.php';
  include 'header.php';
?>
<!-- Sign in box -->
    <div class="container">
        <div class="starter-template">
            <img src="img/logo.png" class="img-fluid" alt="Responsive image">
            <br>
            <br>
            <?php
            if (@$_COOKIE['login'] != "admin"){
                include 'loginbox.php';
            } else{
                echo "Welcome to CyberGame Competition Versus Platform developed by UIC-PANICS";
            }
            ?>
            <br>
            <br>
        </div>
    </div><!-- /.container -->
<?php 
  include 'footer.php';
  include 'htmlt.php';
?>
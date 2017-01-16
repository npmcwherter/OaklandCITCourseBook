<?php 




output_header( 'home'); 

if (isset($_REQUEST['logout'])) {
    session_unset();
    session_destroy();
    if (isset($_REQUEST['url'])) {
        $url = $_REQUEST['url'];
    } else {
        $url = 'home.php';
    }
    header( 'Location: '.$url, true, '307');
    }

?>

<!-- NAVBAR
================================================== -->

<body>
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <!-- Indicators -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 style="display: block;">Oakland University CIT Coursebook</h1>
                        <p style="display: block;">Where you can view and update your classes.</p>
                        
                        <?php if ($USER->User_Name) { ?>
                            <br><br><br><br><br><br><br>
                        <?php } else { ?>
                            <p><a class="btn btn-lg btn-primary" href="login.php" role="button">Log In</a></p><br><br><br><br><br>
                        <?php } ?>                        
         
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel
    ================================================== -->
    <!-- /.carousel -->
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="container marketing">
        <!-- Three columns of text below the carousel -->
        <!-- /.row -->
        <!-- START THE FEATURETTES -->
        <!-- /END THE FEATURETTES -->
        <!-- FOOTER -->
        <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p style="display: block;">© 2016 CIT Course Guide, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </footer>
    </div>
    <!-- /.container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
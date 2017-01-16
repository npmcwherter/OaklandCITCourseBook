<?php 

$pageTitle = "Course Book | Contact";
require( 'lib/lib.php'); 
include('lib/header.php');
output_header( 'contact');

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
                            <p><a class="btn btn-lg btn-primary" href="login.php" type="submit" value="Send" role="button">Log In</a></p><br><br><br><br><br>
                        <?php } ?>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="container marketing">
                <div class="panel " style="border-color: #cc9900;">
                    <div class="panel-heading">
                        <h3>Do you have any questions?</h3>
                    </div>
                    </a>
                    <div class="panel-body">
                        <p class="text-info">Please feel free to reach out to us via the form beloew for any questions on the website or if you need further assistance. If additional help is needed contact the acedemic advising office!
                            <br>
                        </p>
                        <br>
                        <p class="text-info">Dean's Office: (248) 111-1111
                            <br> Academic Advising: (248) 111-1112
                            <br>
                            <a href="mailto:advisingquestions@oakland.edu">advisingquestions@oakland.edu</a> </p>

                    </div>

                </div>
                
            </div>
        </div>

        <div class="container">
            <form action="MAILTO:Support@CIT337.com" method="post" enctype="text/plain">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-md-offset-3" >
                        <fieldset>
                            <legend>Contact Us:</legend>

                            <form class="form-horizontal" role="form" method="post" >
                            	<div class="form-group" style="padding:10px;">
                            		<label for="name" class="col-sm-2 control-label">Name:</label>
                            		<div class="col-sm-10">
                            			<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
                            		</div>
                            	</div>
                            	<div class="form-group" style="padding:10px;">
                            		<label for="email" class="col-sm-2 control-label">Email:</label>
                            		<div class="col-sm-10">
                            			<input type="email" class="form-control" id="email" name="email" placeholder="Your Email" value="">
                            		</div>
                            	</div>
                            	<div class="form-group" style="padding:10px;">
                            		<label for="subject" class="col-sm-2 control-label">Subject:</label>
                            		<div class="col-sm-10">
                            			<input type="subject" class="form-control" id="subject" name="Your Subject" placeholder="Subject" value="">
                            		</div>
                            	</div>                            	
                            	<div class="form-group" style="padding:10px;">
                            		<label for="message" class="col-sm-2 control-label">Message:</label>
                            		<div class="col-sm-10">
                            			<textarea class="form-control" rows="4" name="message"></textarea>
                            		</div>
                            	</div>
                            	<div class="form-group" style="padding:10px;" >
                            		<div class="col-sm-10 col-sm-offset-2" style="margin-top:10px; margin-bottom:40px;">
                            			<input  id="submit" name="" type="submit" value="Send" class="btn btn-primary col-xs-12"  >
                            		</div>
                            	</div>
                            </form>
                            
                    </div>
                    </fieldset>

                </div>
            </form>
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
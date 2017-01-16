<?php
$pageTitle = "Course Book | Login";

require('lib/lib.php');


if (isset($_REQUEST['logout'])) {
    session_unset();
    session_destroy();
    $url = 'index.php';
    header( 'Location: '.$url, true, '307');
}

output_header('login');
update_info();

if (isset($_POST['User_Name'])) {
	$User_Name = $_POST['User_Name'];
	$Password = $_POST['Password'];

	$smt=$db->prepare("SELECT * FROM UserReg WHERE User_Name = ? ");
	$smt->execute(array($User_Name));
	$result=$smt->fetch(PDO::FETCH_OBJ);
	$Pass=$result->Password;
	$User=$result->User_Name;
	$First_Name=$result->First_Name;
	$User_ID=$result->User_ID;
		if(password_verify($Password,$Pass)& $User_Name===$User) {
        	$_SESSION['User_Name'] = $User_Name;
        	$_SESSION['First_Name'] = $First_Name;
        	$_SESSION['User_ID'] = $User_ID;
		header('location:index.php');
    }
            else{
             echo "Username or password is not correct";
            
        }
}


?>

<body>
    <!-- style="background: rgba(51, 26, 0, .3);"  Neat background overlay for tranparency -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
        <!-- Indicators -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 style="display: block;">Oakland University CIT Coursebook</h1>
                        <p style="display: block;">Where you can view and update your classes.</p>
                        <div>
                            <div class="col-sm-6 col-sm-offset-3">
                                <form class="form-horizontal" method="post" style="margin-bottom: -25px;">
                                    <div class="form-group" class="form-group" style="margin-top:25px;">
                                        <label class="control-label col-sm-3" for="User_Name">Username:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="User_Name" placeholder="Username" value="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="password">Password:</label>
                                        <div class="col-sm-9">
                                            <input type="password" class="form-control" name="Password" placeholder="Password" value="">
                                        </div>
                                    </div>
                                    <div class="form-group" style="margin-top:35px; margin-bottom:25px;">
                                        <div>
                                            <button type="submit" class="btn btn-primary" name="submission">Login</button>
                                            <a class="btn btn-success" href="register.php" role="button">Register</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
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
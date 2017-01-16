<?php

$pageTitle = "Course Book | Register";
require( 'lib/lib.php'); 
include('lib/header.php');


?>


<?php
// Setup an array of data that will be used to re-display to the user if needed.
$error = false;
$success = false;
$sqlerror = false;

 echo "

        <script>
        
        apply = function (obj)
        {
            if(obj.checked){  
                obj.parentNode.parentNode.style.backgroundColor='#ff9999'
               
                
            }
            else
            obj.parentNode.parentNode.style.backgroundColor=''
        }
        </script>    		         

 ";

if (isset($_REQUEST['submission'])) {
	// Variable that we will insert a string into if there is an error to display.
	
	// An array that will hold parameters to insert the record.a
	$sql_params = array();
	// For each input check if it set, if so set the data object and the params object.
	if (isset($_REQUEST['User_Name']) && $_REQUEST['User_Name']) {
		$data['User_Name'] = strip_tags($_REQUEST['User_Name']);
		$sql_params['User_Name'] = $data['User_Name'];
		
		// For the username, we need to check if another user already exists.
		$statement = $db->prepare("SELECT * FROM UserReg WHERE User_Name = ?");
		$statement->execute(array($_REQUEST['User_Name']));
		// If the count of rows is more than 0, then the username is taken.
		if ($statement->rowCount() > 0) {
			$error = "Username Taken";
		}
	} else {
		$error = "Username Required";
	}
	
	if (isset($_REQUEST['Password']) && $_REQUEST['Password']) {
		$sql_params['Password'] = password_hash($_REQUEST['Password'], PASSWORD_DEFAULT);
	} else {
		$error = "Password Required";
	}
	
	if (isset($_REQUEST['First_Name']) && $_REQUEST['First_Name']) {
		$data['First_Name'] = strip_tags($_REQUEST['First_Name']);
		$sql_params['First_Name'] = $data['First_Name'];
	}
	if (isset($_REQUEST['Last_Name']) && $_REQUEST['Last_Name']) {
		$data['Last_Name'] = strip_tags($_REQUEST['Last_Name']);
		$sql_params['Last_Name'] = $data['Last_Name'];
	}
		if (isset($_REQUEST['Email']) && $_REQUEST['Email']) {
		$data['Email'] = strip_tags($_REQUEST['Email']);
		$sql_params['Email'] = $data['Email'];
	}
		if (isset($_REQUEST['ClassID_1']) && $_REQUEST['ClassID_1']) {
		$data['ClassID_1'] = strip_tags($_REQUEST['ClassID_1']);
		$sql_params['ClassID_1'] = $data['ClassID_1'];
	}
		if (isset($_REQUEST['ClassID_2']) && $_REQUEST['ClassID_2']) {
		$data['ClassID_2'] = strip_tags($_REQUEST['ClassID_2']);
		$sql_params['ClassID_2'] = $data['ClassID_2'];
	}
		if (isset($_REQUEST['ClassID_3']) && $_REQUEST['ClassID_3']) {
		$data['ClassID_3'] = strip_tags($_REQUEST['ClassID_3']);
		$sql_params['ClassID_3'] = $data['ClassID_3'];
	}
		if (isset($_REQUEST['ClassID_4']) && $_REQUEST['ClassID_4']) {
		$data['ClassID_4'] = strip_tags($_REQUEST['ClassID_4']);
		$sql_params['ClassID_4'] = $data['ClassID_4'];
	}
		if (isset($_REQUEST['ClassID_5']) && $_REQUEST['ClassID_5']) {
		$data['ClassID_5'] = strip_tags($_REQUEST['ClassID_5']);
		$sql_params['ClassID_5'] = $data['ClassID_5'];
	}
		if (isset($_REQUEST['ClassID_6']) && $_REQUEST['ClassID_6']) {
		$data['ClassID_6'] = strip_tags($_REQUEST['ClassID_6']);
		$sql_params['ClassID_6'] = $data['ClassID_6'];
	}
		if (isset($_REQUEST['ClassID_7']) && $_REQUEST['ClassID_7']) {
		$data['ClassID_7'] = strip_tags($_REQUEST['ClassID_7']);
		$sql_params['ClassID_7'] = $data['ClassID_7'];
	}
		if (isset($_REQUEST['ClassID_8']) && $_REQUEST['ClassID_8']) {
		$data['ClassID_8'] = strip_tags($_REQUEST['ClassID_8']);
		$sql_params['ClassID_8'] = $data['ClassID_8'];
	}
		if (isset($_REQUEST['ClassID_9']) && $_REQUEST['ClassID_9']) {
		$data['ClassID_9'] = strip_tags($_REQUEST['ClassID_1']);
		$sql_params['ClassID_9'] = $data['ClassID_9'];
	}
		if (isset($_REQUEST['ClassID_10']) && $_REQUEST['ClassID_10']) {
		$data['ClassID_10'] = strip_tags($_REQUEST['ClassID_10']);
		$sql_params['ClassID_10'] = $data['ClassID_10'];
	}
		if (isset($_REQUEST['ClassID_11']) && $_REQUEST['ClassID_11']) {
		$data['ClassID_11'] = strip_tags($_REQUEST['ClassID_1']);
		$sql_params['ClassID_11'] = $data['ClassID_11'];
	}
		if (isset($_REQUEST['ClassID_12']) && $_REQUEST['ClassID_12']) {
		$data['ClassID_12'] = strip_tags($_REQUEST['ClassID_12']);
		$sql_params['ClassID_12'] = $data['ClassID_12'];
	}
		if (isset($_REQUEST['ClassID_13']) && $_REQUEST['ClassID_13']) {
		$data['ClassID_13'] = strip_tags($_REQUEST['ClassID_1']);
		$sql_params['ClassID_13'] = $data['ClassID_13'];
	}
		if (isset($_REQUEST['ClassID_14']) && $_REQUEST['ClassID_14']) {
		$data['ClassID_14'] = strip_tags($_REQUEST['ClassID_14']);
		$sql_params['ClassID_14'] = $data['ClassID_14'];
	}
		if (isset($_REQUEST['ClassID_15']) && $_REQUEST['ClassID_15']) {
		$data['ClassID_15'] = strip_tags($_REQUEST['ClassID_15']);
		$sql_params['ClassID_15'] = $data['ClassID_15'];
	}
		if (isset($_REQUEST['ClassID_16']) && $_REQUEST['ClassID_16']) {
		$data['ClassID_16'] = strip_tags($_REQUEST['ClassID_16']);
		$sql_params['ClassID_16'] = $data['ClassID_16'];
	}
		if (isset($_REQUEST['ClassID_17']) && $_REQUEST['ClassID_17']) {
		$data['ClassID_17'] = strip_tags($_REQUEST['ClassID_17']);
		$sql_params['ClassID_17'] = $data['ClassID_17'];
	}
		if (isset($_REQUEST['ClassID_18']) && $_REQUEST['ClassID_18']) {
		$data['ClassID_18'] = strip_tags($_REQUEST['ClassID_18']);
		$sql_params['ClassID_18'] = $data['ClassID_18'];
	}
		if (isset($_REQUEST['ClassID_19']) && $_REQUEST['ClassID_19']) {
		$data['ClassID_19'] = strip_tags($_REQUEST['ClassID_19']);
		$sql_params['ClassID_19'] = $data['ClassID_19'];
	}
		if (isset($_REQUEST['ClassID_20']) && $_REQUEST['ClassID_20']) {
		$data['ClassID_20'] = strip_tags($_REQUEST['ClassID_20']);
		$sql_params['ClassID_20'] = $data['ClassID_20'];
	}
		if (isset($_REQUEST['ClassID_21']) && $_REQUEST['ClassID_21']) {
		$data['ClassID_21'] = strip_tags($_REQUEST['ClassID_21']);
		$sql_params['ClassID_21'] = $data['ClassID_21'];
	}
		if (isset($_REQUEST['ClassID_22']) && $_REQUEST['ClassID_22']) {
		$data['ClassID_22'] = strip_tags($_REQUEST['ClassID_22']);
		$sql_params['ClassID_22'] = $data['ClassID_22'];
	}
	if (isset($_REQUEST['ClassID_23']) && $_REQUEST['ClassID_23']) {
		$data['ClassID_23'] = strip_tags($_REQUEST['ClassID_23']);
		$sql_params['ClassID_23'] = $data['ClassID_23'];
	}
		
	
	
	if (!$error) {
		// Takes the paramter keys and makes a string in the form of "key1, key2, key3"
		$columns = implode(', ', array_keys($sql_params));
		// Takes the paramter keys and makes a string in the form of ":key1, :key2, :key3"
		$placeholders = ':'.implode(', :', array_keys($sql_params));
		
		// Build the SQL.
		$sql = "INSERT INTO UserReg ({$columns}) VALUES ({$placeholders})";
		
		// Insert the record.
		$statement = $db->prepare($sql);
		if ($statement->execute($sql_params)) {
			$success = "Created user ".$sql_params['User_Name']."!";
		} else {
			$sqlerror = $statement->errorInfo()[2];
		}
		
		
	}
	
	
}

output_header('register');

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
                        <p style="display: block;">Please register below.</p> <br><br><br><br><br><br>
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
    	<div class="row" id="main">
		
		<div class="col-sm-6 col-sm-offset-3" >
			 
			
			<?php if ($success) { echo '<div class="alert alert-success text-center" role="alert">'.$success. '</div>'; } else if ($sqlerror) { echo '<div class="alert alert-danger text-center" role="alert">'.$sqlerror. '</div>'; } else { ?>
			<form class="form-horizontal" method="post" style="margin-bottom: -50px;">
				<?php if ($error) { echo '<div class="col-xs-12"><div class="alert alert-danger text-center" role="alert">'.$error. '</div></div>'; } ?>
				<h2>Please register below.</h2>
				<div class="form-group";>
				<br>
					<label class="control-label col-sm-3"  for="First_Name">First Name:</label>
					<div class="col-sm-9" >
						<input   type="text" class="form-control" name="First_Name" placeholder="First Name" value="<?= $data['First_Name'] ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="Last_Name">Last Name:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="Last_Name" placeholder="Last Name" value="<?= $data['Last_Name'] ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="Email">Email:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="Email" placeholder="Email" value="<?= $data['Email'] ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="User_Name">Username:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" name="User_Name" placeholder="Username" value="<?= $data['User_Name'] ?>">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-3" for="Password">Password:</label>
					<div class="col-sm-9">
						<input type="Password" class="form-control" name="Password" placeholder="Password" value="">
					</div>
				</div>
				<br>
				<h3>To customize your profile, please check the boxes next to the classes that you have already taken. <h4>Doing this will delete them from your personalized class list.</h4></h3>
				<br>
				
				<h4>CIT Course Requirements <hr></h4>
				<h4>Math & Science</h4>
					<table class='table table-hover table-responsive table-bordered'><tr><th> </th><th>Course ID</th><th>Course Name</th><th>Credits</th></tr>
					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_1" value="100"> </td> <td class='col-xs-3'> MTH 154 </td> <td class='col-xs-3'> Calculus 1 </td> <td class='col-xs-1'> 4 </td></tr>
  					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_2" value="100"> </td> <td class='col-xs-3'> STA 227 </td> <td class='col-xs-3'> Introduction to Statistical Methods </td> <td class='col-xs-1'> 4 </td></tr>
					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_3" value="100"> </td> <td class='col-xs-3'> MTH 122 </td> <td class='col-xs-3'> Calculus for the Social Sciences </td> <td class='col-xs-1'> 4 </td></tr>
					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_4" value="100"> </td> <td class='col-xs-3'> APM 163 </td> <td class='col-xs-3'> Mathematics for Information Technology </td> <td class='col-xs-1'> 4 </td></tr>
					</table>
					
					<h4>Information Technology Core</h4>
					<table class='table table-hover table-responsive table-bordered'><tr><th> </th><th>Course ID</th><th>Course Name</th><th>Credits</th></tr>
					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_5" value="100"> </td> <td class='col-xs-3'> CIT 120 </td> <td class='col-xs-3'> Introduction to Computing and Programming using Excel </td> <td class='col-xs-1'> 4 </td></tr>
					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_6" value="100"> </td> <td class='col-xs-3'> CIT 131 </td> <td class='col-xs-3'> Computer Programming </td> <td class='col-xs-1'> 4 </td></tr>
					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_7" value="100"> </td> <td class='col-xs-3'> CIT 230 </td> <td class='col-xs-3'> Introduction to Object-Oriented Programming </td> <td class='col-xs-1'> 4 </td></tr>
					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_8" value="100"> </td> <td class='col-xs-3'> CIT 247 </td> <td class='col-xs-3'> Introduction to Computer Networks </td> <td class='col-xs-1'> 4 </td></tr>
					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_9" value="100"> </td> <td class='col-xs-3'> CIT 252 </td> <td class='col-xs-3'> Interative Web Systems </td> <td class='col-xs-1'> 4 </td></tr>
					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_10" value="100"> </td> <td class='col-xs-3'> CIT 280 </td> <td class='col-xs-3'> Sophomore Project </td> <td class='col-xs-1'> 2 </td></tr>
					</table>
					
					<h4>Required Professional Subjects</h4>
					<table class='table table-hover table-responsive table-bordered'><tr><th> </th><th>Course ID</th><th>Course Name</th><th>Credits</th></tr>
					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_11" value="100"> </td> <td class='col-xs-3'> CIT 248 </td> <td class='col-xs-3'> Computer Systems </td> <td class='col-xs-1'> 4</td></tr>
					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_12" value="100"> </td> <td class='col-xs-3'> CIT 250 </td> <td class='col-xs-3'> Introduction to Operating Systems for System Admin. </td> <td class='col-xs-1'> 4 </td></tr>
					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_13" value="100"> </td> <td class='col-xs-3'> CIT 337 </td> <td class='col-xs-3'> Software Engineering and Practice </td> <td class='col-xs-1'> 4 </td></tr>
					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_14" value="100"> </td> <td class='col-xs-3'> CIT 345 </td> <td class='col-xs-3'> Database Design and Implementation </td> <td class='col-xs-1'> 4 </td></tr>
					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_15" value="100"> </td> <td class='col-xs-3'> CIT 350 </td> <td class='col-xs-3'> Human Computer Interation </td> <td class='col-xs-1'> 4 </td></tr>
					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_16" value="100"> </td> <td class='col-xs-3'> CIT 352 </td> <td class='col-xs-3'> Systems Analysis </td> <td class='col-xs-1'> 4 </td></tr>
					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_17" value="100"> </td> <td class='col-xs-3'> CIT 448 </td> <td class='col-xs-3'> Information Security Practice </td> <td class='col-xs-1'> 4 </td></tr>
					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_18" value="100"> </td> <td class='col-xs-3'> CIT 480 </td> <td class='col-xs-3'> Senior Capstone Project </td> <td class='col-xs-1'> 4 </td></tr>
					</table>
					
					<h4>System Administration Track</h4>
					<table class='table table-hover table-responsive table-bordered'><tr><th> </th><th>Course ID</th><th>Course Name</th><th>Credits</th></tr>
					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_19" value="100"> </td> <td class='col-xs-3'> CIT 348 </td> <td class='col-xs-3'> System Adminstration </td> <td class='col-xs-1'> 4 </td></tr>
					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_20" value="100"> </td> <td class='col-xs-3'> CIT 349 </td> <td class='col-xs-3'> Advanced System Administration </td> <td class='col-xs-1'> 4 </td></tr>
					</table>
					
					<h4>Course Work</h4>
					<table class='table table-hover table-responsive table-bordered'><tr><th> </th><th>Course ID</th><th>Course Name</th><th>Credits</th></tr>
					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_21" value="100"> </td> <td class='col-xs-3'> CIT 496 </td> <td class='col-xs-3'> Internship </td> <td class='col-xs-1'> 4 </td></tr>
					</table>
					
					<h4>Communications</h4>
					<table class='table table-hover table-responsive table-bordered'><tr><th> </th><th>Course ID</th><th>Course Name</th><th>Credits</th></tr>
					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_22" value="100"> </td> <td class='col-xs-3'> COM 202 </td> <td class='col-xs-3'> Group Dynamics and Communication </td> <td class='col-xs-1'> 4 </td></tr>
					<tr> <td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_23" value="100"> </td> <td class='col-xs-3'> COM 304 </td> <td class='col-xs-3'> Communication in Organizations </td> <td class='col-xs-1'> 4 </td></tr>
					</div>
					</table>
				
				
				<div class="form-group" style="margin-top:35px; margin-bottom:25px;">
					<div class="col-xs-offset-1 col-xs-12">
						 <button type="submit" class="btn btn-success" name="submission">Register</button>
						 <a class="btn btn-primary" href="login.php" role="button">Allready have an account? Login!</a>
					</div>
					</div>
			</form>
			
			<br>
			<br>
			<br>
			<br>
			<br>
			<?php } ?>
		</div>
	</div>
	
	
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  
  
  
    
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
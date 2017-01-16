<?php

$pageTitle = "Course Book | Settings";
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

output_header('settings');

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
                        <p style="display: block;">Select the new classes you have taken to reflect in your class.</p> <br><br><br><br><br><br>
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
			<form class="form-horizontal" method="post">
				<div class="form-group">
			
			
			
			
			
			
			
			<?php

    $tableHeaderInfo = "<table class='table table-hover table-responsive table-bordered'><tr><th>Course ID</th><th>Course Name</th><th>Credits</th><th> </th></tr>";
	
	
	
    echo"<h2>CIT Course Requirements <hr></h2>";
    echo"<h2><small>Math & Science</small></h2>";
    
	
	
	echo "$tableHeaderInfo";
	
	
    	$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_1
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_1" value="100">
    	<?php
    	echo "</tr>";
    	
    	}
    	
    	$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_2
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_2" value="100">
    	<?php
    	echo "</tr>";
    	
    	}
    	
    	$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_3
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_3" value="100">
    	<?php
    	echo "</tr>";
    	
    	}
    	
    	$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_4
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_4" value="100">
    	<?php
    	echo "</tr>";
    	
    	}
	
	
	echo "</table>";	
	
	
	echo"<h2><small>Information Technology Core</small></h2>";
    
	echo "$tableHeaderInfo";
	
	
	$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_5
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_5" value="100">
    	<?php
    	echo "</tr>";
    	
    	}
    	
    	$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_6
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_6" value="100">
    	<?php
    	echo "</tr>";
    	
    	}
    	
    	
    	$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_7
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_7" value="100">
    	<?php
    	echo "</tr>";
    	
    	}
    	
    	$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_8
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_8" value="100">
    	<?php
    	echo "</tr>";
    	
    	}
    	
    	$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_9
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_9" value="100">
    	<?php
    	echo "</tr>";
    	
    	}
    	
    	$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_10
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_10" value="100">
    	<?php
    	echo "</tr>";
    	
    	}
	
		echo "</table>";
	

	
	echo"<h2><small>Required Professional Subjects</small></h2>";
    
    

	echo "$tableHeaderInfo";
	
	
		$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_11
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_11" value="100">
    	<?php
    	echo "</tr>";
    	
    	
    	$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_12
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_12" value="100">
    	<?php
    	echo "</tr>";
    	
    	}
    	
    	$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_13
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_13" value="100">
    	<?php
    	echo "</tr>";
    	
    	}
    	
    	$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_14
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_14" value="100">
    	<?php
    	echo "</tr>";
    	
    	}
    	
    	$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_15
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_15" value="100">
    	<?php
    	echo "</tr>";
    	
    	}
    	
    	$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_16
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_16" value="100">
    	<?php
    	echo "</tr>";
    	
    	}
    	
    	$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_17
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_17" value="100">
    	<?php
    	echo "</tr>";
    	
    	}
    	
    	$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_18
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_18" value="100">
    	<?php
    	echo "</tr>";
    	
    	}
    	
    	
    	
		}
		echo "</table>";
		
		
		
		echo"<h2><small>System Administration Track</small></h2>";
    
    

	echo "$tableHeaderInfo";
	
	
		$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_19
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_19" value="100">
    	<?php
    	echo "</tr>";
    	
	
	}
	
		$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_20
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_20" value="100">
    	<?php
    	echo "</tr>";
    	
    	}
	
	
	echo "</table>";
	
	
	
	echo"<h2><small>Course Work</small></h2>";
    
    

	echo "$tableHeaderInfo";
	
	
		$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_21
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_21" value="100">
    	<?php
    	echo "</tr>";
    	
    	
	
	}
	echo "</table>";
	
	
	
	echo"<h2><small>Management and Communications</small></h2>";
    
    

	echo "$tableHeaderInfo";
	
	
		$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_22
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_22" value="100">
    	<?php
    	echo "</tr>";
    	
    	
	
	}
	
		$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_23
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	

    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-1'>" . $row->CreditNum. "</td> ";
    	?>
    	<td class='col-xs-1'><input type="checkbox" style='width:40px; height:40px;' onClick='apply(this);' name="ClassID_23" value="100">
    	<?php
    	echo "</tr>";
    	
    	}
	
	
	
	
	echo "</table>";
	?>
	
	
	<div class="form-group" style="margin-top:35px; margin-bottom:25px;">
					<div class="col-sm-offset-3 col-sm-7">
						 <button type="submit" class="btn btn-success" name="submission">Update</button>
			
			
	</div>
	</div>
	</div>
	</form>

	<br><br><br><br><br><br>

	
  
  
    
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
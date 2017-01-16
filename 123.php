<?php

$pageTitle = "Course Book | Settings";
require( 'lib/lib.php'); 
include('lib/header.php');


?>


<?php


$con = mysql_connect("localhost","ajrombac","1234");
if (!$con){
    die("Unable to connect to the database: " . mysql_error());
}
mysql_select_db("c9",$con);


output_header('settings');


if (isset($_POST['update'])){
    $update = "UPDATE UserReg SET ClassID_1='$_POST[ClassID_1]', ClassID_2='$_POST[ClassID_2]', ClassID_3='$_POST[ClassID_3]', ClassID_4='$_POST[ClassID_4]', ClassID_5='$_POST[ClassID_5]', ClassID_6='$_POST[ClassID_6]', ClassID_7='$_POST[ClassID_7]', ClassID_8='$_POST[ClassID_8]', ClassID_9='$_POST[ClassID_9]', ClassID_10='$_POST[ClassID_10]', ClassID_11='$_POST[ClassID_11]', ClassID_12='$_POST[ClassID_12]', ClassID_13='$_POST[ClassID_13]', ClassID_14='$_POST[ClassID_14]', ClassID_15='$_POST[ClassID_15]', ClassID_16='$_POST[ClassID_16]', ClassID_17='$_POST[ClassID_17]', ClassID_18='$_POST[ClassID_18]', ClassID_19='$_POST[ClassID_19]', ClassID_20='$_POST[ClassID_20]', ClassID_21='$_POST[ClassID_21]', ClassID_22='$_POST[ClassID_22]', ClassID_23='$_POST[ClassID_23]' WHERE User_ID='$_POST[hidden]'";
    mysql_query($update, $con);
     //echo "Successfully updated"; } else { die('Invalid query: '.mysql_error());
}



//$sql = "SELECT * FROM STUDENT WHERE STU_ID=2  ";
$sql = "SELECT * FROM UserReg WHERE User_ID=" .$_SESSION['User_ID'];
$data = mysql_query($sql, $con);


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
		mysql_close($con);
	?>
	
	
	<div class="form-group" style="margin-top:35px; margin-bottom:25px;">
					<div class="col-sm-offset-3 col-sm-7">
						 <button type="submit" class="btn btn-success" name="update">Update</button>
			
			
	</div>
	</div>

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
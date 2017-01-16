<?php

$pageTitle = "Course Book | Estimator";
require('lib/lib.php');
session_start();
include('lib/header.php');

// Check the session.
if (isset($_SESSION['First_Name'])) {
	$First_Name = $_SESSION['First_Name'];
} else {
	$First_Name = false;
}

output_header('classes'); 
?>


<!-- NAVBAR
================================================== -->



<style>
table, th, td {
     border: 1px solid black;
}
.nowrap {
  white-space: nowrap ;
}
</style>


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
    <div class="container">
        
     <h4 style="float: left;" >Howdy <?php echo $First_Name; ?></h4>  
    <?php if ($USER->User_Name) { ?>
            <h4 >, here is your personalized view!</h4>
    <?php } else { ?>
            <h4> &nbsp;friend, you have to log in to see your customized estimator page..</h4>
    <?php } ?>   
        
<?php

    $tableHeaderInfo = "<table class='table table-hover table-responsive table-bordered'><tr><th>Course ID</th><th>Course Name</th><th>Instructor Name</th><th>Book Name</th><th>New</th><th>Used</th></tr>";
    $i = 0;

    echo"<h2>CIT Course Requirements <hr></h2>";
    
    
 
   //  if($row["Section_Name"] == mth_sci){ 
   
        echo"<h2><small>Math & Science</small></h2>";
    	echo "$tableHeaderInfo";
    	for ($x = 0; $x <= 4; $x++) {
        	$smt=$db->prepare("SELECT * FROM UserReg
            JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_$x
        	WHERE UserReg.User_ID = ? ");
        	$smt->execute(array($USER->User_ID));
     	
        	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
        	   
        	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-2'>" . $row->InstructorName. "</td> <td><a href='" . $row->BookLink. "'>" . $row->BookName . "</a></td> <td class='col-xs-1'>$" . money_format('%(#10n', $row->NewPrice). "</td> <td class='col-xs-1'>$" . money_format('%(#10n', $row->UsedPrice). "</td></tr>";
        	echo "</tr>";
        	
        	
        	$sum_total1 += $row->NewPrice;
            $sum_total2 += $row->UsedPrice;

        	
        	}
    	}
   //  }
 
    	echo "</table><br><br>";
	
	
	
	echo"<h2><small>Information Technology Core</small></h2>";
    
	echo "$tableHeaderInfo";
	
	for ($x = 5; $x <= 10; $x++) {
    	$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_$x
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	
    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-2'>" . $row->InstructorName. "</td> <td><a href='" . $row->BookLink. "'>" . $row->BookName . "</a></td> <td class='col-xs-1'>$" . money_format('%(#10n', $row->NewPrice). "</td> <td class='col-xs-1'>$" . money_format('%(#10n', $row->UsedPrice). "</td></tr>";
    	echo "</tr>";
    	
    	$sum_total1 += $row->NewPrice;  //This totals the prices right now
	    $sum_total2 += $row->UsedPrice;
    	
    	}
	
	}
	echo "</table><br><br>";
	echo"<h2><small>Required Professional Subjects</small></h2>";

	echo "$tableHeaderInfo";
	
	
	for ($x = 11; $x <= 18; $x++) {
    	$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_$x
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	
    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-2'>" . $row->InstructorName. "</td> <td><a href='" . $row->BookLink. "'>" . $row->BookName . "</a></td> <td class='col-xs-1'>$" . money_format('%(#10n', $row->NewPrice). "</td> <td class='col-xs-1'>$" . money_format('%(#10n', $row->UsedPrice). "</td></tr>";
    	echo "</tr>";
    	
    	$sum_total1 += $row->NewPrice;  //This totals the prices right now
	    $sum_total2 += $row->UsedPrice;
    	
    	
    	}
	
	}
	echo "</table><br><br>";
		echo"<h2><small>System Administration Track</small></h2>";

	echo "$tableHeaderInfo";
	
	for ($x = 19; $x <= 20; $x++) {
    	$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_$x
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-2'>" . $row->InstructorName. "</td> <td><a href='" . $row->BookLink. "'>" . $row->BookName . "</a></td> <td class='col-xs-1'>$" . money_format('%(#10n', $row->NewPrice). "</td> <td class='col-xs-1'>$" . money_format('%(#10n', $row->UsedPrice). "</td></tr>";
    	echo "</tr>";
    	
    	$sum_total1 += $row->NewPrice;  //This totals the prices right now
	    $sum_total2 += $row->UsedPrice;
    	
    	
    	}
	
	}
	
	echo "</table><br><br>";
	echo"<h2><small>Course Work</small></h2>";

	echo "$tableHeaderInfo";
	
	
	for ($x = 21; $x <= 21; $x++) {
    	$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_$x
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-2'>" . $row->InstructorName. "</td> <td><a href='" . $row->BookLink. "'>" . $row->BookName . "</a></td> <td class='col-xs-1'>$" . money_format('%(#10n', $row->NewPrice). "</td> <td class='col-xs-1'>$" . money_format('%(#10n', $row->UsedPrice). "</td></tr>";
    	echo "</tr>";
    	
    	
    	$sum_total1 += $row->NewPrice;  //This totals the prices right now
	    $sum_total2 += $row->UsedPrice;
    	
    	
    	}
	
	}
	echo "</table><br><br>";
	echo"<h2><small>Management and Communications</small></h2>";
    
    

	echo "$tableHeaderInfo";
	
	
	for ($x = 22; $x <= 23; $x++) {
    	$smt=$db->prepare("SELECT * FROM UserReg
        JOIN BookInfo ON BookInfo.Class_ID = UserReg.ClassID_$x
    	WHERE UserReg.User_ID = ? ");
    	$smt->execute(array($USER->User_ID));
    	
    	
    	
    	while ($row = $smt->fetch(PDO::FETCH_OBJ)) {
    	
    	
    	echo "<tr><td class='col-xs-1'>" . $row->CourseNum. "</td><td class='col-xs-3'>" . $row->CourseName. "</td><td class='col-xs-2'>" . $row->InstructorName. "</td> <td><a href='" . $row->BookLink. "'>" . $row->BookName . "</a></td> <td class='col-xs-1'>$" . money_format('%(#10n', $row->NewPrice). "</td> <td class='col-xs-1'>$" . money_format('%(#10n', $row->UsedPrice). "</td></tr>";
    	echo "</tr>";
    	
    	$sum_total1 += $row->NewPrice;  //This totals the prices right now
	    $sum_total2 += $row->UsedPrice;
    	
    	}
	
	}
	echo "</table><br><br>";
	?>
	
	
	
<br><h2>Book Price Total<hr></h2>

<div class="panel panel-default">
    <div class="panel-heading">New Books: Estimated based on previous semesters</div>
    <div class="panel-body">
        Total Amount Left to Pay: $<?= money_format('%(#10n',$sum_total1) ?> <br>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">Used Books: Estimated based on previous semesters</div>
    <div class="panel-body">
        Total Amount Left to Pay: $<?= money_format('%(#10n',$sum_total2); ?>; you will save: $<?= money_format('%(#10n',$sum_total1 - $sum_total2) ?>
    </div>
</div>
<div style="margin-bottom: 2cm;">

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
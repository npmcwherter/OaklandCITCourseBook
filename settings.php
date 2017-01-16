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
 
 
 // Get any Posted data.
if (isset($_REQUEST['User_ID'])) {
	$_SESSION['User_ID'] = $_REQUEST['User_ID'];
}
if (isset($_REQUEST['User_Name'])) {
	$_SESSION['User_Name'] = $_REQUEST['User_Name'];
}
if (isset($_REQUEST['Password'])) {
	$_SESSION['Password'] = $_REQUEST['Password'];
}
if (isset($_REQUEST['First_Name'])) {
	$_SESSION['First_Name'] = $_REQUEST['First_Name'];
}
if (isset($_REQUEST['Last_Name'])) {
	$_SESSION['Last_Name'] = $_REQUEST['Last_Name'];
}
if (isset($_REQUEST['Email'])) {
	$_SESSION['Email'] = $_REQUEST['Email'];
}
if (isset($_REQUEST['ClassID_1'])) {
	$_SESSION['ClassID_1'] = $_REQUEST['ClassID_1'];
}
if (isset($_REQUEST['ClassID_2'])) {
	$_SESSION['ClassID_2'] = $_REQUEST['ClassID_2'];
}
if (isset($_REQUEST['ClassID_3'])) {
	$_SESSION['ClassID_3'] = $_REQUEST['ClassID_3'];
}
if (isset($_REQUEST['ClassID_4'])) {
	$_SESSION['ClassID_4'] = $_REQUEST['ClassID_4'];
}
if (isset($_REQUEST['ClassID_5'])) {
	$_SESSION['ClassID_5'] = $_REQUEST['ClassID_5'];
}
if (isset($_REQUEST['ClassID_6'])) {
	$_SESSION['ClassID_6'] = $_REQUEST['ClassID_6'];
}
if (isset($_REQUEST['ClassID_7'])) {
	$_SESSION['ClassID_7'] = $_REQUEST['ClassID_7'];
}
if (isset($_REQUEST['ClassID_8'])) {
	$_SESSION['ClassID_8'] = $_REQUEST['ClassID_8'];
}
if (isset($_REQUEST['ClassID_9'])) {
	$_SESSION['ClassID_9'] = $_REQUEST['ClassID_9'];
}
if (isset($_REQUEST['ClassID_10'])) {
	$_SESSION['ClassID_10'] = $_REQUEST['ClassID_10'];
}
if (isset($_REQUEST['ClassID_11'])) {
	$_SESSION['ClassID_11'] = $_REQUEST['ClassID_11'];
}
if (isset($_REQUEST['ClassID_12'])) {
	$_SESSION['ClassID_12'] = $_REQUEST['ClassID_12'];
}
if (isset($_REQUEST['ClassID_13'])) {
	$_SESSION['ClassID_13'] = $_REQUEST['ClassID_13'];
}
if (isset($_REQUEST['ClassID_14'])) {
	$_SESSION['ClassID_14'] = $_REQUEST['ClassID_14'];
}
if (isset($_REQUEST['ClassID_15'])) {
	$_SESSION['ClassID_15'] = $_REQUEST['ClassID_15'];
}
if (isset($_REQUEST['ClassID_16'])) {
	$_SESSION['ClassID_16'] = $_REQUEST['ClassID_16'];
}
if (isset($_REQUEST['ClassID_17'])) {
	$_SESSION['ClassID_17'] = $_REQUEST['ClassID_17'];
}
if (isset($_REQUEST['ClassID_18'])) {
	$_SESSION['ClassID_18'] = $_REQUEST['ClassID_18'];
}
if (isset($_REQUEST['ClassID_19'])) {
	$_SESSION['ClassID_19'] = $_REQUEST['ClassID_19'];
}
if (isset($_REQUEST['ClassID_20'])) {
	$_SESSION['ClassID_20'] = $_REQUEST['ClassID_20'];
}
if (isset($_REQUEST['ClassID_21'])) {
	$_SESSION['ClassID_21'] = $_REQUEST['ClassID_21'];
}
if (isset($_REQUEST['ClassID_22'])) {
	$_SESSION['ClassID_22'] = $_REQUEST['ClassID_22'];
}
if (isset($_REQUEST['ClassID_23'])) {
	$_SESSION['ClassID_23'] = $_REQUEST['ClassID_23'];
}


// Check the session.
if (isset($_SESSION['User_ID'])) {
	$User_ID = $_SESSION['User_ID'];
} else {
	$User_ID = false;
}
if (isset($_SESSION['User_Name'])) {
	$User_Name = $_SESSION['User_Name'];
} else {
	$User_Name = false;
}
if (isset($_SESSION['Password'])) {
	$Password = $_SESSION['Password'];
} else {
	$Password = false;
}
if (isset($_SESSION['First_Name'])) {
	$First_Name = $_SESSION['First_Name'];
} else {
	$First_Name = false;
}
if (isset($_SESSION['Last_Name'])) {
	$Last_Name = $_SESSION['Last_Name'];
} else {
	$Last_Name = false;
}
if (isset($_SESSION['Email'])) {
	$Email = $_SESSION['Email'];
} else {
	$Email = false;
}
if (isset($_SESSION['ClassID_1'])) {
	$ClassID_1 = $_SESSION['ClassID_1'];
} else {
	$ClassID_1 = false;
}
if (isset($_SESSION['ClassID_2'])) {
	$ClassID_2 = $_SESSION['ClassID_2'];
} else {
	$ClassID_2 = false;
}
if (isset($_SESSION['ClassID_3'])) {
	$ClassID_3 = $_SESSION['ClassID_3'];
} else {
	$ClassID_3 = false;
}
if (isset($_SESSION['ClassID_4'])) {
	$ClassID_4 = $_SESSION['ClassID_4'];
} else {
	$ClassID_4 = false;
}
if (isset($_SESSION['ClassID_5'])) {
	$ClassID_5 = $_SESSION['ClassID_5'];
} else {
	$ClassID_5 = false;
}
if (isset($_SESSION['ClassID_6'])) {
	$ClassID_6 = $_SESSION['ClassID_6'];
} else {
	$ClassID_6 = false;
}
if (isset($_SESSION['ClassID_7'])) {
	$ClassID_7 = $_SESSION['ClassID_7'];
} else {
	$ClassID_7 = false;
}
if (isset($_SESSION['ClassID_8'])) {
	$ClassID_8 = $_SESSION['ClassID_8'];
} else {
	$ClassID_8 = false;
}
if (isset($_SESSION['ClassID_9'])) {
	$ClassID_9 = $_SESSION['ClassID_9'];
} else {
	$ClassID_9 = false;
}
if (isset($_SESSION['ClassID_10'])) {
	$ClassID_10 = $_SESSION['ClassID_10'];
} else {
	$ClassID_10 = false;
}
if (isset($_SESSION['ClassID_11'])) {
	$ClassID_11 = $_SESSION['ClassID_11'];
} else {
	$ClassID_11 = false;
}
if (isset($_SESSION['ClassID_12'])) {
	$ClassID_12 = $_SESSION['ClassID_12'];
} else {
	$ClassID_12 = false;
}
if (isset($_SESSION['ClassID_13'])) {
	$ClassID_13 = $_SESSION['ClassID_13'];
} else {
	$ClassID_13 = false;
}
if (isset($_SESSION['ClassID_14'])) {
	$ClassID_14 = $_SESSION['ClassID_14'];
} else {
	$ClassID_14 = false;
}
if (isset($_SESSION['ClassID_15'])) {
	$ClassID_15 = $_SESSION['ClassID_15'];
} else {
	$ClassID_15 = false;
}
if (isset($_SESSION['ClassID_16'])) {
	$ClassID_16 = $_SESSION['ClassID_16'];
} else {
	$ClassID_16 = false;
}
if (isset($_SESSION['ClassID_17'])) {
	$ClassID_17 = $_SESSION['ClassID_17'];
} else {
	$ClassID_17 = false;
}
if (isset($_SESSION['ClassID_18'])) {
	$ClassID_18 = $_SESSION['ClassID_18'];
} else {
	$ClassID_18 = false;
}
if (isset($_SESSION['ClassID_19'])) {
	$ClassID_19 = $_SESSION['ClassID_19'];
} else {
	$ClassID_19 = false;
}
if (isset($_SESSION['ClassID_20'])) {
	$ClassID_20 = $_SESSION['ClassID_20'];
} else {
	$ClassID_20 = false;
}
if (isset($_SESSION['ClassID_21'])) {
	$ClassID_21 = $_SESSION['ClassID_21'];
} else {
	$ClassID_21 = false;
}
if (isset($_SESSION['ClassID_22'])) {
	$ClassID_22 = $_SESSION['ClassID_22'];
} else {
	$ClassID_22 = false;
}
if (isset($_SESSION['ClassID_23'])) {
	$ClassID_ = $_SESSION['ClassID_23'];
} else {
	$ClassID_ = false;
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
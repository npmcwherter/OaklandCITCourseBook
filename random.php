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


echo "<table border=1>
<tr>
<th>Email</th>
<th>Address</th>
<th>Phone Number</th>
<th> </th>
<th> </th></tr>";

while($record = mysql_fetch_array($data)) {
    echo "<form action=settings.php method=post>";
    echo "<tr>";
    echo "<td>" . "<input type=text name=ClassID_1 value=" . $record['ClassID_1'] . " </td>";
    echo "<td>" . "<input type=text name=ClassID_2 value=" . $record['ClassID_2'] . " </td>";
    echo "<td>" . "<input type=text name=ClassID_3 value=" . $record['ClassID_3'] . " </td>";
    echo "<td>" . "<input type=hidden name=hidden value=" . $record['User_ID'] . "</td>";
    echo "<td>" . "<input onclick='alert(\"Successfully updated\");' type=submit name=update value=update" . " </td>";
    //if($update) { echo "Successfully updated"; } else { die('Invalid query: '.mysql_error());
    echo "</form>";
}

echo "</table>";
mysql_close($con);

?>



</body>
</html>
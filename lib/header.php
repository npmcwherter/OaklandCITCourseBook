<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title><?php
    if (isset($pageTitle)) {
    echo $pageTitle;
    } else {
    echo "OU CIT Course Book";   //default title unless stated in each page
    }
    ?></title>
    
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
    
    <link rel="icon" href="assets/favicon.png" type="image/gif" sizes="16x16">
</head>

<body>
    <div class="navbar-wrapper" >
        <div class="container">
            <div class="navbar navbar-inverse navbar-static-top" role="navigation" >     
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><p><font size="4" face="Rockwell" color="cc9900">OU CIT Course Book</font></p></a>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav" style="display: block;">
                            <li <?=( $pageid=='home' ) ? 'class="active"' : '' ?> style="display: block;">
                                <a href="index.php">Home</a>
                              
                            </li>
                            <li <?=( $pageid=='about' ) ? 'class="active"' : '' ?>>
                                <a href="aboutus.php">About</a>
                            </li>
                            <?php if ($USER->User_Name) { ?>
                            <li <?=( $pageid=='contact' ) ? 'class="active"' : '' ?>>   
                                <a  href="contact.php">Contact </a>
                            </li>
                            <?php } ?>


                            <?php if ($USER->User_Name) { ?>
                            <li <?=( $pageid=='classes' ) ? 'class="active"' : '' ?>>
                                <a href="classes.php">Estimator</a>
                            </li>
                            <?php } ?>
                        </ul>
                        <ul class="nav navbar-nav navbar-right" style="margin-right:30px;">
                            
                         
                            <?php if ($USER->User_Name) { ?>
                            <li> 
                                <a style="cursor:default!important; color:#777!important" href="#">
                                    <span class="glyphicon glyphicon-user"></span> Hi <?= $USER->First_Name ? $USER->First_Name : "you" ?>!</a></li> 
                            
                                <li <?= ($pageid == 'settings') ? 'class="active"' : '' ?>><a href="settings.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                                    
                                <li>
                                <a href="index.php?logout=1&url=index.php">
                                    <span class="glyphicon glyphicon-log-out"></span> Logout</a>
                            </li>
                            <?php } else { ?> 
                        
                            <li <?=( $pageid=='login' ) ? 'class="active"' : '' ?>><a href="login.php"> Login</a></li>
                            <li <?=( $pageid=='register' ) ? 'class="active"' : '' ?>>
                                <a href="register.php">
                                    <span class="glyphicon glyphicon-check"></span> Register</a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
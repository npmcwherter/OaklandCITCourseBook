<?php 

$pageTitle = "Course Book | About";
require( 'lib/lib.php'); 
include('lib/header.php');

output_header('about'); 

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
    <div class="container">
        <div class="row">
            <div class="container marketing">
                <div class="panel " style="border-color: #cc9900;">
                    <div class="panel-heading">
                        <h3>Welcome!</h3>
                    </div>
                    </a>
                    <div class="panel-body">
                        <p class="text">Welcome to our website! We are currently looking to help those who are unsure of what classes to take if they are IT majors at Oakland Univsersity. By using our tools students will be able to feel on track towards their degree
                            in a timely manor. If additional help is needed contact the acedemic advising office!
                        </p>
                        <br>
                        <p class="text">
                            <h4>Group Members:</h4>
                            <p>Luke LaFountain: Fourth Year IT Student, Project Designer. I have taken Interactive Web Systems at Oakland University and assisted in design of the famous Android application Debate Around. I dabble in combining the technical
                                side of IT along with the abstract side of design, visual arts, and music. </p>
                            <br>
                            <p>Nick McWherter: I am currently a junior CIT student on pace to graduate after the Fall 2016 semester. I used to be the web developer/SEO for a small company of The Insulation Man Inc. I worked with wordpress and customized
                                a template to the needs of the company. The only other programming experience I have is through the CIT program. CIT252 provided information on PHP/CSS/HTML//SQL/JavaScript and some bootstrap.</p>
                            <br>
                            <p>Alex Rombach: I am currently a thrid year student at Oakland University, and I am pursuing a degree in Computer Information Technology. I have taken Interactive Web Systems (CIT252) which has covered inforation on html, css,
                                bootstrap, and a small amount of PHP and Sql.</p>
                            <br>
                            <p>Nick Shouse: I am a third year IT student at Oakland University. I have taken several different courses which cover the basics of what this project entails. I enjoy working with HTML as it is very simple but have good experience
                                working with PHP and Java.</p>
                            <br>
                            <p>Fabian Buturuga: I am a fourth year part time IT student at Oakland Univerisity, expected to graduate at the end of this year. I have not taken any programming classes for a couple years but I am quite familiar with HTML/PHP/CSS.
                            </p>
                        </p>
                        <br>
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
<?php
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
    
?>

<!DOCTYPE html>
<html lang="en">
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>INTRA-PERSONAL COMMUNICATION SYSTEM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="favicon.png"> </link>
    <!-- Js -->
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')

    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/min/waypoints.min.js"></script>
    <script src="js/jquery.counterup.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>
    <script src="js/load.js"></script>

    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script src="js/google-map-init.js"></script>


    <script src="js/main.js"></script>


</head>

<body>
    <!--Scrollable JS-->
    <script type="text/javascript">
        function page_scroll() {
            $("html, body").animate({
                scrollTop: $(document).height()
            }, 11000);
        }

        function stop_scroll() {
            $("html, body").stop();
        }

    </script>


    <!-- Header Start -->
    <section class="navigation">
        <div class="nav-container">
            <div class="brand">
                <a href="#" style="justify-content:flex-start;">INTRA-PERSONAL</a>
            </div>
            <nav>
                <div class="nav-mobile" id="tag"><a id="nav-toggle" href="#!"><span></span></a></div>
                <ul class="nav-list">
                    <li><a href="1st.html">Home</a></li>
                    <li><a href="#" onclick="page_scroll();">Take a Tour</a></li>
                    
                    <li><a href="../php-chat-app-main/signup.php">Message</a></li>
                    
                    <li><a href="#!">Profile</a>
                        <ul class="nav-dropdown">
                            <li><a href="profile.html">My Profile</a></li>
                            <li><a href="">Edit Profile</a></li>
                            <li><a href="profilecard.html">Profile Card</a></li>
                            <!-- <li><a href="">Settings</a></li> -->
                            <li><a href="logins.php">LogOut</a></li>
                            
                           
                        </ul>
                    <!-- </li>
                    <li><a href="logins.html">Logout</a></li> -->
                    
                    <li><a href="#!">Faculty</a>
                        <ul class="nav-dropdown">
                            <!-- <li><a href="webtech.html">Web technologies</a></li> -->
                            <li><a href="cloud.html">Cloud computing</a></li>
                            <!-- <li><a href="">Mathematics</a></li> -->
                            <li><a href="crypto.html">Cryptography</a></li>
                            <li><a href="cn.html">Computer Network</a></li>
                            <li><a href="ml.html">Machine learning</a></li>
                            <li><a href="ai.html">Artificial intelligence</a></li>
                            <li><a href="ds.html">Software Engineering</a></li>
                           
                        </ul>
                    </li>
                    <li><a href="https://pgds.000webhostapp.com/">Video Call</a></li>
                    <!-- <li><a href="contact.html">Contact</a></li> -->
                    <li><a href="logins.php">Logout</a></li>
                </ul>
        </div>
        </nav>
    </section>


    <!-- header close -->

    <!-- Slider Start -->
    <section id="slider">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-2">
                    <div class="block">
                        <h1 class="animated fadeInUp" style="color:black" style="font-size:100" >INTRA-PERSONAL, <br> is a communication system between student and teacher </h1>
                        <p class="animated fadeInUp" style="color:black">We love INTRA and thus we made INTRA-PERSONAL </br> to deliver the best experience possible of communication</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Wrapper Start -->
    <section id="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <div class="block">
                        <div class="section-title">
                            <h2><a href="about2.html">About us</a></h2>
                            <p style="color:black">We the Intra-Personal team, made this application as a part of our Mini Project and are glad to provide this service for you.</p>
                        </div>
                        <div class="section-title">
                            <h2> Developers </h2>
                            <p><br> Aruna Kumari Patnana <br> Amitha Johari <br> Vijay Kumar </p>
                        </div>
                    </div>
                </div>
                <!-- .col-md-7 close -->
                <div class="col-md-5 col-sm-12">
                    <div class="block">
                        <img src="img/wrapper-img.gif" alt="Img">
                    </div>
                </div>
                <!-- .col-md-5 close -->
            </div>
        </div>
    </section>

    <section id="feature">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7">
                    <h2>WE BELIEVE IN FUN & ADVENTURE</h2>
                    <p>Intra-Personal main goal is to provide the best experience to students to communicate to each other :)</p>
                    <p>Students can communicate and share doubts with each other and with faculty </p>
                    <p></p>
                    <a href="box.php" class="btn btn-view-works"></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Start -->
    <section id="service">
        <div class="container">
            <div class="row ">
                <div class="col-sm-6 col-md-3">
                    <div class="service-item">
                        <i class="icon ion-coffee"></i>
                        <h4>What keeps us awake at Night?</h4>
                        <p>A cup of coffee & some bugs :P</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="service-item">
                        <i class="ion-compass"></i>
                        <h4>Lost Somewhere?</h4>
                        <p>Click <a href="index.php">Here </a> to find yourself :)</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="service-item">
                        <i class="ion-image"></i>
                        <h4>App Design</h4>
                        <p>Feel free to contact us and view our <a href="contact.html">Source code</a> to develop a similar Project. </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="service-item">
                        <i class="ion-bug"></i>
                        <h4>Report Bugs</h4>
                        <p>Be a Bug Hunter by visiting <a href="about2.html">here</a> </p>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-sm-6 col-md-3">
                    <div class="service-item">
                        <i class="ion-headphone"></i>
                        <h4>Design</h4>
                        <p>Intra-Personal was created by keeping Creativity and Simplicity in mind</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="service-item">
                        <i class="ion-leaf"></i>
                        <h4>Development</h4>
                        <p>This project is still under constant developement, <br> feel free to contact us and suggest <a href="about2.html">feedback</a> :)</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="service-item">
                        <i class="ion-planet"></i>
                        <h4>Availabe all around the world</h4>
                        <p>This website is live and free to use!</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="service-item">
                        <i class="ion-earth"></i>
                        <h4>Still to add</h4>
                        <p>If you're up with something cool, do <a href="contact.html">tell</a> us!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action Start -->
    <section id="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <h2>We design delightful digital experiences.</h2>
                        <p>Intra-personal main aim is to provide the best experience to everyone who visits our site but only to RGUKT_SKLM students to communicate.</p>
                        <a class="btn btn-default btn-call-to-action" href="logins.php">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content Start -->
    <section id="testimonial">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    <h2>Fun Facts About Us</h2><br>
                    <p>Far far away, behind the world mountains, We live and code to provide you the best user Experience!</p>
                </div>
            </div>
        </div>
    </section>

    <!-- footer Start -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-manu">
                        <ul>
                            <li><a href="about2.html">About Us</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                            <li><a href="#" onclick="stop_scroll();">How it works</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Terms</a></li>
                        </ul>
                    </div>
                    <p>Copyright &copy; Crafted by <a href="about2.html">Team IPCS</a>.</p>
                </div>
            </div>
        </div>
    </footer>


    <script>
        document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')

    </script>


</body>

</html>
<?php
}else {
    header("Location: index.php");
    exit();

}
?>

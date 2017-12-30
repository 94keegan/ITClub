<!DOCTYPE html>
<html>
<head>
	<title>IT Club</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="SHORTCUT ICON" href="images/llc_favicon.ico" type="image/x-icon">
	
    <!-- Styles -->
    <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/compiled/bootstrap-overrides.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/compiled/theme.css" />

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />

    <link rel="stylesheet" type="text/css" href="css/socialsprites.css">

    <link rel="stylesheet" href="css/compiled/index.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/compiled/about.css" type="text/css" media="screen" />    
    <link rel="stylesheet" type="text/css" href="css/lib/animate.css" media="screen, projection" />    
    <link rel="stylesheet" href="css/lib/flexslider.css" type="text/css" media="screen" />

    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body class="pull_top">

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand"><img src="images/LLC-Logo.png"></a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse" role="navigation">
                <ul class="nav navbar-nav navbar-right" style="padding-top:13px;">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="about-us.php">About Us</a></li>
					<li><a href="awards.php">Awards</a></li>
                    <li><a href="community-service.php">Community Service</a></li>
					<li><a href="fun-activities.php">Fun Activities</a></li>
					<li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </div>

    <section id="feature_slider" class="lol" style="height: 650px;">
        <!-- 
            Each slide is composed by <img> and .info
            - .info's position is customized with css in index.css
            - each <img> parallax effect is declared by the following params inside its class:
            
            example: class="asset left-472 sp600 t120 z3"
            left-472 means left: -472px from the center
            sp600 is speed transition
            t120 is top to 120px
            z3 is z-index to 3
            Note: Maintain this order of params

            For the backgrounds, you can combine from the bgs folder :D
        -->
        <article class="slide" id="showcasing" style="background: url('img/slides/scene1/group1.jpg') repeat-x top center;height: 650px;">
            <div class="info">
                <h2><br>Club I.T.</h2><span style="color:white;"><h3>Lake Land College</h3></span>
            </div>
            <div style="margin-bottom: 100px;"></div>
        </article>
        <article class="slide" id="ideas" style="background: url('img/slides/scene2/LibrarySign.jpg') repeat-x top center;height: 650px;">
            <div class="info">
                <h2><br>We have a great campus!</h2>
            </div>
        </article>
        <!-- originally tour -->
		<article class="slide" id="ideas" style="background: url('img/slides/scene3/funactivities3.jpg') repeat-x top center;height: 650px;">
            <div class="info">
                <h2>Fun times at Villa Pizza!</h2>
            </div>
        </article>
        <!-- originally responsive -->
		<!-- Add HD pictures here
        <article class="slide" id="ideas" style="background: url('img/slides/scene4/images.jpg') repeat-x top center;height: 650px;">
            <div class="info">
                <h2>
                    Jump into our world of creativity!
                </h2>                
            </div>
        </article>
		-->
    </section>

    <div id="features">
        <div class="container">
            <div class="section_header">
                <h3><br><br>Club IT - Lake Land College</h3>
            </div> 
            <div class="row feature">
                <div class="col-sm-6 pic-right">
                    <img src="images/group1.jpg" class="pull-right img-responsive" />
                </div>
                <div class="col-sm-6 info info-left">
                    <h3>
                        <img src="images/llc-favicon.png" />
                        Club IT - Lake Land College
                    </h3>
                    <p>
                        The activities of Club IT are designed to meet the many interests of the members.
						Club IT is open to everyone, but is primarily composed of students from the following programs:
                    </p>
					<ul>
						<li>Network Administration</li>
						<li>Game Development</li>
						<li>Programming</li>
						<li>Desktop Publishing</li>
						<li>Web Design</li>
						<li>Digital Media</li>
					</ul>
                </div>                
            </div>
        </div>
    </div>
    
    <!-- News Section -->
    <div id="process">
        <div class="container">
            <div class="section_header">
                <h3>News</h3>
            </div>
            <div class="row services_circles">
                <div class="col-sm-4 description">
                    <div class="text active">
                        <h4>Events</h4>
                        <p>
                            Help out the club by signing up to participate in a club event! Sign ups are in Web Hall 116.
                            <ul>
								<li>Events will start again in the fall!</li>
                            </ul>
                        </p>
                    </div>
                    <div class="text">
                        <h4>Meetings</h4>
                        <p>
                            Club IT meets every 2nd and 4th Wednesday in Web Hall 116 at 11:00 AM.<br><br>
                            The next meeting is: <b>TBA</b>
                        </p>
                    </div>
                    <div class="text">
                        <h4>Activities</h4>
                        <p>
                            Fun Friday every Friday! During Fun Friday we get together to have fun either playing video games, work on projects, or playing disc golf at Lake Land's course.
                        </p>
                    </div>
                </div>

                <div class="col-sm-7 areas">
                    <div class="circle active">
                        <img src="img/plan.png" />
                        <span>Events</span>
                    </div>
                    <div class="circle">
                        <img src="img/develop.png" />
                        <span>Meetings</span>
                    </div>
                    <div class="circle last_circle">
                        <img src="img/design.png" />
                        <span>Activities</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<!-- starts footer -->
<?php include("footer.php")?>

<!-- Scripts -->
<script src='http://code.jquery.com/jquery-latest.js'></script>
<script src='js/bootstrap.min.js'></script>
<script src='js/theme.js'></script>
<script type='text/javascript' src='js/index-slider.js'></script>"
</body>
</html>
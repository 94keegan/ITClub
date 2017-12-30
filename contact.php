<?php
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])){
        $name = strip_tags($_POST['name']);
        $email = strip_tags($_POST['email']);
        $message = strip_tags($_POST['message']);

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        $headers = 'From: clubit.lakelandbiz.info' . "\r\n" .
   'X-Mailer: PHP/' . phpversion();

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){ $error = "Email is invalid!";}
        else{
            if(mail("jmunger@lakeland.cc.il.us", "Contact Us: ", 
trim("This message was automatically generated via the Club IT website at http://clubit.lakelandbiz.info/

Name: $name

Contact Email: $email

Message: $message"), $headers)){
                $success = true;
            }

        }
    }
    else if((isset($_POST['name']) || isset($_POST['email']) || isset($_POST['message'])) && (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['message']))){
        $error = "Please fill out all fields!";
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>IT Club || Contact Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
<!-- Styles -->
<link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="css/compiled/bootstrap-overrides.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/compiled/theme.css" />
    
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css' />

<link rel="stylesheet" href="css/compiled/contact.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/lib/animate.css" media="screen, projection" />

<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body>

    <div class="navbar navbar-inverse navbar-static-top" role="navigation">
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
                <li><a href="index.php">Home</a></li>
                <li><a href="about-us.php">About Us</a></li>
				<li><a href="awards.php">Awards</a></li>
                <li><a href="community-service.php">Community Service</a></li>
				<li><a href="fun-activities.php">Fun Activities</a></li>
				<li class="active"><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>

<div id="contact">
    <div class="container">
        <div class="section_header">
            <h3>Send Us A Note!</h3>
        </div>
        <div class="row contact">
            <p>
                What you think is important to us, and we've got you covered 110%. Our team will review your message and reply back as soon as possible.</p>
            <?php if(isset($error)){ ?><div class="alert alert-danger"><?php  echo $error; ?></div> <?php }
            else if(isset($success)){ ?><div class="alert alert-success">Email has been sent!</div><?php } ?>
            <form action="" method="post">
                <div class="row form">
                    <div class="col-sm-6 row-col">
                        <div class="box">
                            <input class="name form-control" name="name" type="text" placeholder="Name">
                            <input class="mail form-control" name="email" type="text" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="box">
                            <textarea name="message" style="resize:none;" placeholder="Type a message here..." class="form-control"></textarea>
                        </div>
                    </div>
                </div>

                <div class="row submit">
                    <div class="col-md-3 right">
                        <br/>
                        <input type="submit" value="Send your message">
                    </div>
                </div>
            </form>
        </div>
    </div>

<!-- starts footer -->
<?php include("footer.php")?>

<!-- Scripts -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/theme.js"></script>
<script type="text/javascript" src="js/flexslider.js"></script>
</body>
</html>
</body>
</html>
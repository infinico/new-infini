<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
       
        <script src="assets/js/modernizr.js"></script>
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">

        <title><?php echo $title ?></title>
    </head>
    <body>
        <div id="outer-wrap">
            <div id="inner-wrap">
                <header id="top" role="banner">
                    <div class="block">
                        <div class="block-title">
                            <a href="index.php"><img src="images/infini-logo-white-transparent.svg" width="100" alt="Infini Logo"/></a>
                        </div>
                        <a class="nav-btn" id="nav-open-btn" href="#nav"></a>
                    </div>
                </header>

                <nav id="nav" role="navigation">
                    <div class="block">
                        <ul>
                            <li><a id = "navHome" href="index.php">Home</a></li>
                            <li><a id = "navClients" href="clients.php">Our Clients</a></li>
                            <li><a id = "navAbout" href="about.php">About Us</a></li>
                            <li><a id = "navJob" href="jobs.php">Jobs</a></li>
                            <li><a id = "navContact" href="contact.php">Contact</a></li>
                        </ul>

                        <a class="close-btn" id="nav-close-btn" href="#top"></a>
                    </div>
                </nav>
                
                <img class="images" src="images/splash-1-transparent-crop.jpg" alt="Home Banner" />
                
                <div id="main" role="main">
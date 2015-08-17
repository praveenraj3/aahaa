<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Technology - aahaa stores - Office Products Super Store</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include 'include/links.html'; ?>
    <script src="js/modernizr.custom.js"></script>
    <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.1.0.min.js"></script>
        <![endif]-->
</head>

<body data-spy="scroll" data-target="#pagenav">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    
        
           <!--navigation-->
	<?php include 'include/header.html'; ?>
          <div class="container-fluid text-center hidden-xs" id="pagenav">
                <ul class="nav" >
                   <span class="page">Technology - </span>
                    <li><a href="#portal" class="scroll">Portal</a></li>
                    <li><a href="#analytics" class="scroll">Analytics</a></li>
                    <li><a href="#control" class="scroll">Control</a></li>
                    <li><a href="#contact" class="scroll">Contact</a></li>
                </ul>
            </div>
        <?php echo "</div>"; ?>

    <!-- home section-->

    <div class="container-fluid bg-img part" style="background: #fbb03b !important; color: #fff">
        <div class="welcomeWrap">
            <div class="welcomeText">
                <h1 class="wow fadeInUp"><span class="big">Technology<span class="red">.</span></span></h1>
                <span class="tag wow fadeInUp" data-wow-delay="0.2s">Portal <span class="red"> | </span> Analytics <span class="red"> | </span> Controls</span>
            </div>
        </div>
        <div class="scrollWrap">
            <a href="#portal" class="scroll">
                <img src="img/scroll-white.png" id="scroll-icon" class="wow bounceInUp">
            </a>
        </div>

    </div>
    </div>
    <!--home end-->

   <!--       grid one    -->
       <div class="container-fluid section layoutOne" id="portal">
            <div class="container">
                <h2 class="wow fadeInUp" >Ordering Portal<span class="red">.</span></h2>          
                <div class="contextWrap wow fadeInUp" >
                    <p>From the outset, we were determined to build aahaa's ordering portal as beautiful, cloud-based and feature-rich that can scale up to any number of users and is lean enough to operate in low bandwidth remote locations.</p>
                    <img src="img/technology.png" alt="aahaa ordering portal" class="image img-responsive">
                </div>

            </div>
        </div> <!--grid one end-->
        
          <!--grid four-->
          
        <div class="container-fluid section layoutOne benefit" id="benefits">
            <div class="container">
                    <div class="row">
                        <div class="col-sm-2 col-sm-offset-1 col-xs-6 wow fadeInUp"><img src="img/icon/sign-on.png" alt=""><br>Single Sign-On</div>
                        <div class="col-sm-2 col-xs-6 wow fadeInUp" data-wow-delay="0.2s"><img src="img/icon/approval.png" alt=""><br>Approval Controls</div>
                        <div class="clearfix visible-xs"></div>
                        <div class="col-sm-2 col-xs-6 wow fadeInUp" data-wow-delay="0.4s"><img src="img/icon/cloud-based.png" alt=""><br>Cloud Based</div>
                        <div class="col-sm-2 col-xs-6 wow fadeInUp" data-wow-delay="0.6s"><img src="img/icon/tracker.png" alt=""><br>Tracker</div>
                        <div class="clearfix visible-xs"></div>
                        <div class="col-sm-2 col-xs-6 wow fadeInUp" data-wow-delay="0.6s"><img src="img/icon/analytics.png" alt=""><br>Real-time Analytics</div>
                    </div>
            </div>
        </div>         
      <!--grid four end-->        

    <!-- grid two -->
    <div class="container-fluid section layoutOne" id="analytics">
        <div class="container">
            <h2 class="wow fadeInUp">Governance Delivered Realtime<span class="red">.</span></h2>
            <br>
            <img src=img/chart.jpg alt="chart" class="img-responsive wow fadeInUp">
        </div>
    </div>
    <!--grid two end-->

    <!--       grid three    -->
    <div class="container-fluid section bg" id="control">
        <div class="container">
            <div class="row" id="ordering-monitor">
                <div class="col-md-6">
                    <h2 class="wow fadeInUp">Controls<span class="red">.</span></h2>
                    <p class="normal wow fadeInUp">Today, we see excellent controls at a central purchase level. The controls that govern purchases at local levels can now be brought into aahaa’s portal. When a maker (indenter) makes a purchase request, it is routed to a checker to verify and finally an approver approves it for fulfilment. A history of who approved what is maintained as well. Now these controls by itself can be money, spend frequency and so forth.</p>
                </div>
                <div class="col-md-6" class="portal">
                    <img src="img/controls-icon.png" alt="" class="img-responsive wow fadeInUp" data-wow-delay="0.4s">


                </div>
            </div>
        </div>
    </div>
    <!--       grid three end    -->


    <!--footer-->
    <?php include 'include/footer.html';?>
    <!--footer end-->

    <script src="js/vendor/jquery-1.11.1.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
        <script>
            //Particles - Home Page
            $('.part').particleground({ dotColor: '#fcc062', lineColor: '#fcc062' });
        </script>
    <script src="js/main.js"></script>


    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <!-- <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>-->
</body>

</html>

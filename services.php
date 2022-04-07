<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en-US">
  <!--<![endif]-->
  <head>
    <title>Dynamic | Creative Production Agency</title>

    <!-- META DATA -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="css/custom.css" />

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="css/vegas.min.css" type="text/css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="css/ionicons.min.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.min.css" type="text/css" />
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css" type="text/css" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <!--[if lt IE 11]>
      <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->

    <!-- FONTS -->
    <link
      href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700%7CRaleway:400,200,300,500"
      rel="stylesheet"
      type="text/css"
    />

    <!-- JS -->
    <script type="text/javascript" src="js/modernizr.js"></script>

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="images/favicon.png" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png" />

    <style>
      .blink {
        animation: blink 0.5s infinite;
      }
      @keyframes blink {
        to {
          opacity: 0;
        }
      }
      .flex {
        display: flex;
      }
      .header-sub-title {
        color: #fff;
        font-size: 60px;
        padding: 0.1em;
      }

      .about-icon-container {
        display: flex;
        justify-content: space-evenly;
        text-align: center;
        align-items: center;
      }

      .about-icon-container .about-icon {
        margin: 0 auto;
        width: 70px;
      }

      .client-image {
        position: relative;
        overflow: hidden;
        padding-bottom: 125%;
        width: 100%;
      }

      .client-image img {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
      }

      @media screen and (min-width: 320px) and (max-width: 767px) {
        .header-sub-title {
          font-size: 35px;
        }
        .serviceMobile {
          display: none !important;
        }
        #subscribe {
          display: none !important;
        }
      }
    </style>
  </head>
  <body class="youtube-background layer-active">
    <nav class="navbar navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button
            type="button"
            class="navbar-toggle collapsed"
            data-toggle="collapse"
            data-target="#navbar"
            aria-expanded="false"
            aria-controls="navbar"
          >
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand open-home-btn" href="./" data-target="#home"> -->
          <a class="navbar-brand" href="./">
            <img src="images/Dynamic_Black_logo White.png" alt="" class="logo-light" />
            <img src="images/Dynamic_Black_logo.png" alt="" class="logo-dark" />
          </a>
          <div class="navbar-overlay"></div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./">Home</a></li>
            <li><a href="./about.php">About</a></li>
            <li><a href="./services.php" class="active">Services</a></li>
            <li><a href="./client.php">Clients</a></li>
            <!-- <li><a href="#" data-target="#subscribe" class="load-layer-btn">Subscribe</a></li> -->
            <li><a href="./portfolio.php">Portfolio</a></li>
            <li><a href="./contact.php">Contact</a></li>
            <li>
              <a
                href="https://www.youtube.com/channel/UCecWJxrJIJzdjhIln__akLQ/videos"
                target="_blank"
                ><button class="youtube-btn">Videos</button></a
              >
            </li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.container-fluid -->
    </nav>

    <div class="main-container">
      <!-- <div id="services" class="bt-layer"> -->
      <div id="services">
        <div class="bt-layer-container">
          <section class="section equal-border equal-section nopadding">
            <div class="section-container">
              <div class="container-fluid equal-cols-container">
                <div class="row equal-row">
                  <!-- <div
                    class="col-md-6 equal-col sm-notoppadding animated"
                    data-animation="fadeInLeftBig"
                  > -->
                  <div class="col-md-6 equal-col sm-notoppadding">
                    <div class="equal-col-wrapper">
                      <div class="equal-col-container">
                        <div class="equal-col-content">
                          <div class="row">
                            <div class="col-md-10 col-md-offset-1 text-center">
                              <h3 class="section-title nomargin">Services</h3>
                              <div class="divider divider-center divider-dark">
                                <div class="divider-container">
                                  <div class="line-right"></div>
                                  <div class="line-left"></div>
                                </div>
                              </div>

                              <div class="row">
                                <div class="col-md-12">
                                  <div class="icon-box">
                                    <div class="icon-box-icon">
                                      <img src="images/icons/Icon_VoiceOver.png" />
                                      <!-- <i class="ion-ios-videocam-outline"></i> -->
                                    </div>

                                    <div class="icon-box-text">
                                      <h5 class="heading-uppercase">VOICE OVERS</h5>
                                      <p>
                                        We are leading, best & expert VOICE OVER & IVR Services in
                                        Dubai. We provide Voice over for your videos. Our Voice
                                        professionals give voice to your content in English, Arabic,
                                        and other languages. We do not just translate the content
                                        but also consider the context and emotions that are to be
                                        portrayed in the target language.
                                      </p>
                                      <p>
                                        For some brands, capturing the footage is not the issue,
                                        cleaning it up and putting it together is what is holding up
                                        their video marketing strategies. Don't worry; we are here
                                        to assist you. Send us your script and describe to us what
                                        you want to achieve, and we will make it happen.
                                      </p>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-md-12">
                                  <div class="icon-box">
                                    <div class="icon-box-icon">
                                      <img src="images/icons/Icon Branding.png" />
                                      <!-- <i class="ion-ios-mic-outline"></i> -->
                                    </div>
                                    <div class="icon-box-text">
                                      <h5 class="heading-uppercase">Branding</h5>
                                      <p>
                                        A corporate identity or corporate image is the manner in
                                        which a corporation, firm or business enterprise presents
                                        itself to the public. The corporate identity is typically
                                        visualized by branding and with the use of trademarks, but
                                        it can also include things like product design, advertising,
                                        public relations etc.
                                      </p>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-md-12">
                                  <div class="icon-box nobottommargin">
                                    <div class="icon-box-icon">
                                      <img src="images/icons/Icon Video_voiceover.png" />
                                      <!-- <i class="ion-ios-pricetag-outline"></i> -->
                                    </div>
                                    <div class="icon-box-text">
                                      <h5 class="heading-uppercase">VIDEO</h5>
                                      <p>
                                      If you are planning to take your business online, there's no better way to launch it than creating a brand video. That's because videos are one of the best ways to build relationships with your brand's audience. But there's more to videos than just the one that launches your brand. Product videos, training videos, company culture videos, brand documentaries and promotional videos are just a few amongst these. So for all of your video requirements, team Dynamic is ready to take your brand to the next level.
                                      </p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div
                    class="col-md-6 equal-col fullscreen-element serviceMobile mobile-hidden"
                    data-animation="fadeInRightBig"
                  >
                    <!-- Overlay -->
                    <!-- <div class="overlay kenburns-overlay">
                      <div class="overlay-image cover-background" style="background-image: url('./images/Dynamic-Services.jpg')"></div> 
                    </div> -->
                    <div class="client-image">
                      <img src="./images/Dynamic-Services.jpg" class="cover-background" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <a href="./" class="close-btn"><i class="ion-ios-close-empty"></i></a>
    </div>

    <!-- JS -->

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>

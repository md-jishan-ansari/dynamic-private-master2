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
  <body class="youtube-background">
    <div id="preloader">
      <div id="loading-animation">&nbsp;</div>
    </div>

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
            <li><a href="./" class="active">Home</a></li>
            <li><a href="./about.php">About</a></li>
            <li><a href="./services.php">Services</a></li>
            <li><a href="./client.php">Clients</a></li>

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
        <!-- <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" data-target="#home" class="open-home-btn active">Home</a></li>
            <li><a href="#" data-target="#about" class="load-layer-btn">About</a></li>
            <li><a href="#" data-target="#services" class="load-layer-btn">Services</a></li>
            <li><a href="#" data-target="#client" class="load-layer-btn">Clients</a></li>
            <li><a href="#" data-target="#portfolio" class="load-layer-btn">Portfolio</a></li>
            <li><a href="#" data-target="#contact" class="load-layer-btn">Contact</a></li>
            <li>
              <a
                href="https://www.youtube.com/channel/UCecWJxrJIJzdjhIln__akLQ/videos"
                target="_blank"
                ><button class="youtube-btn">Videos</button></a
              >
            </li>
          </ul>
        </div> -->
        <!--/.nav-collapse -->
      </div>
      <!--/.container-fluid -->
    </nav>

    <div class="main-container">
      <!-- Home -->
      <!-- Home -->
      <div id="home" class="home-layer" data-layer-animation-out-delay="1500">
        <div class="home-content">
          <section class="section home-section fullscreen-element">
            <div class="section-container">
              <div class="table-container">
                <div class="table-content">
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-md-6 col-md-offset-2">
                        <div style="display: flex">
                          <p class="header-sub-title">We are</p>
                          <p class="header-sub-title" id="word"></p>
                          <p class="header-sub-title blink">|</p>
                        </div>
                        <p
                          class="lead text-white nobottompadding animated onstart"
                          data-animation="fadeInRight"
                          data-animation-delay="1100"
                        >
                          At Dynamic Production, we turn your concept into a compelling story
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="home-overlay overlay">
          <div id="video_background" class="video_bg">
            <!-- <a class="player" data-property="{videoURL:'demo/video/Dynamic_video.mp4', containment:'.overlay-video', autoPlay:true, mute:true, quality: 'small', startAt:0, showControls:false, opacity:1}"></a> -->
            <video autoplay muted loop>
              <source src="demo/video/Dynamic_video.mp4" type="video/mp4" />
            </video>
          </div>
          <div class="overlay-color background-dark-4 opacity-20"></div>
          <div class="overlay-background overlay-video"></div>
          <div
            class="overlay-image cover-background on-mobile"
            style="background-image: url('demo/imges/image-28.jpg')"
          ></div>
        </div>
      </div>

      <!-- <a href="#" data-target="#home" class="close-btn open-home-btn"
        ><i class="ion-ios-close-empty"></i
      ></a> -->
      <a href="./" class="close-btn"><i class="ion-ios-close-empty"></i></a>
    </div>
    <!-- .main-container end -->

    <div class="main-overlay">
      <!-- Page Overlay -->
      <div class="page-overlay">
        <div
          class="page-o page-o-1 background-dark-4 opacity-35"
          data-layer-animation-delay="300"
          data-layer-animation-out-delay="1200"
        ></div>
        <div
          class="page-o page-o-2 background-dark-4 opacity-35"
          data-layer-animation-delay="600"
          data-layer-animation-out-delay="900"
        ></div>
        <div
          class="page-o page-o-3 background-white"
          data-layer-animation-delay="900"
          data-layer-animation-out-delay="600"
        ></div>
      </div>
    </div>

    <!-- Footer -->
    <footer class="site-footer">
      <div class="section-container">
        <!-- Copyright -->
        <div
          class="copyright animated onstart"
          data-animation="fadeInUp"
          data-animation-delay="800"
        >
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 text-left">
                © 2022 Dynamic - All Rights Reserved | Developed by
                <a href="https://knockonce.in" target="_blank" style="color: white"
                  ><strong>KnockOnce</strong></a
                >
              </div>
              <div class="col-md-6">
                <nav class="socials-icons pull-right">
                  <ul>
                    <li>
                      <a href="https://www.facebook.com/Dynamicdx" class="social-icon"
                        ><i class="ion-social-facebook"></i
                      ></a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/dynamicdxb/" class="social-icon"
                        ><i class="ion-social-instagram"></i
                      ></a>
                    </li>
                    <li>
                      <a
                        href="https://www.linkedin.com/in/dynamic-production-961843236/"
                        class="social-icon"
                        ><i class="ion-social-linkedin"></i
                      ></a>
                    </li>
                    <li>
                      <a href="https://in.pinterest.com/dynamicdxb/_saved/" class="social-icon"
                        ><i class="ion-social-pinterest"></i
                      ></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- .copyright end -->
      </div>
      <div class="overlay on-mobile">
        <div class="overlay-color background-indigo opacity-95"></div>
      </div>
    </footer>
    <!-- .site-footer end -->

    <!-- JS -->
    <script>
      const words = ['creative', 'thinkers', 'disruptors', 'different', 'dynamic'];
      let i = 0;
      let timer;

      function typingEffect() {
        let word = words[i].split('');
        var loopTyping = function () {
          if (word.length > 0) {
            document.getElementById('word').innerHTML += word.shift();
          } else {
            deletingEffect();
            return false;
          }
          timer = setTimeout(loopTyping, 500);
        };
        loopTyping();
      }

      function deletingEffect() {
        let word = words[i].split('');
        var loopDeleting = function () {
          if (word.length > 0) {
            word.pop();
            document.getElementById('word').innerHTML = word.join('');
          } else {
            if (words.length > i + 1) {
              i++;
            } else {
              i = 0;
            }
            typingEffect();
            return false;
          }
          timer = setTimeout(loopDeleting, 200);
        };
        loopDeleting();
      }

      typingEffect();
    </script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>

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

      .image-container {
        position: relative;
        padding-bottom: 90%;
        overflow: hidden;
      }

      .image-container img {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        width: 100%;
        height: 100%;
        object-fit: cover;
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
            <li><a href="./services.php">Services</a></li>
            <li><a href="./client.php">Clients</a></li>
            <!-- <li><a href="#" data-target="#subscribe" class="load-layer-btn">Subscribe</a></li> -->
            <li><a href="./portfolio.php" class="active">Portfolio</a></li>
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
      <!-- <div id="portfolio" class="bt-layer"> -->
      <div id="portfolio">
        <div class="bt-layer-container">
          <!-- <section class="section nobottompadding animated" data-animation="fadeInUpBig"> -->
          <section class="section equal-border nobottompadding" data-animation="fadeInUpBig">
            <div class="section-container">
              <div class="container">
                <div class="row">
                  <div class="col-md-10 col-md-offset-1 marginbottom-50">
                    <h3 class="section-title nomargin">Portfolio</h3>
                    <div class="divider divider-center divider-dark">
                      <div class="divider-container">
                        <div class="line-right"></div>
                        <div class="line-left"></div>
                      </div>
                    </div>
                    <p class="text-center">
                      Dynamic Production is a Branding and Video Production Agency specializing in
                      attracting new clients, attracting top talent, and building a target audience
                      that cares about what you have to say. We can assist you with a wide range of
                      project categories from Branding, Audio/Video Production, Voice over services
                      and Digital Marketing. Whether you need a voiceover for a long documentary or
                      a short clip. The ideal voice can really attract your audience and convey your
                      intended message.
                    </p>
                    <nav class="portfolio-filter isotope-filter margintop-30">
                      <ul>
                        <!-- <li>
                          <a href="#" class="button-border-color active" data-filter="*">All</a>
                        </li> -->
                        <li>
                          <a href="#" class="button-border-color active" data-filter=".logo"
                            >Logos</a
                          >
                        </li>
                        <li>
                          <a href="#" class="button-border-color" data-filter=".creative"
                            >Creatives</a
                          >
                        </li>
                        <li>
                          <a href="#" class="button-border-color" data-filter=".packaging"
                            >Packaging</a
                          >
                        </li>
                        <!-- <li>
                          <a href="#" class="button-border-color" data-filter=".poster">Posters</a>
                        </li> -->
                      </ul>
                    </nav>
                  </div>
                </div>
              </div>
              <div class="container-fluid">
                <!-- Portfolio Items -->
                <div class="portfolio-container isotope-container row mfp-gallery">
                  <!-- <article class="portfolio-item isotope-item col-md-3 col-sm-6 client nopadding"> -->

                  <!-- **********Logos************ -->

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 logo">
                    <a href="images/logos/001a.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/logos/001a.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Logo Design</h5>
                              <p class="details-category">Web / Live</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 logo">
                    <a href="images/logos/002a.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/logos/002a.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Logo Design</h5>
                              <p class="details-category">Web / Live</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 logo">
                    <a href="images/logos/003a.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/logos/003a.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Logo Design</h5>
                              <p class="details-category">Web / Live</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 logo">
                    <a href="images/logos/004a.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/logos/004a.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Logo Design</h5>
                              <p class="details-category">Web / Live</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 logo">
                    <a href="images/logos/005a.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/logos/005a.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Logo Design</h5>
                              <p class="details-category">Web / Live</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 logo">
                    <a href="images/logos/006a.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/logos/006a.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Logo Design</h5>
                              <p class="details-category">Web / Live</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 logo">
                    <a href="images/logos/007a.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/logos/007a.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Logo Design</h5>
                              <p class="details-category">Web / Live</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 logo">
                    <a href="images/logos/008a.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/logos/008a.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Logo Design</h5>
                              <p class="details-category">Web / Live</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 logo">
                    <a href="images/logos/009.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/logos/009.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Logo Design</h5>
                              <p class="details-category">Web / Live</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 logo">
                    <a href="images/logos/010.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/logos/010.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Logo Design</h5>
                              <p class="details-category">Web / Live</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 logo">
                    <a href="images/logos/011.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/logos/011.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Logo Design</h5>
                              <p class="details-category">Web / Live</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 logo">
                    <a href="images/logos/012.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/logos/012.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Logo Design</h5>
                              <p class="details-category">Web / Live</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 logo">
                    <a href="images/logos/013.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/logos/013.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Logo Design</h5>
                              <p class="details-category">Web / Live</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 logo">
                    <a href="images/logos/014.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/logos/014.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Logo Design</h5>
                              <p class="details-category">Web / Live</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 logo">
                    <a href="images/logos/015.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/logos/015.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Logo Design</h5>
                              <p class="details-category">Web / Live</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 logo">
                    <a href="images/logos/016.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/logos/016.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Logo Design</h5>
                              <p class="details-category">Web / Live</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <!-- ************Creatives********** -->

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 creative">
                    <a href="images/creatives/001.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/creatives/001.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Creatives</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 creative">
                    <a href="images/creatives/002.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/creatives/002.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Creatives</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 creative">
                    <a href="images/creatives/003.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/creatives/003.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Creatives</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 creative">
                    <a href="images/creatives/004.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/creatives/004.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Creatives</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 creative">
                    <a href="images/creatives/005.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/creatives/005.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Creatives</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 creative">
                    <a href="images/creatives/006.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/creatives/006.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Creatives</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 creative">
                    <a href="images/creatives/007.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/creatives/007.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Creatives</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 creative">
                    <a href="images/creatives/008.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/creatives/008.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Creatives</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 creative">
                    <a href="images/creatives/009.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/creatives/009.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Creatives</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 creative">
                    <a href="images/creatives/010.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/creatives/010.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Creatives</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 creative">
                    <a href="images/creatives/011.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/creatives/011.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Creatives</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 creative">
                    <a href="images/creatives/012.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/creatives/012.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Creatives</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 creative">
                    <a href="images/creatives/013.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/creatives/013.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Creatives</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 creative">
                    <a href="images/creatives/014.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/creatives/014.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Creatives</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 creative">
                    <a href="images/creatives/015.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/creatives/015.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Creatives</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 creative">
                    <a href="images/creatives/016.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/creatives/016.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Creatives</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <!-- **********Packaging*********** -->

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 packaging">
                    <a href="images/packaging/01-indotuna.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img
                            src="images/packaging/01-indotuna.jpg"
                            alt=""
                            class="img-responsive"
                          />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Packaging</h5>
                              <p class="details-category">Brand / Art</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 packaging">
                    <a href="images/packaging/02-hiba-tuna.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img
                            src="images/packaging/02-hiba-tuna.jpg"
                            alt=""
                            class="img-responsive"
                          />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Packaging</h5>
                              <p class="details-category">Brand / Art</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 packaging">
                    <a href="images/packaging/03-al-riyan tuna.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img
                            src="images/packaging/03-al-riyan tuna.jpg"
                            alt=""
                            class="img-responsive"
                          />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Packaging</h5>
                              <p class="details-category">Brand / Art</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 packaging">
                    <a href="images/packaging/04-an-nur tuna.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img
                            src="images/packaging/04-an-nur tuna.jpg"
                            alt=""
                            class="img-responsive"
                          />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Packaging</h5>
                              <p class="details-category">Brand / Art</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 packaging">
                    <a href="images/packaging/05-Hope tetrapacks.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img
                            src="images/packaging/05-Hope tetrapacks.jpg"
                            alt=""
                            class="img-responsive"
                          />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Packaging</h5>
                              <p class="details-category">Brand / Art</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 packaging">
                    <a href="images/packaging/06-Wellbee.png">
                      <div class="project-container">
                        <div class="image-container">
                          <img
                            src="images/packaging/06-Wellbee.png"
                            alt=""
                            class="img-responsive"
                          />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Packaging</h5>
                              <p class="details-category">Brand / Art</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 packaging">
                    <a href="images/packaging/07-banana chips.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img
                            src="images/packaging/07-banana chips.jpg"
                            alt=""
                            class="img-responsive"
                          />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Packaging</h5>
                              <p class="details-category">Brand / Art</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 packaging">
                    <a href="images/packaging/08-Rusk Box2.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img
                            src="images/packaging/08-Rusk Box2.jpg"
                            alt=""
                            class="img-responsive"
                          />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Packaging</h5>
                              <p class="details-category">Brand / Art</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 packaging">
                    <a href="images/packaging/09-cheese60.png">
                      <div class="project-container">
                        <div class="image-container">
                          <img
                            src="images/packaging/09-cheese60.png"
                            alt=""
                            class="img-responsive"
                          />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Packaging</h5>
                              <p class="details-category">Brand / Art</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 packaging">
                    <a href="images/packaging/010-ketchup60.png">
                      <div class="project-container">
                        <div class="image-container">
                          <img
                            src="images/packaging/010-ketchup60.png"
                            alt=""
                            class="img-responsive"
                          />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Packaging</h5>
                              <p class="details-category">Brand / Art</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 packaging">
                    <a href="images/packaging/011-onion60.png">
                      <div class="project-container">
                        <div class="image-container">
                          <img
                            src="images/packaging/011-onion60.png"
                            alt=""
                            class="img-responsive"
                          />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Packaging</h5>
                              <p class="details-category">Brand / Art</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 packaging">
                    <a href="images/packaging/012-spicy60.png">
                      <div class="project-container">
                        <div class="image-container">
                          <img
                            src="images/packaging/012-spicy60.png"
                            alt=""
                            class="img-responsive"
                          />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Packaging</h5>
                              <p class="details-category">Brand / Art</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <!-- *********Posters******** -->

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 poster">
                    <a href="images/posters/1-MV.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/posters/1-MV.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Mobile Optimized</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 poster">
                    <a href="images/posters/22 copy.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/posters/22 copy.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Mobile Optimized</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 poster">
                    <a href="images/posters/23 copy.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/posters/23 copy.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Mobile Optimized</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 poster">
                    <a href="images/posters/24 copy.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/posters/24 copy.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Mobile Optimized</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 poster">
                    <a href="images/posters/25 copy.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/posters/25 copy.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Mobile Optimized</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 poster">
                    <a href="images/posters/26 copy.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/posters/26 copy.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Mobile Optimized</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 poster">
                    <a href="images/posters/036.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/posters/036.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Mobile Optimized</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 poster">
                    <a href="images/posters/037.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/posters/037.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Mobile Optimized</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 poster">
                    <a href="images/posters/038.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/posters/038.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Mobile Optimized</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>

                  <article class="portfolio-item isotope-item col-md-3 col-sm-6 poster">
                    <a href="images/posters/mv-snacks.jpg">
                      <div class="project-container">
                        <div class="image-container">
                          <img src="images/posters/mv-snacks.jpg" alt="" class="img-responsive" />
                        </div>
                        <div class="project-details">
                          <div class="details-container">
                            <div class="details-text">
                              <h5 class="details-title">Mobile Optimized</h5>
                              <p class="details-category">Web / Life</p>
                            </div>
                          </div>
                          <div class="overlay background-dark-5 opacity-70"></div>
                        </div>
                      </div>
                    </a>
                  </article>
                </div>
                <!-- .portfolio-container end -->
              </div>
            </div>
          </section>

          <section class="section">
            <div class="section-container">
              <div class="container text-center">
                <h3>Start a project. Get in touch</h3>
                <a
                  href="./contact.php"
                  class=" button button-modern alternative nobottommargin"
                  >Contact Us</a
                >
              </div>
            </div>
          </section>
        </div>
      </div>

      <a href="./" class="close-btn"><i class="ion-ios-close-empty"></i></a>
    </div>

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

      if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
      }
    </script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>

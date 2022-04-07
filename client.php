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
            <li><a href="./client.php" class="active">Clients</a></li>
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
      <!-- <div id="client" class="bt-layer"> -->
      <div id="client">
        <div class="bt-layer-container">
          <!-- <section class="section equal-section nopadding"> -->
          <section class="section equal-border equal-section nopadding">
            <div class="section-container">
              <div class="container-fluid equal-cols-container">
                <div class="row equal-row">
                  <!-- <div
                    class="col-md-6 equal-col fullscreen-element mobile-hidden animated"
                    data-animation="fadeInLeftBig"
                  >
                    
                    <div class="overlay client-image">
                      <img src="./images/Client.jpg" class="overlay-image cover-background" />
                    </div>
                  </div> -->
                  <div
                    class="col-md-6 equal-col fullscreen-element mobile-hidden"
                    data-animation="fadeInLeftBig"
                  >
                    <div class="client-image">
                      <img src="./images/Client.jpg" class="cover-background" />
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12 equal-col" data-animation="fadeInRightBig">
                    <div class="equal-col-wrapper">
                      <div class="equal-col-container">
                        <div class="equal-col-content">
                          <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                              <h3 class="section-title nomargin">Our clients</h3>
                              <div class="divider divider-center divider-dark">
                                <div class="divider-container">
                                  <div class="line-right"></div>
                                  <div class="line-left"></div>
                                </div>
                              </div>

                              <!-- *************************************** -->
                              <!-- <div class="portfolio-container isotope-container row mfp-gallery"> -->
                              <div class="portfolio-container row mfp-gallery">
                                <article
                                  class="portfolio-item isotope-item col-md-4 col-sm-6 col-12 client"
                                >
                                  <a href="images/Clients/01-Sanofi.jpg">
                                    <div class="project-container">
                                      <div class="image-container">
                                        <img
                                          src="images/Clients/01-Sanofi.jpg"
                                          alt=""
                                          class="img-responsive"
                                        />
                                      </div>
                                      <div class="project-details">
                                        <div class="details-container">
                                          <div class="details-text">
                                            <h5 class="details-title">Branding</h5>
                                            <p class="details-category">Web / Live</p>
                                          </div>
                                        </div>
                                        <div class="overlay background-dark-5 opacity-70"></div>
                                      </div>
                                    </div>
                                  </a>
                                </article>

                                <article
                                  class="portfolio-item isotope-item col-md-4 col-sm-6 col-12 client"
                                >
                                  <a href="images/Clients/02-Pinar.jpg">
                                    <div class="project-container">
                                      <div class="image-container">
                                        <img
                                          src="images/Clients/02-Pinar.jpg"
                                          alt=""
                                          class="img-responsive"
                                        />
                                      </div>
                                      <div class="project-details">
                                        <div class="details-container">
                                          <div class="details-text">
                                            <h5 class="details-title">Branding</h5>
                                            <p class="details-category">Web / Live</p>
                                          </div>
                                        </div>
                                        <div class="overlay background-dark-5 opacity-70"></div>
                                      </div>
                                    </div>
                                  </a>
                                </article>

                                <article
                                  class="portfolio-item isotope-item col-md-4 col-sm-6 client"
                                >
                                  <a href="images/Clients/03-Crispy fry.jpg">
                                    <div class="project-container">
                                      <div class="image-container">
                                        <img
                                          src="images/Clients/03-Crispy fry.jpg"
                                          alt=""
                                          class="img-responsive"
                                        />
                                      </div>
                                      <div class="project-details">
                                        <div class="details-container">
                                          <div class="details-text">
                                            <h5 class="details-title">Branding</h5>
                                            <p class="details-category">Web / Live</p>
                                          </div>
                                        </div>
                                        <div class="overlay background-dark-5 opacity-70"></div>
                                      </div>
                                    </div>
                                  </a>
                                </article>

                                <article
                                  class="portfolio-item isotope-item col-md-4 col-sm-6 client"
                                >
                                  <a href="images/Clients/04-Shan.jpg">
                                    <div class="project-container">
                                      <div class="image-container">
                                        <img
                                          src="images/Clients/04-Shan.jpg"
                                          alt=""
                                          class="img-responsive"
                                        />
                                      </div>
                                      <div class="project-details">
                                        <div class="details-container">
                                          <div class="details-text">
                                            <h5 class="details-title">Branding</h5>
                                            <p class="details-category">Web / Live</p>
                                          </div>
                                        </div>
                                        <div class="overlay background-dark-5 opacity-70"></div>
                                      </div>
                                    </div>
                                  </a>
                                </article>

                                <article
                                  class="portfolio-item isotope-item col-md-4 col-sm-6 client"
                                >
                                  <a href="images/Clients/05-Hope.jpg">
                                    <div class="project-container">
                                      <div class="image-container">
                                        <img
                                          src="images/Clients/05-Hope.jpg"
                                          alt=""
                                          class="img-responsive"
                                        />
                                      </div>
                                      <div class="project-details">
                                        <div class="details-container">
                                          <div class="details-text">
                                            <h5 class="details-title">Branding</h5>
                                            <p class="details-category">Web / Live</p>
                                          </div>
                                        </div>
                                        <div class="overlay background-dark-5 opacity-70"></div>
                                      </div>
                                    </div>
                                  </a>
                                </article>

                                <article
                                  class="portfolio-item isotope-item col-md-4 col-sm-6 client"
                                >
                                  <a href="images/Clients/06-Masako.jpg">
                                    <div class="project-container">
                                      <div class="image-container">
                                        <img
                                          src="images/Clients/06-Masako.jpg"
                                          alt=""
                                          class="img-responsive"
                                        />
                                      </div>
                                      <div class="project-details">
                                        <div class="details-container">
                                          <div class="details-text">
                                            <h5 class="details-title">Branding</h5>
                                            <p class="details-category">Web / Live</p>
                                          </div>
                                        </div>
                                        <div class="overlay background-dark-5 opacity-70"></div>
                                      </div>
                                    </div>
                                  </a>
                                </article>

                                <article
                                  class="portfolio-item isotope-item col-md-4 col-sm-6 client"
                                >
                                  <a href="images/Clients/07-Caprisun.jpg">
                                    <div class="project-container">
                                      <div class="image-container">
                                        <img
                                          src="images/Clients/07-Caprisun.jpg"
                                          alt=""
                                          class="img-responsive"
                                        />
                                      </div>
                                      <div class="project-details">
                                        <div class="details-container">
                                          <div class="details-text">
                                            <h5 class="details-title">Branding</h5>
                                            <p class="details-category">Web / Live</p>
                                          </div>
                                        </div>
                                        <div class="overlay background-dark-5 opacity-70"></div>
                                      </div>
                                    </div>
                                  </a>
                                </article>

                                <article
                                  class="portfolio-item isotope-item col-md-4 col-sm-6 client"
                                >
                                  <a href="images/Clients/08-Mamee.jpg">
                                    <div class="project-container">
                                      <div class="image-container">
                                        <img
                                          src="images/Clients/08-Mamee.jpg"
                                          alt=""
                                          class="img-responsive"
                                        />
                                      </div>
                                      <div class="project-details">
                                        <div class="details-container">
                                          <div class="details-text">
                                            <h5 class="details-title">Branding</h5>
                                            <p class="details-category">Web / Live</p>
                                          </div>
                                        </div>
                                        <div class="overlay background-dark-5 opacity-70"></div>
                                      </div>
                                    </div>
                                  </a>
                                </article>

                                <article
                                  class="portfolio-item isotope-item col-md-4 col-sm-6 client"
                                >
                                  <a href="images/Clients/09-Maa.jpg">
                                    <div class="project-container">
                                      <div class="image-container">
                                        <img
                                          src="images/Clients/09-Maa.jpg"
                                          alt=""
                                          class="img-responsive"
                                        />
                                      </div>
                                      <div class="project-details">
                                        <div class="details-container">
                                          <div class="details-text">
                                            <h5 class="details-title">Branding</h5>
                                            <p class="details-category">Web / Live</p>
                                          </div>
                                        </div>
                                        <div class="overlay background-dark-5 opacity-70"></div>
                                      </div>
                                    </div>
                                  </a>
                                </article>

                                <article
                                  class="portfolio-item isotope-item col-md-4 col-sm-6 client"
                                >
                                  <a href="images/Clients/010-Indofood.jpg">
                                    <div class="project-container">
                                      <div class="image-container">
                                        <img
                                          src="images/Clients/010-Indofood.jpg"
                                          alt=""
                                          class="img-responsive"
                                        />
                                      </div>
                                      <div class="project-details">
                                        <div class="details-container">
                                          <div class="details-text">
                                            <h5 class="details-title">Branding</h5>
                                            <p class="details-category">Web / Live</p>
                                          </div>
                                        </div>
                                        <div class="overlay background-dark-5 opacity-70"></div>
                                      </div>
                                    </div>
                                  </a>
                                </article>

                                <article
                                  class="portfolio-item isotope-item col-md-4 col-sm-6 client"
                                >
                                  <a href="images/Clients/10-Toya.jpg">
                                    <div class="project-container">
                                      <div class="image-container">
                                        <img
                                          src="images/Clients/10-Toya.jpg"
                                          alt=""
                                          class="img-responsive"
                                        />
                                      </div>
                                      <div class="project-details">
                                        <div class="details-container">
                                          <div class="details-text">
                                            <h5 class="details-title">Branding</h5>
                                            <p class="details-category">Web / Live</p>
                                          </div>
                                        </div>
                                        <div class="overlay background-dark-5 opacity-70"></div>
                                      </div>
                                    </div>
                                  </a>
                                </article>

                                <article
                                  class="portfolio-item isotope-item col-md-4 col-sm-6 client"
                                >
                                  <a href="images/Clients/12-Santan.jpg">
                                    <div class="project-container">
                                      <div class="image-container">
                                        <img
                                          src="images/Clients/12-Santan.jpg"
                                          alt=""
                                          class="img-responsive"
                                        />
                                      </div>
                                      <div class="project-details">
                                        <div class="details-container">
                                          <div class="details-text">
                                            <h5 class="details-title">Branding</h5>
                                            <p class="details-category">Web / Live</p>
                                          </div>
                                        </div>
                                        <div class="overlay background-dark-5 opacity-70"></div>
                                      </div>
                                    </div>
                                  </a>
                                </article>
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

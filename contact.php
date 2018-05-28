<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Country Yellow Pages - Contact Us</title>
    <link rel="shortcut icon" href="assets/images/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="location listing creative">
    <meta name="author" content="CodePassenger">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type='text/css'>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!-- BX Slider CSS -->
    <link rel="stylesheet" href="assets/css/jquery.bxslider.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style2.css">

    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <div class="main-wrap">
        <!-- Main Navigation -->
        <?php include 'header.php'; ?>
        <!-- main nav section -->
        <div class="contact subheader">
            <!-- <h2>Contact us</h2> -->
            <div class="overlay"></div>
        </div>
        <div class="breadcrumb-block">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Contact us</li>
                </ol>
                <div class="breadcrumb-call-to-action">
                    <p><i class="fa fa-phone" aria-hidden="true"></i>+234(0)809-9553334</p>
                    
                </div>
            </div>
        </div>
        <div class="contact-section">
            <div class="container">
                <div class="section-title">
                    <h2>Get in Touch</h2>
                    <!-- <p>incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nos</p> -->
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <div class="contactinfo-block">
                      <div class="contact-widget">
                        <p class="address">
                          <i class="fa fa-map-marker" aria-hidden="true"></i>
                          <span>
                            C/O Berachah Microfinance Bank,<br>
                            1 CMD Road,<br>
                            Off Old Toll Gate,<br>
                            Magodo GRA, Lagos
                          </span>
                        </p>
                        <p>
                          <i class="fa fa-phone" aria-hidden="true"></i>
                          <span>
                            +234(0)809-9553334 <br>
                            +234(0)802-3226459 <br>
                            +234(0)703-1003494 <br>
                            +234(0)805-6668991
                          </span>
                        </p>
                        <p class="last-type">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <span><a href="mailto:info@countryyellowpages.net">info@countryyellowpages.net</a></span>
                        </p>
                        <div class="social-with-label">
                          <span>Social Media: </span>
                          <ul class="social">
                            <li>
                              <a href="http://www.facebook.com/countryyellowpages">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                              </a>
                            </li>
                              <li>
                                <a href="http://www.twitter.com/countryyellowpages">
                                  <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                              </li>
                              <li>
                                <a href="http://www.youtube.com/countryyellowpages">
                                  <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                </a>
                              </li>
                              <li>
                                <a href="http://www.plus.google.com/countryyellowpages">
                                  <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </a>
                              </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                    <div class="col-md-7">
                      <div class="contactform-block">
                        <p id="message"></p>
                        <form id="contactForm" method="post" action="resources/modalScript.php" autocomplete="off">
                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group label-floating">
                                <label class="control-label">Full name</label>
                                <input type="text" name="name" class="form-control">
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group label-floating">
                                <label class="control-label">Email</label>
                                <input type="email" name="email" class="form-control">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group label-floating">
                                <label class="control-label">Your Messge</label>
                                <textarea class="form-control" name="message" rows="6"></textarea>
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <button class="btn btn-primary btn-send-message" name="sendMessage">
                                Send Message
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- contact-section -->
        <div id="map_full_width_one" class="map-full-width-one"></div>
        <?php include 'footer.php'; ?>
    </div>
    <script type="text/javascript">

        $('#map_full_width_one').gmap3({
            map: {
                options: {
                    zoom: 5,
                    center: [41.785091, -73.968285],
                    mapTypeControl: true,
                    mapTypeControlOptions: {
                        style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
                    },
                    mapTypeId: "style1",
                    mapTypeControlOptions: {
                        mapTypeIds: [google.maps.MapTypeId.ROADMAP, "style1"]
                    },
                    navigationControl: true,
                    scrollwheel: false,
                    streetViewControl: true
                }
            },
            marker: {
                latLng: [40.785091, -73.968285],
                options: {animation:google.maps.Animation.BOUNCE, icon: 'images/markers/small-marker.png' }
            },
            styledmaptype: {
                id: "style1",
                options: {
                    name: "Style 1"
                },

            }
        });
    </script>
</body>
</html>

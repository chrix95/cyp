<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Country Yellow Pages - Home</title>
    <link rel="shortcut icon" href="assets/images/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="location listing creative">
    <meta name="author" content="CodePassenger">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type='text/css'>

    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!-- BX Slider CSS -->
    <link rel="stylesheet" href="assets/css/jquery.bxslider.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style2.css">

    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <div class="main-wrap">
        <!-- Main Navigation -->
        <?php include 'header.php'; ?>
        <!-- main nav section -->
        <div id="main-header-section" class="main-header-section">
            <div class="container">
                <div class="header-content-block">
                    <div class="header-title-block">
                        <h2>Find A Business</h2>
                        <p>Get Company &amp; Business Directory At Your Convenience</p>
                    </div>
                    <form class="" action="script.php" method="post" id="searchForm">
                      <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                          <div class="form-group home">
                            <label class="labels">Category</label>
          									<div class="input-group">
                              <select name="category" id="category" class="form-control locationStyle">
                                <option value="" selected disabled>Please select</option>
                                <?php include 'resources/category.php'; ?>
                              </select>
          									</div>
                            <label id="category-error" class="error" for="category"></label>
          								</div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                          <div class="form-group home">
                            <label class="labels">Location</label>
          									<div class="input-group">
                              <select class="form-control locationStyle" name="location" id="location">
                                <option value="" selected disabled>Please select</option>
                              </select>
          									</div>
                            <label id="location-error" class="error" for="location"></label>
          								</div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                          <div class="form-group home">
                            <label class="labels">Keyword</label>
          									<div class="input-group keyword">
          										<input type="text" name="keyword" value="" placeholder="HiiT Consultant" style="color: black" class="form-control locationStyle"/>
          									</div>
                            <label id="keyword-error" class="error" for="keyword"></label>
          								</div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4">

        								</div>
                        <div class="col-xs-12 col-sm-4 col-md-4">
                          <div class="input-group">
        										<button type="submit" id="searchbutton" name="searchbutton" class="btn btn-default btn-block" style="margin-top: 10px;">Search</button>
        									</div>
        								</div>
                        <div class="col-xs-12 col-sm-4 col-md-4">

        								</div>
                      </div>
                    </form>
                    <p class="listing-promote-text">
                        Or Add &amp; Promote our listing.
                    </p>
                    <div class="listing-promote-steps">
                        <div class="listing-promote-block">
                            <span class="ti-user"></span>
                            <p>Register</p>
                        </div>
                        <div class="listing-promote-block">
                            <span class="ti-announcement"></span>
                            <p>View Free Listing</p>
                        </div>
                    </div>
                </div>
                <!-- header-content-block -->
            </div>
            <div class="overlay"></div>
        </div>
        <!-- main-header section -->
        <div class="listing-catagory-section">
            <div class="container-fluid">
              <?php
                require 'resources/connection.php';

                $info = "Manufacturing and Production";
                $get_listings = $conn->prepare("SELECT id FROM contact WHERE companyCategory=:category");
                $get_listings->bindParam(":category", $info);
                $get_listings->execute();
                $success = $get_listings->rowCount();
               ?>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="listing-catagory-block">
                                <div class="catagory-image">
                                    <img src="assets/images/catagory/1.jpg" alt="img" class="img-responsive">
                                    <div class="catagory-text">
                                        <h4>
                                            <a href="javascript:void(0)">Manufacturing &amp; Production</a>
                                        </h4>
                                        <p class="hide-text"><?php echo $success; ?></p>
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="listing-catagory-block">
                              <?php
                                require 'resources/connection.php';

                                $info = "Oil and Gas";
                                $get_listings = $conn->prepare("SELECT id FROM contact WHERE companyCategory=:category");
                                $get_listings->bindParam(":category", $info);
                                $get_listings->execute();
                                $success = $get_listings->rowCount();
                               ?>
                                <div class="catagory-image">
                                    <img src="assets/images/catagory/2.jpg" alt="img" class="img-responsive">
                                    <div class="catagory-text">
                                        <h4>
                                            <a href="javascript:void(0)">Oil &amp; Gas</a>
                                        </h4>
                                        <p class="hide-text"><?php echo $success; ?></p>
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="listing-catagory-block">
                                <div class="catagory-image">
                                  <?php
                                    require 'resources/connection.php';

                                    $info = "Maintenance Services";
                                    $get_listings = $conn->prepare("SELECT id FROM contact WHERE companyCategory=:category");
                                    $get_listings->bindParam(":category", $info);
                                    $get_listings->execute();
                                    $success = $get_listings->rowCount();
                                   ?>
                                  <img src="assets/images/catagory/3.jpg" alt="img" class="img-responsive">
                                  <div class="catagory-text">
                                      <h4>
                                          <a href="javascript:void(0)">Maintenance Services</a>
                                      </h4>
                                      <p class="hide-text"><?php echo $success; ?></p>
                                  </div>
                                  <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="listing-catagory-block">
                                <div class="catagory-image">
                                  <?php
                                    require 'resources/connection.php';

                                    $info = "Telecommunications";
                                    $get_listings = $conn->prepare("SELECT id FROM contact WHERE companyCategory=:category");
                                    $get_listings->bindParam(":category", $info);
                                    $get_listings->execute();
                                    $success = $get_listings->rowCount();
                                   ?>
                                  <img src="assets/images/catagory/4.jpg" alt="img" class="img-responsive">
                                  <div class="catagory-text">
                                      <h4>
                                          <a href="javascript:void(0)">Telecommunications</a>
                                      </h4>
                                      <p class="hide-text"><?php echo $success; ?></p>
                                  </div>
                                  <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="listing-catagory-block">
                                <div class="catagory-image">
                                  <?php
                                    require 'resources/connection.php';

                                    $info = "Consultancy";
                                    $get_listings = $conn->prepare("SELECT id FROM contact WHERE companyCategory=:category");
                                    $get_listings->bindParam(":category", $info);
                                    $get_listings->execute();
                                    $success = $get_listings->rowCount();
                                   ?>
                                  <img src="assets/images/catagory/5.jpg" alt="img" class="img-responsive">
                                  <div class="catagory-text">
                                      <h4>
                                          <a href="javascript:void(0)">Consultancy</a>
                                      </h4>
                                      <p class="hide-text"><?php echo $success; ?></p>
                                  </div>
                                  <div class="overlay"></div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-info-section">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <div class="about-info">
                    <h2>We are Country Yellow Pages</h2>
                    <p>
                      Dionysius Nigeria enterprises is a registered, dynamic and multi-purpose company which involves in many activities like manufacturing representative, deals in petroleum products, general contracts, printing, general supplies, supply of computer, import & export and above all the publishers of All-Company and Business Country Yellow pages. The publication that goes throughout the whole world. Our publication sections are capable and ready to meet the yearning and aspiration of Nigerian and they are ready to deliver any information concerning any business and trade interactions in Nigeria and West Africa. The book is also known as A-Z Trade directory.
                    </p>
                    <a href="about.php"><button type="button" name="button" class="btn btn-md btn-readmore">Read more</button></a>
                </div>
              </div>
              <div class="col-md-4">
                <div class="about-thumb">
                    <a href="advert.php"><img src="assets/images/ads/onsale2016.jpg" alt="img" class="img-responsive" style="height: 39vh"></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="working-process-section" class="working-process-section">
            <div class="overlay"></div>
            <div class="container">
                <div class="section-title">
                    <h2>What We Do</h2>
                    <p>We Expose businesses to the community in the right way.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="working-process-block">
                            <span class="ti-user"></span>
                            <h4>Register</h4>
                            <p>
                              To have access to our extensive database of company's contact, we suggest you register with us.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="working-process-block">
                            <span class="ti-pencil-alt"></span>
                            <h4>View our Listing</h4>
                            <p>
                              Full access control to our most current company profile is given to you upon registration completion
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="working-process-block">
                            <span class="ti-stats-up"></span>
                            <h4>Grow Your Business</h4>
                            <p>
                              With our list of contact, you can build your company reputation and standards.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- working-process section -->
        <!-- testimonial section-->
       <div class="container">
         <div class="row">
           <div class="col-md-5 bg">
             <div class="call-to-action-section">
               <div id="advertisementCarousel" class="carousel slide bgmain" data-ride="carousel">
                 <div class="carousel-inner" role="listbox">
                   <div class="carousel-item active">
                     <a href="http://www.bespkokeeventsng.com" target="_blank">
                       <img src="assets/images/ads/BeSpoke.png" alt="" class="img img-responsive" />
                     </a>
                   </div>
                   <div class="carousel-item">
                     <a href="http://www.boi.ng" target="_blank">
                       <img src="assets/images/ads/BOIStateOffices.jpg" alt="" class="img img-responsive" />
                     </a>
                   </div>
                   <div class="carousel-item">
                     <a href="http://www.ebusiness.greatnigeriaplc.com" target="_blank">
                       <img src="assets/images/ads/eBusiness.jpg" alt="" class="img img-responsive" />
                     </a>
                   </div>
                   <div class="carousel-item">
                     <a href="http://www.funfactoryng.com" target="_blank">
                       <img src="assets/images/ads/FunFactory.png" alt="" class="img img-responsive" />
                     </a>
                   </div>
                   <div class="carousel-item">
                     <a href="http://www.funturfng.com" target="_blank">
                       <img src="assets/images/ads/FunTurf.png" alt="" class="img img-responsive" />
                     </a>
                   </div>
                   <div class="carousel-item">
                     <a href="http://www.lafarge.com" target="_blank">
                       <img src="assets/images/ads/Lafarge.jpg" alt="" class="img img-responsive" />
                     </a>
                   </div>
                   <div class="carousel-item">
                     <a href="http://www.leedsbeckett.ac.uk" target="_blank">
                       <img src="assets/images/ads/LeedsBecketts.jpg" alt="" class="img img-responsive" />
                     </a>
                   </div>
                   <div class="carousel-item">
                     <a href="http://www.midelmanagement.com" target="_blank">
                       <img src="assets/images/ads/MidelFlier.jpg" alt="" class="img img-responsive" />
                     </a>
                   </div>
                   <div class="carousel-item">
                     <a href="http://www.ncc.gov.ng" target="_blank">
                       <img src="assets/images/ads/NCCAd.jpg" alt="" class="img img-responsive" />
                     </a>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <div class="col-md-7">
             <div class="call-to-action-section">
                <h2>
                    Start today to get more exposure and <br> grow your business
                </h2>
                <p>
                    There are many consumers &amp; business owners who finds this directory very helpful.
                </p>
                <div class="btn-group">
                  <a href="#main-header-section" class="icon-btn btn-readmore">
                      <i class="fa fa-search" aria-hidden="true"></i> Explore Listing
                  </a>
                </div>
              </div>
           </div>
         </div>
       </div>
        <!-- call-to-action section-->
      <?php include 'footer.php' ?>
      </div>
      <!-- animation slider -->
      <script type="text/javascript" src="assets/js/background.cycle.js"></script>
      <!-- Google-map -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
      <script src="assets/js/gmap3.min.js"></script>
      <!-- <script src="js/custom.js"></script> -->
      <script type="text/javascript">
          $(document).ready(function() {
              $(".main-header-section").backgroundCycle({
                  imageUrls: [
                    'assets/images/res/img/bg-image.jpg',
                    'assets/images/res/img/bg2.jpeg',
                    'assets/images/res/img/bg3.jpg'
                  ],
                  fadeSpeed: 1000,
                  duration: 7000,
                  backgroundSize: SCALING_MODE_COVER
              });
          });
      </script>
  	<script type="text/javascript">
  		function listingModalMap(selector,centerLatLng,markerLatLng){
  			$(selector).gmap3({
  				map: {
  					options: {
  						zoom: 6,
  						center: [centerLatLng.lat, centerLatLng.lng],
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
  					latLng: [markerLatLng.lat, markerLatLng.lng],
  					options: {animation:google.maps.Animation.BOUNCE, icon: 'assets/images/markers/listing-post-pointer.png' }
  				},
  				styledmaptype: {
  					id: "style1",
  					options: {
  						name: "Style 1"
  					}
  				}
  			});
  		}
  		var centerLatLng = {
  			lat: 44.785091,
  			lng: -79.968285
  		};
  		var markerLatLng = {
  			lat: 40.785091,
  			lng: -73.968285
  		};
  		listingModalMap('#listing_post_map_one',centerLatLng,markerLatLng);
  		listingModalMap('#listing_post_map_two',centerLatLng,markerLatLng);
  		listingModalMap('#listing_post_map_three',centerLatLng,markerLatLng);
      </script>
</body>
</html>

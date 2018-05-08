<?php
	try{
		session_start();

		if ($_SESSION['success'] != '' || $_SESSION['size'] != '') {
			?>
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8">
    <title>
      Country Yellow Pages - Search result
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="location listing creative">
    <meta name="author" content="CodePassenger">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type="text/css">
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
      <?php include "header.php"; ?>
      <!-- main nav section -->
      <div class="search subheader">
        <h2>Search Result</h2>
        <div class="overlay">
        </div>
      </div>
      <div class="breadcrumb-block">
        <div class="container">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.php">
                Home
              </a>
            </li>
            <li class="breadcrumb-item active">
              Search Result
            </li>
          </ol>
          <div class="breadcrumb-call-to-action">
            <p>
              <i class="fa fa-phone" aria-hidden="true">
              </i>
              +234(0)809-9553334
            </p>
            <a href="index.php" class="contact-btn">
              Home
            </a>
          </div>
        </div>
      </div>

      <!-- main result section -->
      <section id="searchresult">
        <div class="container">
          <div class="row">
            <!-- search result area -->
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
              <form class="searchForm" action="script.php" method="post" id="searchForm">
                <div class="row">
                  <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                      <label class="labels">Category</label><br>
                      <div class="input-group">
                        <select name="category" id="category" class="form-control">
                          <option value="" selected disabled>Please select</option>
                          <?php include 'resources/category.php'; ?>
                        </select>
                      </div>
                      <label id="category-error" class="error" for="category"  style="color: #000;"></label>
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                      <label class="labels">Location</label><br>
                      <div class="input-group">
                        <select class="form-control" name="location" id="location">
                          <option value="" selected disabled>Please select</option>
                        </select>
                      </div>
                      <label id="location-error" class="error" for="location"  style="color: #000;"></label>
                    </div>
                  </div>
                  <div class="col-md-4 col-lg-4">
                    <div class="form-group">
                      <label class="labels">Keyword</label><br>
                      <div class="input-group">
                        <input type="text" name="keyword" value="" class="form-control" placeholder="HiiT Consultant"/>
                      </div>
                      <label id="keyword-error" class="error" for="keyword" style="color: #000;"></label>
                    </div>
                  </div>
                </div>
                <div class="input-group">
                  <button type="submit" name="searchbutton" id="searchbutton2" class="btn btn-default">Search</button>
                </div>
              </form>
              <!-- start result area -->

              <?php

                if (isset($_GET['false'])) {

                ?>
									<div class="alert alert-info" role="alert">
										<strong>Total result found: 0</strong>
									</div>
                  <div class="clients">
                    <div class="header">
                      <h2>No result match</h2>
                    </div>
                  </div>
                <?php

              } else {

                  $arraySize = $_SESSION['size'];
                  $success = $_SESSION['success'];
									?>
									<div class="alert alert-success" role="alert">
	                  <strong>Total result found: <?php echo $arraySize; ?></strong>
	                </div>
									<?php
                  for($x = 0; $x < 2; $x++) {
                    $name = $success[$x]->companyName;
                    $address = $success[$x]->companyAddress;
                    $tel = $success[$x]->companyTel;
                    $email = $success[$x]->companyEmail;
                    $website = $success[$x]->companyWebsite;
                  ?>

                  <div class="clients">
                    <div class="header">
                      <h2><?php echo $name; ?></h2>
                    </div>
                    <div class="sub-header">
                      <p>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span><?php echo $address; ?></span>
                      </p>
                      <p>
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>
                          <?php
                            if (empty($tel)) {
                              echo "Phone number not available";
                            } else {
                              echo $tel;
                            }
                          ?>
                        </span>
                      </p>
                      <p>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <span>
                          <?php
                            if (empty($email)) {
                              echo "Email address not available";
                            } else {
                              echo $email;
                            }
                          ?>
                        </span>
                      </p>
                      <p>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <span>
                          <?php
                            if (empty($website)) {
                              echo "Website not available";
                            } else {
                              echo '<a href="http://'.$website.'" target="_blank">'.$website.'</a>';
                            }
                          ?>
                        </span>
                      </p>
                    </div>
                  </div>

                <?php
                  }

                }

                ?>
              <!-- end result area -->
              <div class="alert alert-danger" role="alert">
                <strong>Oh snap! </strong><a href="#" class="alert-link" data-toggle="modal" data-target="#myRegModal">Register with us</a> to view more results.
              </div>
            </div>
            <!-- related search area -->
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 adSideBar">
              <h2>Place your Ad's</h2>
              <p>Are you interested in placing your company's advert for our million viewers, kindly contact us via our contact page.<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
          </div>
        </div>
      </section>
      <!-- main result section end -->
      <?php include "footer.php" ?>
    </div>
	<?php
		} else {
			session_destroy();
			header("location: index.php");
		}

		} catch (Exception $e) {
			echo "Problem Somewhere: ". $e->getMessage();
		}
	?>

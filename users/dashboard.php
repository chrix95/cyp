<?php
  session_start();
  // var_dump($_SESSION['details']);
  if (!isset($_SESSION['size']) || !isset($_SESSION['success'])) {
    $_SESSION['size'] = '';
    $_SESSION['success'] = '';
  } else {
    if ($_SESSION['details']->updated == 0) {
      header("location: payment.php");
    } else {
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Dashboard - Country Yellow Pages</title>
    <link rel="shortcut icon" href="../assets/images/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="location listing creative">
    <meta name="author" content="CodePassenger">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" type='text/css'>

    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <!-- <link rel="stylesheet" href="../assets/css/lobipanel.min.css"> -->

    <!-- BX Slider CSS -->
    <link rel="stylesheet" href="../assets/css/jquery.bxslider.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/style2.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
</head>
<body class="dashboard">
    <div class="main-wrap">
		<!-- Main Navigation -->
    <?php include 'header.php'; ?>
    <!-- main nav section -->
    <div class="side-menu">
      <nav id="cbp-spmenu-s1" class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left">
        <div class="profile">
          <img src="../assets/images/demo-user.png" class="img img-responsive center-block img-thumbnail" width="70%"/>
          <h5 class="text-center">
            <?php echo $_SESSION['details']->full_name; ?>
          </h5>
          <p class="text-center" style="line-height: 18px;font-style: italic;">
            <?php
              echo $_SESSION['details']->email. '<br>';
              echo $_SESSION['details']->phone. '<br>';
              echo $_SESSION['details']->city.', ' .$_SESSION['details']->state;
            ?>
          </p>
        </div>
        <div class="sideNav">
          <?php include 'sideNav.php'; ?>
        </div>
      </nav>
    </div>
    <!-- Slide Menu Section -->
		<div class="page-container-wrap">
			<div class="container-fluid">
				<div class="dashBoard-section-1 nmbr-statistic-area">
					<div class="row">
						<div class="col-sm-12">
							<div class="breadcrumb-block">
								<ol class="breadcrumb">
									<li class="breadcrumb-item">
										<a href="#">
											Home
										</a>
									</li>
									<li class="breadcrumb-item active">Dashboard</li>
								</ol>
							</div>
						</div>
						<div class="col-lg-3 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block user-statistic">
                  <?php
                    require '../resources/connection.php';

                    $info = "Manufacturing and Production";
                    $get_listings = $conn->prepare("SELECT id FROM contact WHERE companyCategory=:category");
                    $get_listings->bindParam(":category", $info);
                    $get_listings->execute();
                    $success = $get_listings->rowCount();
                   ?>
									<div class="nmbr-statistic-info">
										<span class="number"><?php echo $success; ?></span>
										<span class="a-meta-title"><?php echo $info; ?></span></span>
									</div>
									<span class="nmbr-statistic-icon ti-announcement"></span>
								</div><!-- nmbr-statistic-block -->
							</div><!-- widget-module -->
						</div>
            <div class="col-lg-3 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block user-statistic">
                  <?php
                    require '../resources/connection.php';

                    $info = "Consultancy";
                    $get_listings = $conn->prepare("SELECT id FROM contact WHERE companyCategory=:category");
                    $get_listings->bindParam(":category", $info);
                    $get_listings->execute();
                    $success = $get_listings->rowCount();
                   ?>
									<div class="nmbr-statistic-info">
										<span class="number"><?php echo $success; ?></span>
										<span class="a-meta-title"><?php echo $info; ?></span></span>
									</div>
									<span class="nmbr-statistic-icon ti-announcement"></span>
								</div><!-- nmbr-statistic-block -->
							</div><!-- widget-module -->
						</div>
            <div class="col-lg-3 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block user-statistic">
                  <?php
                    require '../resources/connection.php';

                    $info = "Insurance";
                    $get_listings = $conn->prepare("SELECT id FROM contact WHERE companyCategory=:category");
                    $get_listings->bindParam(":category", $info);
                    $get_listings->execute();
                    $success = $get_listings->rowCount();
                   ?>
									<div class="nmbr-statistic-info">
										<span class="number"><?php echo $success; ?></span>
										<span class="a-meta-title"><?php echo $info; ?></span></span>
									</div>
									<span class="nmbr-statistic-icon ti-announcement"></span>
								</div><!-- nmbr-statistic-block -->
							</div><!-- widget-module -->
						</div>
            <div class="col-lg-3 col-sm-6">
							<div class="box-widget">
								<div class="nmbr-statistic-block user-statistic">
                  <?php
                    require '../resources/connection.php';

                    $info = "Maintenance Services";
                    $get_listings = $conn->prepare("SELECT id FROM contact WHERE companyCategory=:category");
                    $get_listings->bindParam(":category", $info);
                    $get_listings->execute();
                    $success = $get_listings->rowCount();
                   ?>
									<div class="nmbr-statistic-info">
										<span class="number"><?php echo $success; ?></span>
										<span class="a-meta-title"><?php echo $info; ?></span></span>
									</div>
									<span class="nmbr-statistic-icon ti-announcement"></span>
								</div><!-- nmbr-statistic-block -->
							</div><!-- widget-module -->
						</div>

					</div>
				</div><!-- nmbr-statistic-area -->
        <div class="row">
          <!-- search result area -->
          <div class="col-md-12">
            <form class="searchForm" action="../script.php" method="post" id="searchForm">
              <div class="row">
                <div class="col-md-4 col-lg-4">
                  <div class="form-group">
                    <label class="labels">Category</label><br>
                    <div class="input-group">
                      <select name="category" id="category" class="form-control">
                        <option value="" selected disabled>Please select</option>
                        <?php include '../resources/category.php';  ?>
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
                <button type="submit" name="dashboardsearchbutton" id="searchbutton2" class="btn btn-default">Search</button>
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

                if (!empty($arraySize) || !empty($success)) {
                ?>
                <div class="alert alert-success" role="alert">
                  <strong>Total result found: <?php echo $arraySize; ?></strong>
                </div>
                <?php
                }
                ?>

                <?php
                for($x = 0; $x < $arraySize; $x++) {
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
          </div>
        </div>
			</div>
		</div>
	</div>
    <script src="../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../assets/js/tether.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery.bxslider.js"></script>
    <script src="../assets/js/jquery.magnific-popup.min.js"></script>
    <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="../assets/js/jquery-ui.min.js"></script>
    <script src="../assets/js/jquery.waypoints.min.js"></script>
    <script src="../assets/js/jquery.counterup.min.js"></script>
    <script src="../assets/js/lobipanel.min.js"></script>
    <script src="../assets/js/jquery.accordion.js"></script>
    <script src="../assets/js/jquery.slimscroll.min.js"></script>
    <script src="../assets/js/jquery.validate.min.js"></script>

    <!-- Tinymce-JS -->
    <script src="../assets/js/tinymce/tinymce.min.js"></script>
    <!-- Google-map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
    <script src="../assets/js/gmap3.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function (){

        "use strict";
        /*--------------------------------------------
            Window Scroll Settings
      ---------------------------------------------*/
        $(window).on('scroll', function (event) {
            var scroll = $(window).scrollTop();
            if (scroll >= 10) {
                $(".main-nav-section").addClass("nav-affix");
                $("#cbp-spmenu-s1").addClass("nav-affix");
            } else {
                $(".main-nav-section").removeClass("nav-affix");
                $("#cbp-spmenu-s1").removeClass("nav-affix");
            }
        });

        // pull states from locations.json
        var mydata;
        $.ajax({
          url: '../assets/js/locations.json',
          type: 'GET',
          dataType: 'json'
        })
        .done(function(error) {
            mydata = error;
            for (var state in mydata.States) {
                $('#location').append('<option value="' + String(state) + '">' + String(state) + ' </option>');
                $('#state').append('<option value="' + String(state) + '">' + String(state) + ' </option>');
            }
        });

        $('#searchForm').validate({
          rules: {
            category: {
              required: true,
            },
            location: {
              required: true,
            }
          },

        });

        $('#passwordForm').validate({
          rules: {
            curpassword: {
              required: true
            },
            newpassword: {
              required: true
            },
            conpassword: {
              required: true,
              equalTo: '#newpassword'
            }
          },

          submitHandler: function() {

            var that = $('#passwordForm'),
                url = that.attr('action'),
                type = that.attr('method'),
                data = {};

            that.find('[name]').each(function(index, value){
                var that = $(this),
                  name = that.attr('name'),
                  value = that.val();

                data[name] = value;
            });

            $.ajax({
              url: '../resources/modalScript.php',
              type: 'POST',
              data: data
            })

            .done(function(data){
              if (data == 'Password changed successfully') {
                $('p#message').css({
                  "color":"#fff",
                  "font-size": "15px"
                });
                $('p#message').text(data);
                setTimeout("$('p#message').text('')", 3000);
              } else if (data == 'Password change failed') {

                $('p#message').css({
                  "color":"#fff",
                  "font-size": "15px"
                });
                $('p#message').text(data);
                setTimeout("$('p#message').text('')", 3000);
              } else if (data == 'Current password incorrect') {

                $('p#message').css("color", "red");
                $('p#message').text(data);
                console.log(data);
                setTimeout("$('p#message').text('')", 3000);
              }

            })

            .fail(function(data){
              console.log("error encountered");
            });

          }

        });

      });
    </script>
</body>
</html>

<?php
}
}
?>

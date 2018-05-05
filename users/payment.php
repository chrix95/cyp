<?php
  session_start();
  // var_dump($_SESSION['details']);
  if (!isset($_SESSION['size']) || !isset($_SESSION['success'])) {
    $_SESSION['size'] = '';
    $_SESSION['success'] = '';
  } else {
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <title>Payment - Country Yellow Pages</title>
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
    <link rel="stylesheet" href="../assets/css/responsive.css">

    <link rel="stylesheet" href="../assets/css/style2.css">
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
									<li class="breadcrumb-item active">Payment</li>
								</ol>
							</div>
						</div>
					</div>
				</div><!-- nmbr-statistic-area -->
        <div class="row">
          <div class="col-md-3">

          </div>
          <div class="col-md-6">
            <div class="panel panel-default">
              <div class="panel-heading panelHead">
                <div class="panel-title">
                  <h4>Change Password</h4>
                </div>
              </div>
              <div class="panel-body">
                <form class="regForm">
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Current Password">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="New Password">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" placeholder="Confirm New Password">
                  </div>
                  <button type="submit" class="btn btn-primary findOut">Update Password</button>
                </form>
              </div><!--panel Body -->
            </div><!--panel -->
          </div>
          <div class="col-md-3">

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
?>

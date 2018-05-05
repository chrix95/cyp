<div class="main-nav-section">
  <div class="user-panel">
    <a href="" class="user-register-btn border-btn" data-toggle="modal" data-target="#myRegModal">
      <i class="fa fa-user-o" aria-hidden="true">
      </i>
      Register
    </a>
    <a href="" class="user-register-btn border-btn" data-toggle="modal" data-target="#myLoginModal">
      <i class="fa fa-user-o" aria-hidden="true">
      </i>
      Login
    </a>
  </div>
  <?php include "resources/modalForm.php"; ?>
  <nav class="navbar navbar-toggleable-md fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars navbar-toggle-btn" aria-hidden="true">
      </i>
    </button>
    <a class="navbar-brand" href="index.php">
      <img src="assets/images/logo.png" alt="img" class="img-responsive">
    </a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link" href="index.php">
            Home
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="about.php">
            About Us
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="contact.php">
            Contact
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="advert.php">
            Advertise with Us
          </a>
        </li>
      </ul>
    </div>
  </nav>
</div>

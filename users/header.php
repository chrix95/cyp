<div class="main-nav-section">
  <div class="user-panel">
    <a href="logout.php" class="user-register-btn border-btn">
      <i class="fa fa-user-o" aria-hidden="true">
      </i>
      Sign Out
    </a>
  </div>
  <?php include '../resources/modalForm.php';?>
  <nav class="navbar navbar-toggleable-md fixed-top">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars navbar-toggle-btn" aria-hidden="true">
      </i>
    </button>
    <a class="navbar-brand" href="index.php">
      <img src="../assets/images/logo.png" alt="img" class="img img-responsive center-block">
    </a>
    <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
      <?php
        if ($_SESSION['details']->updated == 0) {
          ?>
          <ul class="navbar-nav hidden-md hidden-lg dashNav">
            <li class="nav-item dropdown">
              <a class="nav-link" href="payment.php">
                Make Payment <span class="badge warning">Unpaid</span>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a href="" class="nav-link" data-toggle="modal" data-target="#mypasswordModal">
                Settings
              </a>
            </li>
          </ul>
        <?php
        } else {
        ?>
        <ul class="navbar-nav hidden-md hidden-lg dashNav">
          <li class="nav-item dropdown">
            <a class="nav-link" href="dashboard.php">
              Dashboard
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" href="payment.php">
              Make Payment <span class="badge warning">Paid</span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="modal" data-target="#mypasswordModal">
              Settings
            </a>
          </li>
        </ul>
        <?php
        }
       ?>
    </div>
  </nav>
</div>

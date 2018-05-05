<?php
  if ($_SESSION['details']->updated == 0) {
    ?>
    <ul>
      <li>
        <a href="payment.php">Make payment <span class="badge">Unpaid</span></a>
      </li>
      <li>
        <a href="" class="" data-toggle="modal" data-target="#mypasswordModal">
          Settings
        </a>
      </li>
    </ul>
  <?php

} else { ?>

  <ul>
    <li>
      <a href="dashboard.php">Dashboard</a>
    </li>
    <li>
      <a href="payment.php">Make payment <span class="badge success">Paid</span></a>
    </li>
    <li>
      <a href="" class="" data-toggle="modal" data-target="#mypasswordModal">
        Settings
      </a>
    </li>
  </ul>

  <?php
  }
 ?>

<?php

  try {

    include "connection.php";

    if (isset($_POST['registerBtn'])) {

      $nameOfOrg = htmlentities(strip_tags($_POST['nameOfOrg']));
      $natureOfOrg = htmlentities(strip_tags($_POST['natureOfOrg']));
      $addressOfOrg = htmlentities(strip_tags($_POST['addressOfOrg']));
      $telOfOrg = htmlentities(strip_tags($_POST['telOfOrg']));
      $faxOfOrg = htmlentities(strip_tags($_POST['faxOfOrg']));
      $emailOfOrg = htmlentities(strip_tags($_POST['emailOfOrg']));
      $websiteOfOrg = htmlentities(strip_tags($_POST['websiteOfOrg']));
      $advert = htmlentities(strip_tags($_POST['advert']));

      $to = 'engchris95@gmail.com';
      $subject = 'Client Registration';
      $body = "Hi, \n\n
              An intended client registered on our platform via the website.
              The details are: \n\n
              Name of Organization: " . $nameOfOrg ."\n\n
              Nature of Organization: " . $natureOfOrg . "\n\n
              Address of Organization: " . $addressOfOrg ."\n\n
              Telephone of Organization: " . $telOfOrg . "\n\n
              Fax of Organization: " . $faxOfOrg ."\n\n
              Email of Organization: " . $emailOfOrg . "\n\n
              Website of Organization: " . $websiteOfOrg . "\n\n
              Wants advert to appear: " . $advert . "\n\n
              Kindly treat as importanrt. Thank you." ;

      $sent = mail($to, $subject, $body , 'noreply@countryyellowpages.com');

      if ($sent) {
        echo "Email sent successfully";
      } else {
        echo "Mail not sent";
      }


    }

  } catch (Exception $e) {
    echo "Problem somewhere " .$e->getMessage();
  }


 ?>

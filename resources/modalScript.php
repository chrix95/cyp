<?php

  try {

    include "connection.php";

    // contact us form script processor
    if (isset($_POST['sendMessage'])) {
      // collect posted data
      $name = htmlentities(strip_tags(trim($_POST['name'])));
      $email = htmlentities(strip_tags(trim($_POST['email'])));
      $message = htmlentities(strip_tags(trim($_POST['message'])));

      $to = 'info@countryyellowpages.net';
      $subject = 'New Client Alert!!!';
      // $from = 'countryyellowpages.net';
      $body = "Sir / Madam, <br><br>
             Kindly attend to this message as a new client alert has been received.
             The details are: <br><br>
             Name: " . $name ." <br><br>
             Email: " . $email ." <br><br>
             Message: " . $message . " <br><br>
             Please ensure that clients are treated with high quality measures.";

      require 'index.php';

      if ($success) {
        echo "Message has been sent.";
      } else {
        echo "Server error, try again later";
      }

    }

    // registration modal form processor
    if (isset($_POST['submitReg'])) {
      // collect posted data
      $name = htmlentities(strip_tags(trim($_POST['name'])));
      $email = htmlentities(strip_tags(trim($_POST['email'])));
      $phone = htmlentities(strip_tags(trim($_POST['phone'])));
      $password = htmlentities(strip_tags(trim($_POST['password'])));
      $state = htmlentities(strip_tags(trim($_POST['state'])));
      $city = htmlentities(strip_tags(trim($_POST['city'])));
      $address = htmlentities(strip_tags(trim($_POST['address'])));

      // Confirm if email already exist
      $check_email = $conn->prepare("SELECT * from registration WHERE email=:email");
      $check_email->bindParam(":email", $email);
      $check_email->execute();
      $email_count = $check_email->rowCount();

      if ($email_count == 0 ) {

        // Confirm if phone number already exist
        $check_phone = $conn->prepare("SELECT * from registration WHERE phone=:phone");
        $check_phone->bindParam(":phone", $phone);
        $check_phone->execute();
        $phone_count = $check_phone->rowCount();

        if ($phone_count == 0) {

          // hash password using password_hash
          $hash_password = password_hash($password, PASSWORD_DEFAULT);

          // insert record into database
          $store = $conn->prepare("INSERT INTO registration (full_name, email, phone, password, state, city, address) VALUES (:full_name, :email, :phone, :password, :state, :city, :address)");
          $store->bindParam(":full_name", $name);
          $store->bindParam(":email", $email);
          $store->bindParam(":phone", $phone);
          $store->bindParam(":password", $hash_password);
          $store->bindParam(":state", $state);
          $store->bindParam(":city", $city);
          $store->bindParam(":address", $address);
          $success = $store->execute();

          if ($success) {

            echo "Registered successfully";

          } else {

            echo "Server error, try again later";

          }

        } else {

          echo "Phone number already registered";

        }

      } else {

        echo "Email address already exist";

      }

    }

    // registration modal form processor
    if (isset($_POST['submitLogin'])) {

      $email	= htmlentities(strip_tags(trim($_POST['email'])));
      $password = htmlentities(strip_tags(trim($_POST['password'])));

      // confirm if the email exist
      $query_email = $conn->prepare("SELECT * FROM registration WHERE email =:email");
      $query_email->bindParam(":email", $email);
      $query_email->execute();
      $check_email_exist = $query_email->rowCount();

      if ($check_email_exist == 1) {

        $get_details = $query_email->fetch(PDO::FETCH_OBJ);
        $retrieved_password = $get_details->password;

        $check_password = password_verify($password, $retrieved_password);

        if ($check_password) {

          session_start();
          $_SESSION['email'] = $email;
          $_SESSION['details'] = $get_details;
          $_SESSION['size'] = '';
          $_SESSION['success'] = '';

          if ($get_details->updated == 0) {
            echo "No payment yet";
          } else {
            echo "Login Successful. Please wait...";
          }

        } else {

          echo "Password incorrect";

        }

      } else {

        echo "Sorry, email doesnt exist";
      }

    }

    if (isset($_POST['submitPassword'])) {

      $email	= htmlentities(strip_tags(trim($_POST['email'])));
      $curpassword = htmlentities(strip_tags(trim($_POST['curpass'])));
      $newpassword = htmlentities(strip_tags(trim($_POST['newpass'])));

      // confirm if the email exist
      $query_email = $conn->prepare("SELECT * FROM registration WHERE email=:email");
      $query_email->bindParam(":email", $email);
      $query_email->execute();
      // fetch password
      $get_details = $query_email->fetch(PDO::FETCH_OBJ);
      $retrieved_password = $get_details->password;

      $check_password = password_verify($curpassword, $retrieved_password);

      if ($check_password) {

        // hash new password and update record
        $hashPassord = password_hash($newpassword, PASSWORD_DEFAULT);
        $update_password = $conn->prepare("UPDATE registration SET password=:password WHERE email=:email");
        $update_password->bindParam(":password", $hashPassord);
        $update_password->bindParam(":email", $email);
        $success = $update_password->execute();

        if ($success) {

          echo "Password changed successfully";

        } else {

          echo "Password change failed";

        }

      } else {

        echo "Current password incorrect";

      }

    }

    // advert form processor
    if (isset($_POST['submitAdvert'])) {
      // collect posted data
      $name = htmlentities(strip_tags(trim($_POST['name'])));
      $email = htmlentities(strip_tags(trim($_POST['email'])));
      $address = htmlentities(strip_tags(trim($_POST['address'])));
      $tel = htmlentities(strip_tags(trim($_POST['tel'])));
      $website = htmlentities(strip_tags(trim($_POST['website'])));

      $to = 'info@countryyellowpages.net';
      $subject = 'Advert Placement Information';
      // $from = 'countryyellowpages.net';
      $body = "Hi, <br><br>
             The following client requires to advertize his business on country yellow pages website.
             Kindly find the details below: <br><br>
             Name: " . $name ." <br><br>
             Email: " . $email ." <br><br>
             Address: " . $address ." <br><br>
             Telephone: " . $tel . " <br><br>
             Website: " . $website . " <br><br>

             Kindly contact client via mail or phone ASAP. Thank you.";

      require 'index.php';

      if ($success) {
        echo "Message has been sent.";
      } else {
        echo "Server error, try again later";
      }

    }

    // forgot password script
    if (isset($_POST['submitReset'])) {

		  $email = htmlentities(strip_tags(trim($_POST['email'])));
      $name = htmlentities(strip_tags(trim($_POST['name'])));

			$query_email = $conn->prepare("SELECT * FROM registration WHERE email =:email");
			$query_email->bindParam(":email", $email);
			$query_email->execute();
			$check_email_exist = $query_email->rowCount();

	    if ($check_email_exist == 1) {

        $query_name = $conn->prepare("SELECT * FROM registration WHERE full_name =:name");
  			$query_name->bindParam(":name", $name);
  			$query_name->execute();
  			$check_name_exist = $query_name->rowCount();

        if ($check_name_exist == 1) {

          $random_password = rand(10000000000,99999999999);
          $random_password = "CYP-".$random_password;

          $password = password_hash($random_password, PASSWORD_DEFAULT);

          $update_password = $conn->prepare("UPDATE registration SET password=:password WHERE email =:email");
          $update_password->bindParam(":password", $password);
          $update_password->bindParam(":email", $email);
          $update_password->execute();

          // send mail to email address
          $to = $email;
          $subject = 'CYP Password Recovery';
          $body = "Hi " .$name. ",<br><br>
                   We all forget our password most time, it's no big deal.\n\n
                   Your new login details are: <br><br>
                   Email: " . $email ."<br><br>
                   Password: " . $random_password . "<br><br>
                   Please log in with the details provided. And do not reply this mail." ;

			require 'Pindex.php';

			if ($success) {
				echo "Password sent to email";
			} else {

			}

        } else {

          echo "Company name matches no record";

        }

			} else {

				echo "Email matches no record";
			}

		}

  } catch (Exception $e) {
    echo "Problem somewhere " .$e->getMessage();
  }


 ?>

<?php

  try {

    session_start();

    include 'resources/connection.php';

    if (isset($_POST['searchbutton'])) {

      // retrieve all neccessary details
      $category = htmlentities(strip_tags($_POST['category']));
      $location = htmlentities(strip_tags($_POST['location']));
      $keyword = htmlentities(strip_tags($_POST['keyword']));
      $success;

      if (empty($keyword)) {

        // retrieve result even if keyword field is empty
        $get_details = $conn->prepare("SELECT * FROM contact WHERE companyLocation=:location && companyCategory=:category ORDER BY `companyName` ASC");
        $get_details->bindParam(":category", $category);
        $get_details->bindParam(":location", $location);

        if ($get_details->execute()) {

          $count = $get_details->rowCount();

          if ($count > 0) {

            $success = $get_details->fetchALL(PDO::FETCH_OBJ);
            $arraySize = count($success);

            $_SESSION['size'] = $arraySize;
            $_SESSION['success'] = $success;

            header("location: searchresult.php");

          } else {

            // echo "No record matches your search";
            header("location: searchresult.php?false=true");

          }

        } else {

          echo "Execution failed";

        }

      } else {

        // retrieve result if keyword field is not empty
        $get_details = $conn->prepare("SELECT * FROM contact WHERE companyName LIKE '$keyword%' && companyLocation=:location && companyCategory=:category ORDER BY `companyName` ASC");
        $get_details->bindParam(":category", $category);
        $get_details->bindParam(":location", $location);

        if ($get_details->execute()) {

          $count = $get_details->rowCount();

          if ($count > 0) {

            $success = $get_details->fetchALL(PDO::FETCH_OBJ);
            $arraySize = count($success);

            $_SESSION['size'] = $arraySize;
            $_SESSION['success'] = $success;

            header("location: searchresult.php");

          } else {

            // echo "No record matches your search";
            header("location: searchresult.php?false=true");

          }

        } else {

          echo "Execution failed";

        }

      }

    }

    if (isset($_POST['dashboardsearchbutton'])) {

      // retrieve all neccessary details
      $category = htmlentities(strip_tags($_POST['category']));
      $location = htmlentities(strip_tags($_POST['location']));
      $keyword = htmlentities(strip_tags($_POST['keyword']));
      $success;

      if (empty($keyword)) {

        // retrieve result even if keyword field is empty
        $get_details = $conn->prepare("SELECT * FROM contact WHERE companyLocation=:location && companyCategory=:category ORDER BY `companyName` ASC");
        $get_details->bindParam(":category", $category);
        $get_details->bindParam(":location", $location);

        if ($get_details->execute()) {

          $count = $get_details->rowCount();

          if ($count > 0) {

            $success = $get_details->fetchALL(PDO::FETCH_OBJ);
            $arraySize = count($success);

            $_SESSION['size'] = $arraySize;
            $_SESSION['success'] = $success;

            header("location: users/dashboard.php");

          } else {

            // echo "No record matches your search";
            header("location: users/dashboard.php?false=true");

          }

        } else {

          echo "Execution failed";

        }

      } else {

        // retrieve result if keyword field is not empty
        $get_details = $conn->prepare("SELECT * FROM contact WHERE companyName LIKE '$keyword%' && companyLocation=:location && companyCategory=:category ORDER BY `companyName` ASC");
        $get_details->bindParam(":category", $category);
        $get_details->bindParam(":location", $location);

        if ($get_details->execute()) {

          $count = $get_details->rowCount();

          if ($count > 0) {

            $success = $get_details->fetchALL(PDO::FETCH_OBJ);
            $arraySize = count($success);

            $_SESSION['size'] = $arraySize;
            $_SESSION['success'] = $success;

            header("location: users/dashboard.php");

          } else {

            // echo "No record matches your search";
            header("location: users/dashboard.php?false=true");

          }

        } else {

          echo "Execution failed";

        }

      }

    }

    if (isset($_POST['pay'])) {

      $email = htmlentities(strip_tags($_POST['email']));

      $update = $conn->prepare("UPDATE registration SET updated=:updated WHERE email=:email");
      $update->bindValue(":updated", 1);
      $update->bindParam(":email", $email);
      $success = $update->execute();

      if ($success) {
        $_SESSION['details']->updated = 1;
        echo "Payment Successful";
      } else {
        echo "Payment incomplete";
      }

    }

  } catch (Exception $e) {

    echo "Problem Detected ".$e->getMessage();

  }

 ?>

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
        $get_deatils = $conn->prepare("SELECT * FROM contact WHERE companyLocation=:location && companyCategory=:category ORDER BY `companyName` ASC");
        $get_deatils->bindParam(":category", $category);
        $get_deatils->bindParam(":location", $location);

        if ($get_deatils->execute()) {

          $count = $get_deatils->rowCount();

          if ($count > 0) {

            $success = $get_deatils->fetchALL(PDO::FETCH_OBJ);
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
        $get_deatils = $conn->prepare("SELECT * FROM contact WHERE companyName LIKE '$keyword%' && companyLocation=:location && companyCategory=:category ORDER BY `companyName` ASC");
        $get_deatils->bindParam(":category", $category);
        $get_deatils->bindParam(":location", $location);

        if ($get_deatils->execute()) {

          $count = $get_deatils->rowCount();

          if ($count > 0) {

            $success = $get_deatils->fetchALL(PDO::FETCH_OBJ);
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


  } catch (Exception $e) {

    echo "Problem Detected ".$e->getMessage();

  }

 ?>

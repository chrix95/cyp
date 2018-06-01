<?php
  require 'connection.php';
  $pull_category = $conn->prepare("SELECT DISTINCT `companyCategory` FROM `contact` WHERE 1 ORDER BY `companyCategory` ASC");
  $pull_category->execute();
  $result = $pull_category->fetchALL(PDO::FETCH_OBJ);
  // var_dump($result);
  foreach ($result as $key => $value) {
?>
  <option><?php echo $value->companyCategory;?></option>

<?php
  }
?>

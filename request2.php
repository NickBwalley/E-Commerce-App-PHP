<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>user Requisitions</title>
  </head>
  <body>
    <h2>Users Requests</h2>
    <table width="100%" border="1" style="border-collapse:collapse;">

    <?php
    $db = mysqli_connect('localhost', 'root', '', 'product');
    $sqlget = "SELECT*FROM product";
    $sqlget1 = "SELECT*FROM product01";


    $sqldata1 = mysqli_query($db, $sqlget1) or die('error getting data');
    echo "<table>";

    ?>
<?php
      while ($row = mysqli_fetch_array($sqldata1)) {

    echo "</br>";
    echo "***********************************";
    echo "</br>";


  echo "<strong>"."Requested Quantity:".$row['product_quantity']. "</strong>";
  echo "</br>";
  echo "<strong>"."(Request ID):".$row['product_id']. "</strong>";
  echo "<tr><td>";
  echo "***********************************";

  echo "<br>";
  echo "----------------------------------------------------------------------------------------------------------------------------------";
  }

?>
<br>
<a href="requisitions.php" style="color: red;">View user requisitions?</a>

  </body>
</html>

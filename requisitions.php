<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>user Requisitions</title>
  </head>
  <body>
    <h2>Users Requisitions</h2>
    <table width="100%" border="1" style="border-collapse:collapse;">

    <?php
    $db = mysqli_connect('localhost', 'root', '', 'product');
    $sqlget = "SELECT*FROM product";
    $sqlget1 = "SELECT*FROM product01";

    $sqldata = mysqli_query($db, $sqlget) or die('error getting data');
    $sqldata1 = mysqli_query($db, $sqlget1) or die('error getting data');
    echo "<table>";

    while ($row = mysqli_fetch_array($sqldata)) {?>
<?php
    echo "----------------------------------------------------------------------------------------------------------------------------------";
    echo "<tr><td>";

    echo "<h2>"."<strong>"."Product ID:".$row['product_id']. "</strong>"."</h2>";
    echo "<tr><td>";
    echo "<tr><td>";
    echo "<strong>"."Product Name:".$row['product_name']. "</strong>";
    echo "<tr><td>";
    echo "<tr><td>";
    echo "<strong>"."Product Price:".$row['product_price']. "</strong>";
    echo "<tr><td>";
    echo "<tr><td>";
    echo "<strong>"."Available Stock:".$row['product_qty']. "</strong>";
    echo "<tr><td>";
    echo "<tr><td>";

  }

  echo "<br>";
  echo "----------------------------------------------------------------------------------------------------------------------------------";
  echo "<br>";
  echo '<h3><a href="request2.php">#View All Users Requests</a><h3/>';
  echo "<br>";

  



?>
<h3><a href="index2.php" style="color: red;">#HomePage?</a><h3/>

  </body>
</html>

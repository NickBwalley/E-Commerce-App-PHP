<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>available products</title>
  </head>
  <body>
    <h2>View Available products</h2>
    <table width="100%" border="1" style="border-collapse:collapse;">

    <?php
    $db = mysqli_connect('localhost', 'root', '', 'product');
    $sqlget = "SELECT*FROM product";
    $sqldata = mysqli_query($db, $sqlget) or die('error getting data');
    echo "<table>";

    while ($row = mysqli_fetch_array($sqldata)) {?>
<?php echo "<tr><td>";

    echo $row['product_name'];
    echo "<tr><td>";
    echo $row['product_price'];
    echo "<tr><td>";
    
    }

?>
<br> <a href="index.php" style="color: red;">HomePage?</a>

  </body>
</html>

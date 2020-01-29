<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>available products</title>
  </head>
  <body>
    <h1>View Available products</h1>
    <table width="100%" border="1" style="border-collapse:collapse;">

    <?php
    $db = mysqli_connect('localhost', 'root', '', 'product');
    $sqlget = "SELECT*FROM product";
    $sqldata = mysqli_query($db, $sqlget) or die('error getting data');
    echo "<table>";

    while ($row = mysqli_fetch_array($sqldata)) {?>
      <?php echo "<tr><td>";
    echo "<tr><td>";
    echo "--------------------------------------------------------------------------------------------------------------------------------------------";
    echo "<strong>"."<h2>"."Product ID = ".$row['product_id']."<h2>"."</strong>";
    echo "<tr><td>";
    echo "<strong>"."<h2>".$row['product_name']."<h2>"."</strong>";
    echo "<tr><td>";
    echo "<strong>"."Price = ".$row['product_price']. "</strong>";
    echo "<tr><td>";
    echo "<strong>"."Stock quantity = ".$row['product_qty']. "</strong>";
    echo "<tr><td>";
    //display for the quantity left for the product that is in stock
    //display image in php from the database///////////////////////////////////////////////////
    $db=mysqli_connect("localhost","root","","product");
    $sql= "SELECT*FROM product where ";
    $results= mysqli_query($db, $sql);
    echo "<div id = 'img_div'>";
    echo "<img src='".$row['product_image']."' >";
    echo "</div>";
    ////////////////////////////////////////////////////////////////////////////
    echo "<tr><td>";
    echo $row['product_description'];
    echo "<tr><td>";
    echo "<br>";
    echo '<a href = "adminpurchase product.php">purchase product?</a>';
    echo "<br>";
    echo "<br>";
  }
    ?>


            <br> <a href="admdashboard.php" style="color: red;">HomePage?</a>

  </body>
</html>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>admviewusers</title>
  </head>
  <body>
    <h2>View Registered users</h2>
    <table width="100%" border="1" style="border-collapse:collapse;">

    <?php
    $db = mysqli_connect('localhost', 'root', '', 'multi_login');
    $sqlget = "SELECT*FROM multi_login";
    $sqldata = mysqli_query($db, $sqlget) or die('error getting data');
    echo "<table>";

    while ($row = mysqli_fetch_array($sqldata)) {?>
<?php echo "<tr><td>";
    echo "<strong>".$row['id'] . "</strong>";
    echo "<tr><td>";
    echo "<strong>".$row['email']. "</strong>";
    echo "<tr><td>";
    echo "<strong>".$row['user_type']. "</strong>";
    echo "<tr><td>";
    echo "----------------------------------------------------------------------------------------------------------------------------------";
    }

?>
<br>
<a href="index2.php" style="color: red;">HomePage?</a>

  </body>
</html>

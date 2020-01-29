
<div class="grid_10">
  <div class="box round first">
    <h2>Purchase product</h2>
    <div class="block">

    <form name="form1" action="" method="post">
     <table border="1">
       <tr>
         <td>Enter Quantity</td>
         <td><input type="text" name="pqty"> </td>
       </tr>
       <tr>
         <td>Enter Product ID</td>
         <td><input type="text" name="pID"> </td>
       </tr>



       <tr>
         <td colspan="2" align="center"> <input type="submit" name="submit01" value="purchase product" /> </td>
       </tr>
     </table>

    </form>


     <?php
     //sql  query to link to the database
    //////////////////////////////////////////////////////////
    if(isset($_POST["submit01"])){
      //connect to the database
        $db1=mysqli_connect("localhost","root","","product");
        $sql1 = "INSERT INTO product01 values('', $_POST[pqty],$_POST[pID])";
        mysqli_query($db1, $sql1);
      //create a natural join in to another table product03 to merge content in table1 and table2;
      //Start the session if already not started.
        
        function function_alert($message) {

            // Display the alert box
            echo "<script>alert('$message');</script>";
        }


        // Function call
        function_alert("your request has been sent successfully wait as request is being processed");


}

      ?>

<a href="admviewproduct.php">BACK TO VIEW PRODUCT?</a> <br>



  </div>

</div>

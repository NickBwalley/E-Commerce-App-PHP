 <?php


  ?>

<div class="grid_10">
  <div class="box round first">
    <h2>Add New Product</h2>
    <div class="block">

    <form name="form1" action="" method="post" enctype="multipart/form-data">
     <table border="1">
       <tr>
         <td>Product ID</td>
         <td><input type="text" name="pID"></td>
       </tr>

       <tr>
         <td>Product Name</td>
         <td><input type="text" name="pnm"></td>
       </tr>

       <tr>
         <td>Product Price</td>
         <td><input type="text" name="pprice"></td>
       </tr>

       <tr>
         <td>Product Quantity</td>
         <td><input type="text" name="pqty"> </td>
       </tr>

       <tr>
         <td>Product Image</td>
         <td><input type="file" name="pimage"></td>
                </tr>

       <tr>
         <td>Product Description</td>
         <td>
           <textarea name="pdesc" rows="10" cols="15"></textarea>
         </td>
       </tr>

       <tr>
         <td colspan="2" align="center"> <input type="submit" name="submit1" value="upload"> </td>

       </tr>
     </table>

    </form>
    <?php
    //if upload button is pressed
    if(isset($_POST["submit1"])){
      //path to store the uploaded image
      $target = "product_image/". basename($_FILES['pimage']['name']);
      //connect to the database
        $db=mysqli_connect("localhost","root","","product");
      //get all the submitted data from the form
      $image = $_FILES['pimage']['name'];
      //$text = $_POST['text'];

      $sql = "INSERT INTO product values('', '$_POST[pID]','$_POST[pnm]', $_POST[pprice], $_POST[pqty], '$target', '$_POST[pdesc]')";

      mysqli_query($db, $sql);
      //now lets move the uploaded image into the folder: images
      if (move_uploaded_file($_FILES['pimage']['tmp_name'], $target)) {
        $msg = "image uploaded successfully";
      }else {
        $msg = "There was a problem uploading image";
        }

      //alert message sent to inform user that data sent successfully
      function function_alert($message) {

          // Display the alert box
          echo "<script>alert('$message');</script>";
      }


      // Function call
      function_alert("Product successfully Uploaded..");


}



     ?>



<a href="admdashboard.php">BACK TO DASHBOARD?</a>


  </div>

</div>

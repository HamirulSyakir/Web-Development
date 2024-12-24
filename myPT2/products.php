<?php
  include_once 'products_crud.php';
?>


<!DOCTYPE html>
<html>
<head>
  <title>Syakir's Clothing : Home</title>
 <style>
    body {
      background-color:White;
    }
  </style>
</head>
<body>

<div align="center">
   <table width="100%" border="0" cellpadding="5">
  <tr>
    <td colspan="2" bgcolor= #faebd7 >
    <header>
      <center>
        <img src="logo.jpg" width="8%" height="8%"style="display:inline"> 
      </center>
  </header> 
  </td>
</tr>
</table>
</div>

<div align="center">
  <table width="100%" border="0" cellpadding="5">
    <tr>
      <td colspan="2" bgcolor="#71C9CE">
        <center>
          <a href="index.php" style="color: white; font-size: 22px;">Home  </a> |
          <a href="products.php" style="color: white; font-size: 22px;">Products  </a> |
          <a href="customers.php" style="color: white; font-size: 22px;">Customers  </a> |
          <a href="staffs.php" style="color: white; font-size: 22px;">Staffs  </a> |
          <a href="orders.php" style="color: white; font-size: 22px;">Orders  </a>|
        </center>
      </td>
    </tr>
  </table>
    <hr>
    <form action="products.php" method="post">
      Product ID
       <input name="pid" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['FLD_PRODUCT_ID']; ?>"> <br>
      Name
       <input name="name" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['FLD_PRODUCT_NAME']; ?>"> <br>
      Price
       <input name="price" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['FLD_PRICE']; ?>"> <br>
      Brand
      <select name="brand">
        <option value="Carhartt"<?php if(isset($_GET['edit'])) if($editrow['FLD_BRAND']=="CARHARTT") echo "selected"; ?>>CARHARTT</option>
        <option value="Savage"<?php if(isset($_GET['edit'])) if($editrow['FLD_BRAND']=="SAVAGE") echo "selected"; ?>>SAVAGE</option>
        <option value="ADIDAS"<?php if(isset($_GET['edit'])) if($editrow['FLD_BRAND']=="ADIDIAS") echo "selected"; ?>>ADIDAS</option>
        <option value="PEAK KL"<?php if(isset($_GET['edit'])) if($editrow['FLD_BRAND']=="PEAK KL") echo "selected"; ?>>PEAK KL</option>
        <option value="SUPREME"<?php if(isset($_GET['edit'])) if($editrow['FLD_BRAND']=="SUPREME") echo "selected"; ?>>SUPREME</option>
        <option value="SUPERSUNDAY"<?php if(isset($_GET['edit'])) if($editrow['FLD_BRAND']=="SUPERSUNDAY") echo "selected"; ?>>SUPERSUNDAY</option>
        <option value="NIKE"<?php if(isset($_GET['edit'])) if($editrow['FLD_BRAND']=="NIKE") echo "selected"; ?>>NIKE</option>
      </select> <br>
      
      Size
       <select name="size">
        <option value="S"<?php if(isset($_GET['edit'])) if($editrow['FLD_SIZE']=="S") echo "selected"; ?>>S</option>
        <option value="M"<?php if(isset($_GET['edit'])) if($editrow['FLD_SIZE']=="M") echo "selected"; ?>>M</option>
        <option value="L"<?php if(isset($_GET['edit'])) if($editrow['FLD_SIZE']=="L") echo "selected"; ?>>L</option>
        <option value="XL"<?php if(isset($_GET['edit'])) if($editrow['FLD_SIZE']=="XL") echo "selected"; ?>>XL</option>
        <option value="XXL"<?php if(isset($_GET['edit'])) if($editrow['FLD_SIZE']=="XXL") echo "selected"; ?>>XXL</option>
      </select> <br>

      Colour
       <input name="colour" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['FLD_COLOUR']; ?>"> <br>

      Stock
      <input name="stock" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['FLD_STOCK']; ?>"> <br>
      <?php if (isset($_GET['edit'])) { ?>
      <input type="hidden" name="oldpid" value="<?php echo $editrow['FLD_PRODUCT_ID']; ?>">
      <button type="submit" name="update">Update</button>
      <?php } else { ?>
      <button type="submit" name="create">Create</button>
      <?php } ?>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table border="1">
      <tr>
        <td>Product ID</td>
        <td>Name</td>
        <td>Price</td>
        <td>Brand</td>
        <td>Colour</td>
        <td></td>
      </tr>
      <?php
      // Read
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $conn->prepare("SELECT * FROM tbl_products_a189563_pt2");
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $readrow) {
      ?>   
      <tr>
        <td><?php echo $readrow['FLD_PRODUCT_ID']; ?></td>
        <td><?php echo $readrow['FLD_PRODUCT_NAME']; ?></td>
        <td><?php echo $readrow['FLD_PRICE']; ?></td>
        <td><?php echo $readrow['FLD_BRAND']; ?></td>
       
        <td><?php echo $readrow['FLD_COLOUR']; ?></td>
        <td>
          <a href="products_details.php?pid=<?php echo $readrow['FLD_PRODUCT_ID']; ?>">Details</a>
          <a href="products.php?edit=<?php echo $readrow['FLD_PRODUCT_ID']; ?>">Edit</a>
          <a href="products.php?delete=<?php echo $readrow['FLD_PRODUCT_ID']; ?>" onclick="return confirm('Are you sure to delete?');">Delete</a>
        </td>
      </tr>
      <?php
      }
      $conn = null;
      ?>
 
    </table>
  </center>
</body>
</html>
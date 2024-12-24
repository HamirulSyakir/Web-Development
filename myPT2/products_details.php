<?php
  include_once 'database.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Syakir's Clothing : Home</title>
 <style>
    body {
      background-color: #FFFFFF;
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
    <?php
    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM tbl_products_a189563_pt2 WHERE FLD_PRODUCT_ID= :pid");
      $stmt->bindParam(':pid', $pid, PDO::PARAM_STR);
      $pid = $_GET['pid'];
      $stmt->execute();
      $readrow = $stmt->fetch(PDO::FETCH_ASSOC);
      }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    ?>
    Product ID: <?php echo $readrow['FLD_PRODUCT_ID'] ?> <br>
    Name: <?php echo $readrow['FLD_PRODUCT_NAME'] ?> <br>
    Price: RM <?php echo $readrow['FLD_PRICE'] ?> <br>
    Brand: <?php echo $readrow['FLD_BRAND'] ?> <br>
    Size: <?php echo $readrow['FLD_SIZE'] ?> <br>
    Colour: <?php echo $readrow['FLD_COLOUR'] ?> <br>
    Quantity: <?php echo $readrow['FLD_STOCK'] ?> <br>
    <img src="products/<?php echo $readrow['FLD_PRODUCT_ID']; ?>.jpg" width="30%" height="30%">
  </center>
</body>
</html>
<?php
  include_once 'orders_details_crud.php';
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
        $stmt = $conn->prepare("SELECT * FROM tbl_orders_a189563_pt2, tbl_staffs_a189563_pt2,
          tbl_customers_a189563_pt2 WHERE
          tbl_orders_a189563_pt2.fld_staff_id = tbl_staffs_a189563_pt2.fld_staff_id AND
          tbl_orders_a189563_pt2.fld_customer_id = tbl_customers_a189563_pt2.fld_customer_id AND
          ORDER_ID = :oid");
      $stmt->bindParam(':oid', $oid, PDO::PARAM_STR);
        $oid = $_GET['oid'];
      $stmt->execute();
      $readrow = $stmt->fetch(PDO::FETCH_ASSOC);
      }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
    ?>
    Order ID: <?php echo $readrow['ORDER_ID'] ?> <br>
    Order Date: <?php echo $readrow['ORDER_DATE'] ?> <br>
    Staff: <?php echo $readrow['fld_staff_name']  ?> <br>
    Customer: <?php echo $readrow['fld_customer_name']?> <br>
    <hr>
    <form action="orders_details.php" method="post">
      Product
      <select name="pid">
      <?php
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
      foreach($result as $productrow) {
      ?>
        <option value="<?php echo $productrow['FLD_PRODUCT_ID']; ?>"><?php echo $productrow['FLD_BRAND']." ".$productrow['FLD_PRODUCT_NAME']; ?></option>
      <?php
      }
      $conn = null;
      ?>
      </select>
      Quantity
      <input name="quantity" type="text">
      <input name="oid" type="hidden" value="<?php echo $readrow['ORDER_ID'] ?>">
      <button type="submit" name="addproduct">Add Product</button>
      <button type="reset">Clear</button>
 
    </form>
    <hr>
    <table border="1">
      <tr>
        <td>Order Detail ID</td>
        <td>Product</td>
        <td>Quantity</td>
        <td></td>
      </tr>
      <?php
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $conn->prepare("SELECT * FROM tbl_orders_details_a189563_pt2,tbl_products_a189563_pt2 WHERE
            tbl_orders_details_a189563_pt2.FLD_PRODUCT_ID = tbl_products_a189563_pt2.FLD_PRODUCT_ID AND
          ORDER_ID = :oid");
          $stmt->bindParam(':oid', $oid, PDO::PARAM_STR);
          $oid = $_GET['oid'];
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $detailrow) {
      ?>
      <tr>
        <td><?php echo $detailrow['FLD_ORDER_DETAIL_ID']; ?></td>
        <td><?php echo $detailrow['FLD_PRODUCT_NAME']; ?></td>
        <td><?php echo $detailrow['FLD_QUANTITY']; ?></td>
        <td>
          <a href="orders_details.php?delete=<?php echo $detailrow['FLD_ORDER_DETAIL_ID']; ?>&oid=<?php echo $_GET['oid']; ?>" onclick="return confirm('Are you sure to delete?');">Delete</a>
        </td>
      </tr>
      <?php
      }
      $conn = null;
      ?>
    </table>
    <hr>
    <a href="invoice.php?oid=<?php echo $_GET['oid']; ?>" target="_blank">Generate Invoice</a>
 
  </center>
</body>
</html>
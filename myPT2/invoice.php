
  <?php
  include_once 'database.php';
?>
 
<!DOCTYPE html>
<html>
<head>
  <title>Syakir's Clothing : Invoice</title>
   <style>
    body {
      background-color: White;
    }
  </style>
</head>
<body>
  <center>
    Syakir's Clothing<br>
  40, Jalan BolaSepak 5/9<br>
   Tadisma Business Park<br>
      40100 Shah Alam<br>
         Selangor <br>
    <hr>
    <?php
    try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare("SELECT * FROM tbl_orders_a189563_pt2, tbl_staffs_a189563_pt2,
        tbl_customers_a189563_pt2, tbl_orders_details_a189563_pt2 WHERE
        tbl_orders_a189563_pt2.fld_staff_id = tbl_staffs_a189563_pt2.fld_staff_id AND
        tbl_orders_a189563_pt2.fld_customer_id = tbl_customers_a189563_pt2.fld_customer_id AND
        tbl_orders_a189563_pt2.ORDER_ID = tbl_orders_details_a189563_pt2.ORDER_ID AND
        tbl_orders_a189563_pt2.ORDER_ID = :oid");
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
    Order ID: <?php echo $readrow['ORDER_ID'] ?>
    Order Date: <?php echo $readrow['ORDER_DATE'] ?>
    <hr>
    | Staff: <?php echo $readrow['fld_staff_name'] ?>
    | Customer ID: <?php echo $readrow['fld_customer_id'] ?>
    | Date: <?php echo date("d M Y"); ?>
    <hr>
    <table border="1">
      <tr>
        <td>No</td>
        <td>Product</td>
        <td>Quantity</td>
        <td>Price(RM)/Unit</td>
        <td>Total(RM)</td>
      </tr>
      <?php
      $grandtotal = 0;
      $counter = 1;
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $conn->prepare("SELECT * FROM tbl_orders_details_a189563_pt2,tbl_products_a189563_pt2 where 
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
        <td><?php echo $counter; ?></td>
        <td><?php echo $detailrow['FLD_PRODUCT_NAME']; ?></td>
        <td><?php echo $detailrow['FLD_QUANTITY']; ?></td>
        <td><?php echo $detailrow['FLD_PRICE']; ?></td>
        <td><?php echo $detailrow['FLD_PRICE']*$detailrow['FLD_QUANTITY']; ?></td>
      </tr>
      <?php
        $grandtotal = $grandtotal + $detailrow['FLD_PRICE']*$detailrow['FLD_QUANTITY'];
        $counter++;
      } // while
      $conn = null;
      ?>
      <tr>
        <td colspan="4" align="right">Grand Total</td>
        <td><?php echo $grandtotal ?></td>
      </tr>
    </table>
    <hr>
    Computer-generated invoice. No signature is required.
 
  </center>
</body>
</html>
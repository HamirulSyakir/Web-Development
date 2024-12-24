<?php
  include_once 'orders_crud.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Syakir's Clothing : Home</title>
 <style>
    body {
      background-color: White;
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
    <form action="orders.php" method="post">
     Order ID
      <input name="oid" type="text"  value="<?php if(isset($_GET['edit'])) echo $editrow['ORDER_ID']; ?>"> <br>
      Order Date
      <input name="orderdate" type="datetime-local"  value="<?php if(isset($_GET['edit'])) echo $editrow['ORDER_DATE']; ?>"> <br>
      Staff
      <select name="sid">
      <?php
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $conn->prepare("SELECT * FROM tbl_staffs_a189563_pt2");
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $staffrow) {
      ?>
        <?php if((isset($_GET['edit'])) && ($editrow['fld_staff_id']==$staffrow['fld_staff_id'])) { ?>
          <option value="<?php echo $staffrow['fld_staff_id']; ?>" selected><?php echo $staffrow['fld_staff_name'];?></option>
        <?php } else { ?>
          <option value="<?php echo $staffrow['fld_staff_id']; ?>"><?php echo $staffrow['fld_staff_name'];?></option>
        <?php } ?>
      <?php
      } // while
      $conn = null;
      ?> 
      </select> <br>
      Customer
      <select name="cid">
      <?php
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $conn->prepare("SELECT * FROM tbl_customers_a189563_pt2");
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $custrow) {
      ?>
        <?php if((isset($_GET['edit'])) && ($editrow['fld_customer_id']==$custrow['fld_customer_id'])) { ?>
          <option value="<?php echo $custrow['fld_customer_id']; ?>" selected><?php echo $custrow['fld_customer_name']?></option>
        <?php } else { ?>
          <option value="<?php echo $custrow['fld_customer_id']; ?>"><?php echo $custrow['fld_customer_name']?></option>
        <?php } ?>
      <?php
      } // while
      $conn = null;
      ?> 
      </select> <br>
      <?php if (isset($_GET['edit'])) { ?>
      <button type="submit" name="update">Update</button>
      <?php } else { ?>
      <button type="submit" name="create">Create</button>
      <?php } ?>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table border="1">
      <tr>
        <td>Order ID</td>
        <td>Order Date</td>
        <td>Staff</td>
        <td>Customer</td>
        <td></td>
      </tr>
      <?php
      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM tbl_orders_a189563_pt2, tbl_staffs_a189563_pt2, tbl_customers_a189563_pt2 WHERE ";
        $sql = $sql."tbl_orders_a189563_pt2.fld_staff_id = tbl_staffs_a189563_pt2.fld_staff_id and ";
        $sql = $sql."tbl_orders_a189563_pt2.fld_customer_id= tbl_customers_a189563_pt2.fld_customer_id";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
      }
      catch(PDOException $e){
            echo "Error: " . $e->getMessage();
      }
      foreach($result as $orderrow) {
      ?>
      <tr>
        <td><?php echo $orderrow['ORDER_ID']; ?></td>
        <td><?php echo $orderrow['ORDER_DATE']; ?></td>
        <td><?php echo $orderrow['fld_staff_name']; ?></td>
        <td><?php echo $orderrow['fld_customer_name']; ?></td>
        <td>
          <a href="orders_details.php?oid=<?php echo $orderrow['ORDER_ID']; ?>">Details</a>
          <a href="orders.php?edit=<?php echo $orderrow['ORDER_ID']; ?>">Edit</a>
          <a href="orders.php?delete=<?php echo $orderrow['ORDER_ID']; ?>" onclick="return confirm('Are you sure to delete?');">Delete</a>
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
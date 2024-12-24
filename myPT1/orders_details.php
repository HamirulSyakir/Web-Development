<!DOCTYPE html>
<html>
<head>
  <title>Syakir's Clothing : Order Details</title>
  <style>
    body {
      background-color: AntiqueWhite;
 
    }
  </style>
</head>
<body>
  <center>
    <a href="index.php">Home</a> |
    <a href="products.php">Products</a> |
    <a href="customers.php">Customers</a> |
    <a href="staffs.php">Staffs</a> |
    <a href="orders.php">Orders</a>
    <hr>
    Order ID: D-001<br>
    Customer: B102 <br>
    Staff: S101 <br>
    Order Date: 31/1/2023 <br>
    <hr>
    <form action="orders_details.php" method="post">
      Product
      <select name="pid">
        <option value="BK011">PEAK KL X SNEAKER LAH</option>
        <option value="JQ3232">SCRAWL SCRIPT TEE</option>
        <option value="P011">EMBROIDERY TEE</option>
        <option value="H022">PEAK KL X GAWKY</option>
      </select>
      Quantity
      <input name="quantity" type="text">
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
      <tr>
        <td>D-001</td>
        <td>PEAK KL X SNEAKER LAH</td>
        <td>2</td>
        <td>
          <a href="orders_details.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>D-001</td>
        <td>SCRAWL SCRIPT TEE</td>
        <td>3</td>
        <td>
          <a href="orders_details.php">Delete</a>
        </td>
      </tr>
    </table>
    <hr>
    <a href="invoice.php" target="_blank">Generate Invoice</a>
  </center>
</body>
</html>
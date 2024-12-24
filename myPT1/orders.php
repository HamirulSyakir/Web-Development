<!DOCTYPE html>
<html>
<head>
  <title>Syakir's Clothing : Orders</title>
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
    <form action="orders.php" method="post">
      Order ID
      <input name="oid" type="text" disabled> <br>
      Order Date
      <input name="orderdate" type="date" disabled> <br>
      Staff
      <select name="sid">
        <option value="S101">SYAKIR</option>
        <option value="S102">ALI</option>
        <option value="S103">ABU</option>
      </select> <br>
      Customer
      <select name="cid">
        <option value="B101">PHUA CHUA KANG</option>
        <option value="B102">SAFAWI RASYID</option>
        <option value="B103">LEONEL MESSI</option>
      </select> <br>
      <button type="submit" name="create">Create</button>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table border="1">
      <tr>
        <td>Order ID</td>
        <td>Customer ID</td>
        <td>Staff ID</td>
        <td>Order Date</td>
        <td></td>
      </tr>
      <tr>
        <td>D-001</td>
        <td>B102</td>
        <td>S101</td>
        <td>31/1/2023</td>
        <td>
          <a href="orders_details.php">Details</a>
          <a href="orders.php">Edit</a>
          <a href="orders.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>D-002</td>
        <td>B101</td>
        <td>S101</td>
        <td>30/1/2023</td>
        <td>
          <a href="orders_details.php">Details</a>
          <a href="orders.php">Edit</a>
          <a href="orders.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>D-003</td>
        <td>B101</td>
        <td>S101</td>
        <td>29/1/2023</td>
        <td>
          <a href="orders_details.php">Details</a>
          <a href="orders.php">Edit</a>
          <a href="orders.php">Delete</a>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>
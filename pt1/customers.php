<!DOCTYPE html>
<html>
<head>
  <title>Syakir's Clothing : Customers</title>
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
    <form action="customers.php" method="post">
      Customer ID
      <input name="cid" type="text"> <br>
      Name
      <input name="name" type="text"> <br>
      Phone Number
      <input name="phone" type="text"> <br>
      <button type="submit" name="create">Create</button>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table border="1">
      <tr>
        <td>Customer ID</td>
        <td>Name</td>
        <td>Phone Number</td>
        <td></td>
      </tr>
      <tr>
        <td>B101</td>
        <td>PHUA CHUA KANG</td>
        <td>+6012-755 7890</td>
        <td>
          <a href="customers.php">Edit</a>
          <a href="customers.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>B102</td>
        <td>SAFAWI RASYID</td>
        <td>+6016-722 6501</td>
        <td>
          <a href="customers.php">Edit</a>
          <a href="customers.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>B103</td>
        <td>LEONEL MESSI</td>
        <td>+6019-766 2543</td>
        <td>
          <a href="customers.php">Edit</a>
          <a href="customers.php">Delete</a>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>
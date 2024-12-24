<!DOCTYPE html>
<html>
<head>
  <title>Syakir's Clothing : Staffs</title>
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
    <form action="staffs.php" method="post">
      Staff ID
      <input name="sid" type="text"> <br>
      Name
      <input name="fname" type="text"> <br>
      Phone Number
      <input name="phone" type="text"> <br>
  
      <button type="submit" name="create">Create</button>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table border="1">
      <tr>
        <td>Staff ID</td>
        <td>Name</td>
        <td>Phone Number</td>
        
        <td></td>
      </tr>
      <tr>
        <td>S101</td>
        <td>SYAKIR</td>
        <td>+6011-6501 0135</td>
        <td>
          <a href="staffs.php">Edit</a>
          <a href="staffs.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>S102</td>
        <td>ALI</td>
        <td>+6019-712 2027</td>
        <td>
          <a href="staffs.php">Edit</a>
          <a href="staffs.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>S103</td>
        <td>ABU</td>
        <td>+6010-888 3232</td>
        <td>
          <a href="staffs.php">Edit</a>
          <a href="staffs.php">Delete</a>
        </td>
      </tr>
      
    </table>
  </center>
</body>
</html>
<?php
  include_once 'staffs_crud.php';
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
    <form action="staffs.php" method="post">
      Staff ID
      <input name="sid" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_id']; ?>"> <br>
      Full Name
      <input name="name" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_name']; ?>"> <br>
      Phone Number
      <input name="phone" type="text" value="<?php if(isset($_GET['edit'])) echo $editrow['fld_staff_phone_num']; ?>"> <br>
      <?php if (isset($_GET['edit'])) { ?>
      <input type="hidden" name="oldsid" value="<?php echo $editrow['fld_staff_id']; ?>">
      <button type="submit" name="update">Update</button>
      <?php } else { ?>
      <button type="submit" name="create">Create</button>
      <?php } ?>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table border="1">
      <tr>
        <td>Staff ID</td>
        <td>Full Name</td>
        <td>Phone Number</td>
        <td></td>
      </tr>
      <?php
      // Read
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
      foreach($result as $readrow) {
      ?>
      <tr>
        <td><?php echo $readrow['fld_staff_id']; ?></td>
        <td><?php echo $readrow['fld_staff_name']; ?></td>
        <td><?php echo $readrow['fld_staff_phone_num']; ?></td>
        <td>
          <a href="staffs.php?edit=<?php echo $readrow['fld_staff_id']; ?>">Edit</a>
          <a href="staffs.php?delete=<?php echo $readrow['fld_staff_id']; ?>" onclick="return confirm('Are you sure to delete?');">Delete</a>
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
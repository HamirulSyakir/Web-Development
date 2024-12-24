<!DOCTYPE html>
<html>
<head>
  <title>Syakir's Clothing : Products</title>
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
    <form action="products.php" method="post">
      Product ID
      <input name="pid" type="text"> <br>
      Name
      <input name="name" type="text"> <br>
      Price
      <input name="price" type="text"> <br>
      Brand
      <select name="brand">
        <option value="Carhartt">CARHARTT</option>
        <option value="Savage">SAVAGE</option>
        <option value="ADIDAS">ADIDAS</option>
        <option value="PEAK KL">PEAK KL</option>
        <option value="SUPREME">SUPREME</option>
        <option value="SUPERSUNDAY">SUPERSUNDAY</option>
        <option value="NIKE">NIKE</option>
      </select> <br>
      
      Size
      <input name="size" type="text"> <br>

      Colour
      <input name="colour" type="text"> <br>


      Stock
      <input name="quantity" type="text"> <br>
      <button type="submit" name="create">Create</button>
      <button type="reset">Clear</button>
    </form>
    <hr>
    <table border="1">
      <tr>
        <td>Product ID</td>
        <td>Name</td>
        <td>Price(RM)</td>
        <td>Brand</td>
        <td></td>
      </tr>
      <tr>
        <td>BK011</td>
        <td>PEAK KL X SNEAKERLAH</td>
        <td>500.00</td>
        <td>PEAK KL</td>
        <td>
          <a href="products_details.php">Details</a>
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>JQ3232</td>
        <td>SCRAWL SCRIPT TEE</td>
        <td>289.90</td>
        <td>CARHARTT</td>
        <td>
          
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>9507W</td>
        <td>SVG X DDYHD X KRTKL</td>
        <td>400.00</td>
        <td>SAVAGE</td>
        <td>
          
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>P011</td>
        <td>EMBROIDERY TEE</td>
        <td>250.00</td>
        <td>CARHARTT</td>
        <td>
          
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>H022</td>
        <td>PEAK KL X GAWKY</td>
        <td>300.00</td>
        <td>PEAK KL</td>
        <td>
          
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>AS133</td>
        <td>SUPREME X TIFFANY & CO.BOX LOGO T-SHIRT/TEE</td>
        <td>200.00</td>
        <td>SUPREME</td>
        <td>
          
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>AS131</td>
        <td>ADIDAS JAPAN JERSEY</td>
        <td>200.00</td>
        <td>ADIDAS</td>
        <td>
          
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>RSE337</td>
        <td>NIKE TSHIRT DONT LOSE BY A HARE</td>
        <td>200.00</td>
        <td>NIKE</td>
        <td>
          
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>RSQ331</td>
        <td>PREMIUM ESSENTIALS TEE</td>
        <td>200.00</td>
        <td>ADIDAS</td>
        <td>
          
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
      <tr>
        <td>AS142</td>
        <td>HOMEBOISXSUPERSUNDAY</td>
        <td>500.00</td>
        <td>SUPERSUNDAY</td>
        <td>
          
          <a href="products.php">Edit</a>
          <a href="products.php">Delete</a>
        </td>
      </tr>
    </table>
  </center>
</body>
</html>
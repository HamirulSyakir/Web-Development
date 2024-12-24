<?php
  include_once 'products_crud.php';
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Syakir's Clothing : Home</title>
  <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 <
</head>
<body>

   <?php include_once 'nav_bar.php'; ?>
 
<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <div class="page-header">
        <h2>Create New Product</h2>
      </div>

    <form action="products.php" method="post">
     <div class="form-group">
          <label for="productid" class="col-sm-3 control-label">ID</label>
          <div class="col-sm-9">
       <input name="pid" type="text" class="form-control" id="productid" placeholder="Product ID" value="<?php if(isset($_GET['edit'])) echo $editrow['FLD_PRODUCT_ID']; ?>" required>
     </div>
        </div>

      <div class="form-group">
          <label for="productname" class="col-sm-3 control-label">Name</label>
          <div class="col-sm-9">
        <input name="name" type="text" class="form-control" id="productname" placeholder="Product Name" value="<?php  if(isset($_GET['edit'])) echo $editrow['FLD_PRODUCT_NAME']; ?>" required>
      </div>
        </div>

        <div class="form-group">
          <label for="price" class="col-sm-3 control-label">Price</label>
          <div class="col-sm-9">
       <input name="price" type="number" class="form-control" id="productprice" placeholder="Product Price" value="<?php if(isset($_GET['edit'])) echo $editrow['FLD_PRICE']; ?>" min="0.0" step="0.01" required>
        </div>
        </div>
      <div class="form-group">
          <label for="type" class="col-sm-3 control-label">Brand</label>
          <div class="col-sm-9">
          <select name="brand" class="form-control" id="brand" required>
            <option value="">Please select</option>
        <option value="Carhartt"<?php if(isset($_GET['edit'])) if($editrow['FLD_BRAND']=="CARHARTT") echo "selected"; ?>>CARHARTT</option>
        <option value="Savage"<?php if(isset($_GET['edit'])) if($editrow['FLD_BRAND']=="SAVAGE") echo "selected"; ?>>SAVAGE</option>
        <option value="ADIDAS"<?php if(isset($_GET['edit'])) if($editrow['FLD_BRAND']=="ADIDIAS") echo "selected"; ?>>ADIDAS</option>
        <option value="PEAK KL"<?php if(isset($_GET['edit'])) if($editrow['FLD_BRAND']=="PEAK KL") echo "selected"; ?>>PEAK KL</option>
        <option value="SUPREME"<?php if(isset($_GET['edit'])) if($editrow['FLD_BRAND']=="SUPREME") echo "selected"; ?>>SUPREME</option>
        <option value="SUPERSUNDAY"<?php if(isset($_GET['edit'])) if($editrow['FLD_BRAND']=="SUPERSUNDAY") echo "selected"; ?>>SUPERSUNDAY</option>
        <option value="NIKE"<?php if(isset($_GET['edit'])) if($editrow['FLD_BRAND']=="NIKE") echo "selected"; ?>>NIKE</option>
      </select> 
      </div>
        </div> 

      
   <div class="form-group">
          <label for="type" class="col-sm-3 control-label">Size</label>
          <div class="col-sm-9">
          <select name="size" class="form-control" id="size" required>
            <option value="">Please select</option>
        <option value="S"<?php if(isset($_GET['edit'])) if($editrow['FLD_SIZE']=="S") echo "selected"; ?>>S</option>
        <option value="M"<?php if(isset($_GET['edit'])) if($editrow['FLD_SIZE']=="M") echo "selected"; ?>>M</option>
        <option value="L"<?php if(isset($_GET['edit'])) if($editrow['FLD_SIZE']=="L") echo "selected"; ?>>L</option>
        <option value="XL"<?php if(isset($_GET['edit'])) if($editrow['FLD_SIZE']=="XL") echo "selected"; ?>>XL</option>
        <option value="XXL"<?php if(isset($_GET['edit'])) if($editrow['FLD_SIZE']=="XXL") echo "selected"; ?>>XXL</option>
      </select> 
       </div>
        </div> 

      <div class="form-group">
          <label for="description" class="col-sm-3 control-label">Colour</label>
          <div class="col-sm-9">
        <input name="colour" type="text" class="form-control" id="colour" placeholder="colour" value="<?php if(isset($_GET['edit'])) echo $editrow['FLD_COLOUR']; ?>" required>
</div>
      </div>

      <div class="form-group">
          <label for="stock" class="col-sm-3 control-label">Quantity</label>
          <div class="col-sm-9">
          <input name="stock" type="text" class="form-control" id="stock" placeholder="Stock" value="<?php if(isset($_GET['edit'])) echo $editrow['FLD_STOCK']; ?>" required>
        </div>
      </div>
      <div class="form-group">
          <div class="col-sm-offset-3 col-sm-9">
          <?php if (isset($_GET['edit'])) { ?>
          <input type="hidden" name="oldpid" value="<?php echo $editrow['FLD_PRODUCT_ID']; ?>">

          <button class="btn btn-default" type="submit" name="update"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update</button>
          <?php } else { ?>
          <button class="btn btn-default" type="submit" name="create"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create</button>
          <?php } ?>
          <button class="btn btn-default" type="reset"><span class="glyphicon glyphicon-erase" aria-hidden="true"></span> Clear</button>
        </div>
      </div>
    </form>
    </div>
  </div>
     <div class="row">
  <div class="col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8">
    <div class="page-header">
      <h2>Products List</h2>
    </div>
    <div class="table-responsive">
       <table class="table table-striped table-bordered">
        <tr>
          <th style="width: 10%; text-align: center;">Product ID</th>
          <th style="width: 29%; text-align: center;">Name</th>
          <th style="text-align: center;">Price</th>
          <th style="text-align: center;">Brand</th>
          <th style="text-align: center;">Size</th>
          <th style="text-align: center;">Colour</th>
          <th style="text-align: center;">Quantity</th>
          <th></th>
        </tr>
        <?php
        // Read
        $per_page = 5;
        if (isset($_GET["page"]))
          $page = $_GET["page"];
        else
          $page = 1;
        $start_from = ($page - 1) * $per_page;
        try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $stmt = $conn->prepare("select * from tbl_products_a189563_pt2 LIMIT $start_from, $per_page");
          $stmt->execute();
          $result = $stmt->fetchAll();
        } catch (PDOException $e) {
          echo "Error: " . $e->getMessage();
        }
        foreach ($result as $readrow) {
        ?>
          <tr>
            <td><?php echo $readrow['FLD_PRODUCT_ID']; ?></td>
            <td><?php echo $readrow['FLD_PRODUCT_NAME']; ?></td>
            <td><?php echo $readrow['FLD_PRICE']; ?></td>
            <td><?php echo $readrow['FLD_BRAND']; ?></td>
            <td><?php echo $readrow['FLD_SIZE']; ?></td>
            <td><?php echo $readrow['FLD_COLOUR']; ?></td>
            <td><?php echo $readrow['FLD_STOCK']; ?></td>
            <td style="width: 16%">
              <a href="products_details.php?pid=<?php echo $readrow['FLD_PRODUCT_ID']; ?>" class="btn btn-warning btn-xs" role="button">Details</a>
              <a href="products.php?edit=<?php echo $readrow['FLD_PRODUCT_ID']; ?>" class="btn btn-success btn-xs" role="button">Edit</a>
              <a href="products.php?delete=<?php echo $readrow['FLD_PRODUCT_ID']; ?>" onclick="return confirm('Are you sure to delete?');" class="btn btn-danger btn-xs" role="button">Delete</a>
            </td>
          </tr>
        <?php } ?>
      </table>
    </div>
  </div>
</div>

   <div class="row">
    <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
      <nav>
          <ul class="pagination">
          <?php
          try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $conn->prepare("SELECT * FROM tbl_products_a189563_pt2");
            $stmt->execute();
            $result = $stmt->fetchAll();
            $total_records = count($result);
          }
          catch(PDOException $e){
                echo "Error: " . $e->getMessage();
          }
          $total_pages = ceil($total_records / $per_page);
          ?>
          <?php if ($page==1) { ?>
            <li class="disabled"><span aria-hidden="true">«</span></li>
          <?php } else { ?>
            <li><a href="products.php?page=<?php echo $page-1 ?>" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
          <?php
          }
          for ($i=1; $i<=$total_pages; $i++)
            if ($i == $page)
              echo "<li class=\"active\"><a href=\"products.php?page=$i\">$i</a></li>";
            else
              echo "<li><a href=\"products.php?page=$i\">$i</a></li>";
          ?>
          <?php if ($page==$total_pages) { ?>
            <li class="disabled"><span aria-hidden="true">»</span></li>
          <?php } else { ?>
            <li><a href="products.php?page=<?php echo $page+1 ?>" aria-label="Previous"><span aria-hidden="true">»</span></a></li>
          <?php } ?>
        </ul>
      </nav>
    </div>
  </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
 
</body>
</html>
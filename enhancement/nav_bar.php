<style>
  .navbar {
    background-color: whitte;
  }

  .navbar-brand {
    padding: 0;
  }

  .navbar-brand .logo {
    width: 50px;
    max-height: 50px;
    display: inline-block;
    vertical-align: middle;
  }

  .navbar-nav {
    display: flex; /* Change the display property to flex */
    justify-content: flex-start; /* Adjust the alignment as needed */
    align-items: center; /* Adjust the alignment as needed */
  }

  .navbar-nav > li {
    margin-right: 10px; /* Add some margin between menu items */
  }

  .navbar-nav > li > a {
    padding: 10px; /* Adjust the padding as needed */
    color: black; /* Set the menu item color */
    font-weight: bold;
  }
</style>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">
        <img src="logo.png" alt="Logo" class="logo">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#" disabled="disabled">
            <span class="glyphicon" aria-hidden="true" style="font-weight: bold; color:black;">
              <strong><?php echo str_replace(' ', '', $name); ?></strong>(<strong><?php echo $pos; ?></strong>)
            </span>
          </a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="font-weight: bold; color:black;">
            Menu <span class="caret"></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="products.php"><span class="glyphicon" aria-hidden="true"></span> Products</a></li>
            <?php if ($pos === "Admin") { ?>
              <li><a href="customers.php"><span class="glyphicon" aria-hidden="true"></span> Customers</a></li>
            <?php } ?>
            <?php if ($pos === "Admin") { ?>
              <li><a href="staffs.php"><span class="glyphicon" aria-hidden="true"></span> Staffs</a></li>
            <?php } ?>
            <li><a href="orders.php"><span class="glyphicon" aria-hidden="true"></span> Orders</a></li>
            <li><a href="change_password.php"><span class="glyphicon" aria-hidden="true"></span> Change Password</a></li>
            <li><a href="logout.php"><span class="glyphicon" aria-hidden="true"></span> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
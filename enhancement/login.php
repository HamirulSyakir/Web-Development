<?php  

 include_once 'database.php';
 session_start();
 if(isset($_SESSION["staffid"]))  
      {  
        header("location:index.php");
      }

 try  
 {  
       $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["staffid"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM tbl_staffs_a189563_pt2 WHERE fld_staff_id = :staffid AND fld_staff_password = :password";  
                $stmt = $conn->prepare($query);  
                $stmt->execute(  
                     array(  
                          'staffid'     =>     $_POST["staffid"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $stmt->rowCount();  
                if($count > 0)  
                {  
                	
                    $_SESSION["staffid"] = $_POST["staffid"];  
                   
                  

                     header("location:login_success.php");  
                }  
                else  
                {  
                     $message = '<label>Wrong Password</label>';  
                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?> 

  <!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-color: #30142B;
        }

        .login-box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 400px;
            padding: 40px;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.8);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
            border-radius: 10px;
        }

        .login-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }

        .login-box .user-box {
            position: relative;
        }

        .login-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            margin-bottom: 30px;
            border: none;
            border-bottom: 1px solid #fff;
            outline: none;
            background: transparent;
        }

        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }

        .login-box .user-box input:focus~label,
        .login-box .user-box input:valid~label {
            top: -20px;
            left: 0;
            color: #f68e44;
            font-size: 12px;
        }

        .login-box form input[type="submit"] {
            position: relative;
            display: block;
            width: 100%;
            padding: 10px 20px;
            color: #b79726;
            font-size: 16px;
            text-decoration: none;
            text-transform: uppercase;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            letter-spacing: 4px;
            background: none;
            border: none;
            cursor: pointer;
        }

        .login-box form input[type="submit"]:hover {
            background: #f49803;
            color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 5px #f4c803, 0 0 25px #bd9d0b, 0 0 50px #f4e403, 0 0 100px #d5cf1e;
        }

        .login-box form a {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #fff;
            font-size: 14px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <br />
    <div class="container">
        <?php
        if (isset($message)) {
            echo '<label class="text-danger">' . $message . '</label>';
        }
        ?>

        <div class="login-box">
            <h2>Login</h2>
            <form method="post">
                <div class="user-box">
                    <input type="text" name="staffid" required>
                    <label>Username</label>
                </div>
                <div class="user-box">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <input type="submit" name="login" value="Log in">
                <a href="#">Forgot password?</a>
            </form>
        </div>
    </div>
    <br />
</body>

</html>
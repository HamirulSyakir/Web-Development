<?php
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  session_start();
 
// Paste here
    include "db.php";

    // Give value to the variables
     $user = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
      $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
      $postdate = date("Y-m-d",time());
      $posttime = date("H:i:s",time());
      $comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);

      $_SESSION["name"] = $user;
  $_SESSION["email"] = $email;
  $_SESSION["comment"] = $comment;

      if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is an invalid email address<br><br>");
  }else{
 
  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
      // Prepare the SQL statement
      $stmt = $conn->prepare("INSERT INTO myguestbook(user, email, postdate, posttime,
        comment) VALUES (:name, :email, :pdate, :ptime, :comment)");
     
      // Bind the parameters
      $stmt->bindParam(':name', $user, PDO::PARAM_STR);
      $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      $stmt->bindParam(':pdate', $postdate, PDO::PARAM_STR);
      $stmt->bindParam(':ptime', $posttime, PDO::PARAM_STR);
      $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
       
      // Give value to the variables
     
     
    $stmt->execute();

    session_unset();

    $_SESSION['new_id'] = $conn->lastInsertId();
 
      header("Location:list.php");
      }


 
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
 
    $conn = null;
  }
 
}
 
?>


<!DOCTYPE html>
<html>
<head>
  <title>My Guestbook</title>
</head>
 <center>
     <a href= http://lrgs.ftsm.ukm.my/users/a189563/ class="btn btn-primary">Landing Page</a> |
    <a href="index.php">Home</a> |
    <a href="new_form.php">New Form Lab 6</a> |
    <a href="list.php">List</a> |
 </center>
<body>
  <table width="100%" border="0" cellpadding="20">
  <tr>
    <td colspan="2" bgcolor="darkcyan">
      <h1><font color="ffffff" face="verdana">My Guestbook</font></h1>
    </td>
  </tr>
  <tr>
    <td bgcolor="aquamarine" width="200" height="600">
      <object name="menu" type="text/html" data="menu.html" height="600" /> 
    </td>
    <td width="*" valign="top">
    <hr>
 
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
  Nama :
  <input type="text" name="name" size="40" value="<?php if(isset($_SESSION["name"])) echo $_SESSION["name"] ?>" required>
  <br>
  Email :
  <input type="text" name="email" size="25" value="<?php if(isset($_SESSION["email"]))echo $_SESSION["email"] ?>"required>
  <br>
  Comments :<br>
  <textarea name="comment" cols="30" rows="8" required><?php if(isset($_SESSION["comment"])) echo $_SESSION["comment"] ?></textarea>
  <br>
  <input type="submit" name="add_form" value="Add a New Comment">
  <input type="reset">
  <br>
</form>
 
</body>
</html>
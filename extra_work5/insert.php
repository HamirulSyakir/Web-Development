<!DOCTYPE html>
<html>
<head>
  <title>My Guestbook</title>
</head>
 <center>
     <a href= http://lrgs.ftsm.ukm.my/users/a189563/ class="btn btn-primary">Landing Page</a> |
    <a href="index.php">Home</a> |
    <a href="form.php">Form</a> |
    <a href="list.php">List</a> |
    <a href= http://lrgs.ftsm.ukm.my/users/a189563/Week5Lab/index.php class="btn btn-primary">Week 5</a> 
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
 

<?php
 
if (isset($_POST['add_form'])) {
 
  include "db.php";
 
  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
      // Prepare the SQL statement
      $stmt = $conn->prepare("INSERT INTO extra_work5(user, email, postdate, posttime, hdyfm, ilike1, ilike2, ilike3, comment) VALUES (:user, :email, :pdate, :ptime, :hdyfm, :ilike1, :ilike2, :ilike3, :comment)");
     
      // Bind the parameters
      $stmt->bindParam(':user', $name, PDO::PARAM_STR);
      $stmt->bindParam(':email', $email, PDO::PARAM_STR);
      $stmt->bindParam(':pdate', $postdate, PDO::PARAM_STR);
      $stmt->bindParam(':ptime', $posttime, PDO::PARAM_STR);
      $stmt->bindParam(':hdyfm', $hdyfm, PDO::PARAM_STR);
      $stmt->bindParam(':ilike1', $ilike1, PDO::PARAM_STR);
      $stmt->bindParam(':ilike2', $ilike2, PDO::PARAM_STR);
      $stmt->bindParam(':ilike3', $ilike3, PDO::PARAM_STR);
      $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
       
      // Give value to the variables
      $name = $_POST['name'];
      $email = $_POST['email'];
      $postdate = date("Y-m-d",time());
      $posttime = date("H:i:s",time());
      $hdyfm = $_POST['hdyfm'];
      
     if (isset($_POST['ilike1'])) {
      $ilike1 = $_POST['ilike1'];
    } else {
      $ilike1 = "";
    }

    if (isset($_POST['ilike2'])) {
      $ilike2 = $_POST['ilike2'];
    } else {
      $ilike2 = "";
    }

    if (isset($_POST['ilike3'])) {
      $ilike3 = $_POST['ilike3'];
    } else {
      $ilike3 = "";
    }
      $comment = $_POST['comment'];
     
    $stmt->execute();
 
      header("Location: list.php");
        exit;

      }
 
    catch(PDOException $e)
    {
        echo "Error: " . $e->getMessage();
    }
 
    $conn = null;
  }
else {
  echo "Error: You have execute a wrong PHP. Please contact the web administrator.";
  die();
}
 
 ?>

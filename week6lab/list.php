<?php

session_start();
 
if (isset($_SESSION['new_id']))
  $myid = $_SESSION['new_id'];
else
  $myid = "";
 
include "db.php";
 
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
    $stmt = $conn->prepare("SELECT * FROM myguestbook");
    $stmt->execute();
 
    $result = $stmt->fetchAll();
 
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
 
$conn = null;
?>
<!DOCTYPE html>
<html>
<head>
  <title>My Guestbook</title>
</head>
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
 
<ol>
<?php
foreach($result as $row) {
  echo "<li>";
  echo "Name : ".$row["user"]."<br>";
  echo "Email : ".$row["email"]."<br>";
  echo "Date : ".$row["postdate"]."<br>";
  echo "Time : ".$row["posttime"]."<br>";
  echo "Comments : ".$row["comment"]."<br>";
   if (($row["id"] == $myid) && ($row["picture"] == "")) {
    echo '<form action="upload.php" method="post" enctype="multipart/form-data">';
    echo "<input type='file' name='fileToUpload' id='fileToUpload' required>";
    echo "<input type='submit' value='Upload Image' name='submit'>";
    echo "";
    echo "</form>";
  }
  if ($row["picture"] != "") {
    echo '<img src="picture\\'.$row["picture"].'"><br>';
  }
  echo "Action : <a href=edit.php?id=".$row["id"].">Edit</a> / <a href=delete.php?id=".$row["id"].">Delete</a>";
  echo "</li>";
  echo "<hr>";
}
?>
</ol>
<br>
 <a href="index.php" target="_parent">Back to mainpage</a>
 <tr>
      <center>
     <a href= http://lrgs.ftsm.ukm.my/users/a189563/ class="btn btn-primary">Landing Page</a> |
    <a href="index.php">Home</a> |
    <a href="new_form.php">New Form Lab 6</a> |
    <a href="list.php">List</a> | 
      </center>
    </td>
  </tr>
</body>
</html>
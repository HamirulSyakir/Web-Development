<?php
 
if (isset($_POST['edit_form'])) {
 
  include "db.php";
 
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
    $stmt = $conn->prepare("UPDATE extra_work5 SET user = :name, email = :email, hdyfm = :hdyfm, ilike1 = :ilike1, ilike2 = :ilike2, ilike3 = :ilike3, comment = :comment WHERE id = :record_id");
 
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->bindParam(':hdyfm', $hdyfm, PDO::PARAM_STR);
    $stmt->bindParam(':ilike1', $ilike1, PDO::PARAM_STR);
    $stmt->bindParam(':ilike2', $ilike2, PDO::PARAM_STR);
    $stmt->bindParam(':ilike3', $ilike3, PDO::PARAM_STR);
    $stmt->bindParam(':comment', $comment, PDO::PARAM_STR);
    $stmt->bindParam(':record_id', $id, PDO::PARAM_INT);
       
    $name = $_POST['name'];
    $email = $_POST['email'];
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
    $id = $_POST['id'];
 
    $stmt->execute();
     
    header("Location:list.php");
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
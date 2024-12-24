<?php
 
if (isset($_GET['id'])) {
 
  include "db.php";
 
  try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
      $stmt = $conn->prepare("SELECT * FROM extra_work5 WHERE id = :record_id");
      $stmt->bindParam(':record_id', $id, PDO::PARAM_INT);
      $id = $_GET['id'];
 
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
 
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
 
<!DOCTYPE html>
<html>
<head>
  <title>Extra Work 5</title>
   <style>
    body {
      background-color: HoneyDew;
    }
  </style>
</head>
 
<body>
   <center>
    <a href= http://lrgs.ftsm.ukm.my/users/a189563/ class="btn btn-primary">Landing Page</a> |
    <a href="index.php">Home</a> |
    <a href="form.php">Form</a> |
    <a href="list.php">List</a> |
    <a href= http://lrgs.ftsm.ukm.my/users/a189563/Week5Lab/index.php class="btn btn-primary">Week 5</a> 
    </center>
<hr>
 
<form method="post" action="update.php">
  Nama :
  <input type="text" name="name" size="40" required value="<?php echo $result["user"]; ?>">
  <br>
  Email :
  <input type="text" name="email" size="25" required value="<?php echo $result["email"]; ?>">
  <br>
  How did you find me?
  <select name="hdyfm">
        <option value="From a friend" <?php if ($result['hdyfm'] === 'From a friend') echo ' selected = "selected"' ?> >From a friend</option>
        <option value="I googled you" <?php if ($result['hdyfm'] === 'I googled you') echo ' selected = "selected"' ?> >I googled you</option>
        <option value="Just surf on in" <?php if ($result['hdyfm'] === 'Just surf on in') echo ' selected = "selected"' ?> >Just surf on in</option>
        <option value="From your facebook" <?php if ($result['hdyfm'] === 'From your facebook') echo ' selected = "selected"' ?> >From your facebook</option>
        <option value="I clicked an ads" <?php if ($result['hdyfm'] === 'I clicked an ads') echo ' selected = "selected"' ?> >I clicked an ads</option>
      </select>  <br>
I like your:
<br>
<input type="checkbox" name="ilike1" value="Front page" <?php if (strpos($result["ilike1"], "Front page") !== false) echo "checked"; ?>>Front page<br>
<input type="checkbox" name="ilike2" value="Form" <?php if (strpos($result["ilike2"], "Form") !== false) echo "checked"; ?>>Form<br>
<input type="checkbox" name="ilike3" value="User interface" <?php if (strpos($result["ilike3"], "User interface") !== false) echo "checked"; ?>>User interface<br>
  Comments :<br>
  <textarea name="comment" cols="30" rows="8" required><?php echo $result["comment"]; ?></textarea>
  <br>
  <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
  <input type="submit" name="edit_form" value="Modify Comment">
  <input type="reset">
  <br>
</form>
</body>
</html>
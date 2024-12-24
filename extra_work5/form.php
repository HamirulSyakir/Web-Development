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
 
<hr>
<form method="post" action="insert.php">
  Nama :
  <input type="text" name="name" size="40" required>
  <br>
  Email :
  <input type="text" name="email" size="25" required>
  <br>
  How did you find me?
  <select name="hdyfm">
        <option value="From a friend">From a friend</option>
        <option value="I googled you">I googled you</option>
        <option value="Just surf on in">Just surf on in</option>
        <option value="From your Facebook">From your Facebook</option>
        <option value="I clicked an ads">I clicked an ads</option>
  </select> <br>
  I like your: <br>
  <input type="checkbox" name="ilike1" value="Front page">Front page<br>
  <input type="checkbox" name="ilike2" value="Form">Form<br>
  <input type="checkbox" name="ilike3" value="User interface">User interface<br>
  Comments :<br>
  <textarea name="comment" cols="30" rows="8" required></textarea>
  <br>
  <input type="submit" name="add_form" value="Add a New Comment">
  <input type="reset">
  <br>
</form>
</body>
</html>
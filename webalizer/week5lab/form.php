<!DOCTYPE html>
<html>
<head>
  <title>My Guestbook</title>
</head>
 <center>
    <a href= http://lrgs.ftsm.ukm.my/users/a189563/ class="btn btn-primary">Landing Page</a> |
    <a href="index.php">Home</a> |
    <a href="bio_form.php">Biodata Form</a> |
    <a href="form.php">Form</a> |
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
 
<form method="post" action="insert.php">
  Nama :
  <input type="text" name="name" size="40" required>
  <br>

  Email :
  <input type="text" name="email" size="25" required>
  <br>





  Comments :<br>
  <textarea name="comment" cols="30" rows="8" required></textarea>
  <br>

  <input type="submit" name="add_form" value="Add a New Comment">
  <input type="reset">
  <br>
</form>
 
 <tr>
    <td colspan="2" bgcolor="#C71585">
      <center>
      TTTP2543 - Web Programming
      </center>
    </td>
  </tr>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title>My Guestbook</title>
  <style>
    body {
      background-color: lightyellow;
 
    }
  </style>
</head>
<body>
 <center>
    <a href= http://lrgs.ftsm.ukm.my/users/a189563/ class="btn btn-primary">Landing Page</a> |
    <a href="index.php">Home</a> |
    <a href="bio_form.php">Biodata Form</a> |
    <a href="form.php">Form</a> |
    <a href="list.php">List</a> |
    <a href= http://lrgs.ftsm.ukm.my/users/a189563/extra_work5/index.php class="btn btn-primary">Extra Work</a> |
 </center>
 <hr>
<div align="center">
  <table width="379" height="286" border="3" bordercolor="blue">
    <tr>
      <td height="190" bgcolor="AQUA">
          <p align="center"><strong>My Guestbook</strong></p>
          <p align="center">Date : <?php echo date("d-m-Y",time()); ?></p>
          <p align="center">Time : <?php echo date("H:i",time()); ?></p>
          <p align="center"><a href="form.php">Add</a> | <a href="list.php">List</a></p>
      </td>
    </tr>
  </table>
</div>
 
</body>
</html>
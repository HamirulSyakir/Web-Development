<?php
 
$lecturers = array
  (
  array('id' => "K004901", 'name' => "Prof. Dr. Abdullah Mohd Zin"),
  array('id' => "K012964", 'name' => "Prof. Dr. Azuraliza Abu Bakar"),
  array('id' => "K009683", 'name' => "Assoc. Prof. Dr. Haslina Arshad"),
  array('id' => "K007915", 'name' => "Assoc. Prof. Dr. Mohd Juzaiddin Ab Aziz"),
  );
 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Week 4 Lab Deliverables</title>
</head>
<body>
<table width="100%" border="0" cellpadding="20">
  <tr>
    <td colspan="2" bgcolor="DarkCyan">
      <h1><font color="ffffff" face="verdana">List of Lecturers</font></h1>
    </td>
  </tr>
  <tr>
    <td bgcolor="Aquamarine" width="200" height="600">
      <object name="menu" type="text/html" data="menu.html" height="600" /> 
    </td>
    <td width="*" valign="top">
    <font size="6" face="Lucida Console">List of Lecturers</font>
    <hr>
<table border="1" cellpadding="10">
<?php
$keys = array_keys($lecturers);
while(!empty($keys)){
  $key = array_pop($keys);
  ?>
  <tr>
    <td><?php echo $lecturers[$key]['name']; ?></td>
    <td><a href="lecturer_details.php?id=<?php echo $lecturers[$key]['id']; ?>">Details</a></td>
  </tr>
<?php } ?>

</table>
<tr>
    <td colspan="2" bgcolor="#147A61">
      <center>
      TTTP2543 - Web Programming
      </center>
    </td>
  </tr>
</body>
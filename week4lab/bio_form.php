<?php
 
$univ = array
  (
  array("name"=>"Universiti Putra Malaysia","abb"=>"UPM"),
  array("name"=>"Universiti Kebangsaan Malaysia","abb"=>"UKM"), 
  array("name"=>"Universiti Malaya","abb"=>"UM"), 
  array("name"=>"Universiti Teknologi Malaysia","abb"=>"UTM"),
  array("name"=>"Universiti Sains Malaysia","abb"=>"USM")
  // insert other universities here
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
      <h1><font color="ffffff" face="verdana">Biodata Form</font></h1>
    </td>
  </tr>
  <tr>
    <td bgcolor="Aquamarine" width="200" height="600">
      <object name="menu" type="text/html" data="menu.html" height="600" /> 
    </td>
    <td width="*" valign="top">
    <font size="6" face="Lucida Console">Biodata Form</font>
    <hr>
<form action="validate_biodata.php" method="post">
  <table border="1" cellpadding="10" bgcolor="white">
    <tr>
      <td>Name:</td>
      <td><input type="text" name="name" placeholder="Insert your name" autofocus></td>
    </tr>
    <tr>
      <td>Age:</td>
      <td><input type="number" name="age" min="0" max="100" step="1"></td>
    </tr>
    <tr>
      <td>Sex:</td>
      <td>
        <input type="radio" name="sex" value="male">Male<br>
        <input type="radio" name="sex" value="female">Female
      </td>
    </tr>
    <tr>
      <td>Address:</td>
      <td><textarea name="address" cols="50" rows="5" placeholder="Insert your address"></textarea></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input type="email" name="email" placeholder="Insert your email"></td>
    </tr>
    <tr>
      <td>Date of Birth:</td>
      <td><input type="date" name="dob"></td>
    </tr>
    <tr>
      <td>Height:</td>
      <td><input type="range" name="height" id="heightId" min = "100" max = "200" value = "150" oninput="outputId.value = heightId.value">
      <output id="outputId">150</output>cm</td>
    </tr>
    <tr>
      <td>Tel:</td>
      <td><input type="tel" name="phone" pattern="\+60\d{2}-\d{8}" placeholder="+60##-########"></td>
    </tr>
    <tr>
      <td>My Favorite Color:</td>
      <td><input type="color" name="color"></td>
    </tr>
    <tr>
      <td>Fb/TW/IG:</td>
      <td><input type="url" name="fbtwig" placeholder="Insert the URL"></td>
    </tr>
    <tr>
      <td>My University:</td>
      <td>
        <select name="univ">
        <option value="" selected>Select</option>


<?php
        foreach ($univ as $u) {
          echo "<option value=\"" . $u['abb'] . "\">". $u['name'] . "</option>";
        }
        ?>

        </select>
      </td>
    </tr>
  </table>
<hr>
<input type="hidden" name="matricnum" value="a189563">
<input type="submit" name="biodata_form" value="Submit My Biodata">
<input type="reset">
</form>
<tr>
    <td colspan="2" bgcolor="#147A61">
      <center>
      TTTP2543 - Web Programming
      </center>
    </td>
  </tr>
 
</body>
</html>
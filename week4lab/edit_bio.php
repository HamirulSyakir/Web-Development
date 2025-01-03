<?php
 
$univ = array
  (
  array("name"=>"Universiti Putra Malaysia","abb"=>"UPM"),
  array("name"=>"Universiti Kebangsaan Malaysia","abb"=>"UKM"),
  array("name"=>"Universiti Malaya","abb"=>"UM"),
  array("name"=>"Universiti Sains Malaysia","abb"=>"USM"),
  array("name"=>"Universiti Teknologi Malaysia","abb"=>"UTM")
  // insert other universities here
  );


  $record = array
  (
  'name' => "Hamirul Syakir Suwardi",
  'age' => 21,
  'sex' => "male",
  'address' => "Kolej Pendeta Zaba",
  'email' => "a189563@siswa.ukm.edu.my",
  'dob' => "2002-10-09",
  'height' => 175,
  'phone' => "+6011-65010135",
  'color' => "#87CEEB",
  'fbtwig' => "https://twitter.com/hamirul_syakirr",
  'univ' => "UKM",
  'matricnum' => "a189563"
  );
 
 ?>


<!DOCTYPE html>
<html>
<head>
  <title>Edit Biodata</title>
</head>
<body>
<table width="100%" border="0" cellpadding="20">
  <tr>
     <td colspan="2" bgcolor="DarkCyan">
      <h1><font color="ffffff" face="verdana">Edit Biodata Form</font></h1>
    </td>
  </tr>
  <tr>
    <td bgcolor="Aquamarine" width="200" height="600">
      <object name="menu" type="text/html" data="menu.html" height="600" /> 
    </td>
    <td width="*" valign="top">
    <font size="6" face="Lucida Console">Edit Biodata Form</font>
    <hr>


<form action="validate_biodata.php" method="post">
  <table border="1" cellpadding="10">
    <tr>
      <td>Name:</td>
      <td><input type="text" name="name" placeholder="Insert your name" autofocus value="<?php echo $record['name']; ?>"></td>
    </tr>
    <tr>
      <td>Age:</td>
      <td><input type="number" name="age" min="0" max="100" step="1" value="<?php echo $record['age']; ?>"></td>
    </tr>
    <tr>
      <td>Sex:</td>
      <td>
        <input type="radio" name="sex" value="male" <?php if($record['sex'] == "male") echo "checked"; ?>>Male<br>
        <input type="radio" name="sex" value="female" <?php if($record['sex'] == "female") echo "checked"; ?>>Female
      </td>
    </tr>
    <tr>
      <td>Address:</td>
      <td><textarea name="address" cols="50" rows="5" placeholder="Insert your address"><?php echo $record['address']; ?></textarea></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><input type="email" name="email" placeholder="Insert your email" value="<?php echo $record['email']; ?>"></td>
    </tr>
    <tr>
      <td>Date of Birth:</td>
      <td><input type="date" name="dob" value="<?php echo $record['dob']; ?>"></td>
    </tr>
    <tr>
      <td>Height:</td>
      <td><input type="range" name="height" id="heightId" min = "100" max = "200" oninput="outputId.value = heightId.value" value="<?php echo $record['height']; ?>">
      <output id="outputId"><?php echo $record['height']; ?></output>cm</td>
    </tr>
    <tr>
      <td>Tel:</td>
      <td><input type="tel" name="phone" pattern="\+60\d{2}-\d{8}" placeholder="+60##-########" value="<?php echo $record['phone']; ?>"></td>
    </tr>
    <tr>
      <td>My Favorite Color:</td>
      <td><input type="color" name="color" value="<?php echo $record['color']; ?>"></td>
    </tr>
    <tr>
      <td>Fb/TW/IG:</td>
      <td><input type="url" name="fbtwig" placeholder="Insert the URL" value="<?php echo $record['fbtwig']; ?>"></td>
    </tr>
    <tr>
      <td>My University:</td>
      <td>
        <select name="univ">
          <option value="" selected>Select</option>
          <?php
          foreach ($univ as $u) {
            if ($u['abb'] == $record['univ'])
              echo "<option value=".$u['abb']." selected>".$u['name']."</option>";
            else 
              echo "<option value=".$u['abb'].">".$u['name']."</option>";
          }
          ?>
 
        </select>
      </td>
    </tr>
  </table>
<hr>
<input type="hidden" name="matricnum" value="<?php echo $record['matricnum']; ?>">
<input type="submit" name="biodata_form" value="Submit My Biodata">
<input type="reset">
</form>


</body>
</html>
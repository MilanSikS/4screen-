<?php
mysql_connect("localhost", "root") or die(mysql_error());  
mysql_select_db("4screen") or die(mysql_error());



if (!$_POST['tbUsername'] || !$_POST['tbName'] || !$_POST['tbPassword'])
     {	
      die('Error! You did not fill in all the fields!');
     }


if (!get_magic_quotes_gpc())
{
$_POST['tbUsername'] = addslashes($_POST['tbUsername']);
}
$usercheck = $_POST['tbUsername'];
$check = mysql_query("SELECT username FROM users
WHERE username = '$usercheck'")
or die(mysql_error());
$check2 = mysql_num_rows($check);

 
if ($check2 != 0)
{
die('Error! User '.$_POST['tbUsername'].' is already registered.');
}

$insert = "INSERT INTO users (username, name, password, status)
VALUES ('".$_POST['tbUsername']."', '".$_POST['tbName']."','".$_POST['tbPassword']."', 1)";

$add_user= mysql_query($insert);

if (!$insert)
echo "Greska! <br>Registration failed";
else
echo "<p>Your account is registered!!! Click <a href=\"index.html\">Login page</a>.</p>";

?>
 
 

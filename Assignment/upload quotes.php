image.php File:
<?PHP
$hostname = "localhost"; // usually is localhost, but if not sure, check with your hosting company, if you are with webune leave as localhost 
$db_user = "username"; // change to your database password 
$db_password = "password"; // change to your database password 
$database = "database"; // provide your database name 
$db_table = "table"; // Your Table Name where you want to Store Your Image. 
# STOP HERE 
#################################################################### 
# THIS CODE IS USED TO CONNECT TO THE MYSQL DATABASE 
$db = mysql_connect($hostname, $db_user, $db_password); 
mysql_select_db($database,$db);
$uploadDir = 'images/'; //Image Upload Folder
if(isset($_POST['Submit']))
{
$fileName = $_FILES['Photo']['name'];
$tmpName  = $_FILES['Photo']['tmp_name'];
$fileSize = $_FILES['Photo']['size'];
$fileType = $_FILES['Photo']['type'];
$filePath = $uploadDir . $fileName;
$result = move_uploaded_file($tmpName, $filePath);
if (!$result) {
echo "Error uploading file";
exit;
}
if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
	$filePath = addslashes($filePath);
}
$query = "INSERT INTO $db_table ( Image ) VALUES ('$filePath')";
mysql_query($query) or die('Error, query failed'); 
}
?>
image.htm File HTML Form Code:
<form name="Image" enctype="multipart/form-data" action="image.php" method="POST">
<input type="file" name="Photo" size="2000000" accept="image/gif, image/jpeg, image/x-ms-bmp, image/x-png" size="26"><br/>
<INPUT type="submit" class="button" name="Submit" value="  Submit  "> 
&nbsp;&nbsp;<INPUT type="reset" class="button" value="Cancel">
</form>
To View Your Image File in profile.php Page:
<?PHP
$hostname = "localhost"; // usually is localhost, but if not sure, check with your hosting company, if you are with webune leave as localhost 
$db_user = "username"; // change to your database password 
$db_password = "password"; // change to your database password 
$database = "database"; // provide your database name 
$db_table = "table"; // Your Table Name where you want to Store Your Image. 
# STOP HERE 
#################################################################### 
# THIS CODE IS USED TO CONNECT TO THE MYSQL DATABASE 
$db = mysql_connect($hostname, $db_user, $db_password); 
mysql_select_db($database,$db);
$query = "SELECT * FROM $db_table WHERE username = '$username'";
$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_array($result))
	{
echo "<img border=\"0\" src=\"".$row['Image']."\" width=\"102\" alt=\"Your Name\" height=\"91\">";
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Upload Files</title>
</head>

<body>

<?php
 
$servername="localhost";
$username="khcy4ckg_kai";
$password="kingdomhearts95";
$dbname="khcy4ckg_quotes";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if($conn->connect_error)
{
	die("connection failed: " . $conn->connect_error);
}
echo "<p>Connected successfully</p>";
	
		$author = $_POST['author'];
		$quotes = $_POST['quotes'];
		$category = $_POST['category'];

		//SQL query
		$sql = "INSERT INTO quotes (author, quotes, category) VALUES('$author', '$quotes', '$category')";
		$result = $conn->query($sql);

		if(isset($_FILES['submit'])) {
			$image = $_FILES['image']['name'];
			$imageTemp = $_FILES['image']['tmp_name'];
			$imageType = $_FILES['image']['type'];
			
			$imageName = preg_replace("#[^a-z0-9.]#i","",$image);
			
			if(!$imageTemp){
				echo("You need to select a file to upload");
				}else{
					move_uploaded_file($image,"images/$image");
				}
			}
?>
</body>
</html>
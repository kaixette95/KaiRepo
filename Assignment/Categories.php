<!DOCTYPE html>

<html>

<head>
<title>Quotagram-Life Quotes</title>
<link rel="stylesheet" type="text/css" href="stylesqh.css">
<script type="text/javascript" src="slider.js"></script>
</head>


<!--header-->
<div id="header">
	<img src="images/logo.png" alt="logo" height="150px" width="240px" align="left">
	<h1><font size="30">QUOTAGRAM!!</font></h1>
	<br/>
	<h2>Your home for inspirational quotes~</h2>
</div>	
<br/>

<div id="nav">
	<div id="nav_wrapper">
		<ul>
			<li><a href="#">Authors</a>
				<ul>
					<li><a href="#">A</a></li>
					<li><a href="#">B</a></li>
					<li><a href="#">C</a></li>
					<li><a href="#">D</a></li>
					<li><a href="#">E</a></li>
					<li><a href="#">F</a></li>
					<li><a href="#">G</a></li>
					<li><a href="#">H</a></li>
					<li><a href="#">I</a></li>
					<li><a href="#">J</a></li>
					<br/>
					<li><a href="#">K</a></li>
					<li><a href="#">L</a></li>
					<li><a href="#">M</a></li>
					<li><a href="#">N</a></li>
					<li><a href="#">O</a></li>
					<li><a href="#">P</a></li>
					<li><a href="#">Q</a></li>
					<li><a href="#">R</a></li>
					<li><a href="#">S</a></li>
					<li><a href="#">T</a></li>
					<li><a href="#">U</a></li>
					<li><a href="#">V</a></li>
					<li><a href="#">W</a></li>
					<li><a href="#">X</a></li>
					<li><a href="#">Y</a></li>
					<li><a href="#">Z</a></li>
				</ul>		
			</li><li>
			<a href="#">Categories</a>
			<ul>
					<li><a href="#">Life</a></li>
					<li><a href="#">Love</a></li>
					<li><a href="#">Laughter</a></li>
			</ul>
			</li><li>
			<a href="#">Recent</a></li><li>
			<form id="form" name="form1" method="post" action="searchresult.php"> 
			<input name="search" type="text" size="25" maxlength="50" placeholder="Enter keyword"/> 
			<input type="submit" name="Search" value="Search"/></form></li>
		</ul>
	</div>
</div>	


<!--body-->
<div id="body">


<div id="left_border"></div>
<div id="right_border"></div>

<div id="form">

<form id="SearchByCategory" action = "" method = "get">
<label for="category">Choose Category: </label>
<br/>
<select name ="category" id="category">
<option value="Life">Life</option>
<option value="Love">Love</option>
<option value="Laughter">Laughter</option>
</select>

<input type = "submit" value = "Find Category">
</form>

<?php
 
$servername="localhost";
$username="khcy4ckg_kai";
$password="kingdomhearts95";
$dbname="khcy4ckg_quotes";
$search=$_GET['category'];

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if($conn->connect_error)
{
	die("connection failed: " . $conn->connect_error);
}
// echo "<p>Connected successfully</p>";


	$sql = "SELECT * FROM quotes WHERE category='$search'";  
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc())
	{		
		$category = $row['category'];
		$quotes = $row['quotes'];
		$author = $row['author'];
		
		//echo "Quote ID : $quoteID<br>";
		echo "Category : $category<br>";
		echo "Quotes : $quotes<br>";
		echo "Author : $author<br>";
		echo "<hr>";	
	}  
?>

</div>
</div>



<!--footer-->
<div id="footer"> 	
© 2014 Chan Kai Sheng
		
</div>

<br/>
<br/>

</body>
</div>




</html>
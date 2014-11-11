<html>
<body>
<?php
	include("dbconnect.php");
	
if(!isset($_POST['search'])){
	header("Location:index.php");
}
$search_sql = "SELECT * FROM stock WHERE name LIKE '%".$_POST['search']."%' OR description LIKE '%".$_POST['search']."%'";
$search_query = mysql_query($search_sql);
if(mysql_num_rows($search_query)!=0){
$search_rs = mysql_fetch_assoc($search_query);
}
</body>
</html>

<p>Search Results</p>
<?php if(mysql_num_rows($search_query)!=0){
	do { ?>
	<p><?php echo $search_rs['name']; ?></p>
	}while($search_rs=mysql_fetch_assoc($search_query));

} else{
	echo "No results found";
}

 ?>
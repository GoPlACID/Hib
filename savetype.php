

<?php
    session_start(); 
	if (isset($_POST['Type'])) { $Type = $_POST['Type']; if ($Type == '') { unset($Type);} } 	
	include ("bd.php");
	 
mysql_query("UPDATE users SET Type = '" . $Type . "' WHERE id = '" . $_SESSION['id'] . "'");
 ?>
<html>
<title>Results</title>
<body>
	<?php 
	include ("bd.php");
	
	$result1 = mysql_query("SELECT * FROM music INNER JOIN users ON (music.TypeT = users.Type)",$db);
	echo "<table>";
	echo "<tr>";
	while ($row = mysql_fetch_array($result1))
	{
		echo "<td>";
			echo "<div>".$row['performer']."</div>";
		echo "</td>";
		echo "<td>";
			echo  "<div>".$row['Album']."</div>";
		echo "</td>";
		echo "<td>";
			echo "<div> ".$row['Track']."</div>";
		echo "</td>";
		echo "<td>";
			echo  "<div>".$row['Genre']."</div>";
		echo "</td>";
		echo "<td>";
			echo  "<div>".$row['TypeT']."</div>";
		echo "</td>";
		echo "<td>";
			echo  "<div>".$row['Rating']."</div>";
		echo "</td>";
		echo "</tr>";

	}
	
	echo "</table>";
	?>
	
<a href="add.html">Добавить</a>
	

	 
	 
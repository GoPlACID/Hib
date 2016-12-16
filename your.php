<?php session_start();
	if (isset($_POST['performer'])) { $performer = $_POST['performer']; if ($performer == '') { unset($performer);} } 
if (isset($_POST['Album'])) { $Album = $_POST['Album']; if ($Album == '') { unset($Album);} } 	
if (isset($_POST['Track'])) { $Track = $_POST['Track']; if ($Track == '') { unset($Track);} } 
if (isset($_POST['Genre'])) { $Genre = $_POST['Genre']; if ($Genre == '') { unset($Genre);} } 	
if (isset($_POST['TypeT'])) { $TypeT = $_POST['TypeT']; if ($TypeT == '') { unset($TypeT);} } 
if (isset($_POST['rating'])) { $rating = $_POST['rating']; if ($rating == '') { unset($rating);} } 		
	include ("bd.php");
mysql_query("INSERT INTO music (performer,Album,Track,Genre,TypeT,Rating) VALUES ('$performer','$Album','$Track','$Genre','$TypeT','$rating')");
mysql_query("INSERT INTO rating ()	
?>
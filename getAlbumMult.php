<?php

$servername = 'localhost';
$username	= 'aminondo';
$password	= 'ninja--4';
$database	= "hot100";

$link = mysqli_connect($servername, $username, $password) 
	or die('Could not connect: ' . mysql_error());

mysqli_set_charset($link, 'utf8');

mysqli_select_db($link, $database) or die('Could not select database');


	$query = "SELECT album.album_weight, album.album_id FROM album, singles WHERE singles.album_id=album.album_id";
	$result = mysqli_query($link, $query) or die('Query failed: ' . mysql_error());


$temp_array = array();
while($row = mysqli_fetch_assoc($result)){
	$temp_array[] = $row;
}


$json_table =  json_encode($temp_array);

echo $json_table;
?>
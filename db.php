<?php
$host = 'localhost';
$username ='Alir';
$password ='123456';
$dbname = 'php';
$conn = mysqli_connect($host,$username,$password,$dbname);
$sql = 'SELECT * FROM user';
$query = mysqli_query($conn , $sql);
$resulte =mysqli_fetch_all($query , MYSQLI_ASSOC);
mysqli_free_result($query);
// mysqli_close($conn);


?>
5
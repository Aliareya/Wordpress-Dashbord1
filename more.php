<?php
include('db.php');
if(isset($_GET['id'])){
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM user WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $user = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    print_r($user);
}
?>
<h1>more</h1>

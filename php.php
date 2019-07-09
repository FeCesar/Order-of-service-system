<?php

include('conection.php');

$query = mysqli_query($conn ,"SELECT * FROM user_admin WHERE admin_id = 1");
$dados = mysqli_fetch_array($query);
print_r($dados);

?>

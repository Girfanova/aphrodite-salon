<?php
require_once("connect_db.php");
$zapros = "UPDATE records SET done=1 Where id=" . $_GET['id'];
mysqli_query($link, $zapros);
mysqli_close($link);
header('Location: records-list.php');
?>
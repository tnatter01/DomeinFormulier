<?php
include("config.php");

$id = $_GET['id'];

$sql = $sql = "DELETE FROM aanvragen WHERE aanvraag_id='$id'";
mysqli_query($conn, $sql);
header("location: tickets.php");
?>
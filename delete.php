<?php
include_once'dbh-conn.php';

console.log($_GET[id])

$sql = "DELETE FROM people WHERE personID='$_GET[id]'";
mysqli_query($conn, $sql);

header("Location: index.php?un-submition=success");

?>
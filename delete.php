<?php
include_once'dbh-inc.php';

$first = $_POST['-first'];
$last = $_POST['-last'];

$sql = "DELETE FROM people WHERE personID='$_GET[id]'";
mysqli_query($conn, $sql);

header("Location: index.php?un-submition=success");

?>
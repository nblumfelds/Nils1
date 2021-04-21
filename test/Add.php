<?php
    include_once'dbh-conn.php';

    $first = $_POST['aFirst'];
    $last = $_POST['aLast'];
    $age = $_POST['aAge'];

    $sql = "INSERT INTO  people (firstname, lastname, age) VALUES ('$first','$last','$age');";
    mysqli_query($conn, $sql);

    header("Location: index.php?signup=success");

?>
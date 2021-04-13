<?php
    include_once'dbh-inc.php';

    $first = $_POST['first+'];
    $last = $_POST['last+'];
    $age = $_POST['age+'];

    $sql = "INSERT INTO  people (firstname, lastname, age) VALUES ('$first','$last','$age');";
    mysqli_query($conn, $sql);

    header("Location: index.php?signup=success");

?>
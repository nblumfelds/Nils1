<?php
    include_once'dbh-inc.php';

    $first = $_POST['efirst'];
    $last = $_POST['elast'];
    $age = $_POST['eage'];

    $sql = "UPDATE FROM  people (firstname, lastname, age) VALUES ('$first','$last','$age');";
    mysqli_query($conn, $sql);

    

?>
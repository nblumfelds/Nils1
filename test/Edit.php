<?php
    include_once'dbh-conn.php';

    $ID = "<script> document.write(x) </script>";
    $first = $_POST['eFirst'];
    $last = $_POST['eLast'];
    $age = $_POST['eAge'];

    $sql = "UPDATE people SET firstname = '$first', lastname= '$last', age= '$age' WHERE personID = $ID;";
    
    
    mysqli_query($conn, $sql);
    header("Location: index.php?edit=success");

?>
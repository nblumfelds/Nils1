<?php
    include_once'dbh-inc.php';

    $first = $_POST['-first'];
    $last = $_POST['-last'];
    $ID = $_POST['-ID'];

    $sql = "DELETE FROM people WHERE firstname = '$first' AND lastname = '$last' AND personID='$ID';";
    mysqli_query($conn, $sql);

    header("Location: index.php?un-submition=success");

?>
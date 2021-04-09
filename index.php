<?php
    include_once 'dbh-inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People</title>
</head>
<body>
    <h1>Test</h1>
    <br>

    <?php
        print "Obtaining data from a server";
        echo "<br>";
    ?>
   
    <br>

    <?php
        $sql = "SELECT * FROM people;";
        $results = mysqli_query($conn, $sql);
        $resultsCheck = mysqli_num_rows($results);

        echo "<table>";
        echo "<tr><th>Person ID</th><th>Name</th><th>Surname</th><th>Age</th></tr>";

        if ($resultsCheck > 0) {
            while ($row = mysqli_fetch_assoc($results)) {
                echo "<tr><td>";
                echo $row ['person.id'];
                echo "</td><td>";
                echo $row['firstname'];
                echo "</td><td>";
                echo $row['lastname'];
                echo "</td><td>";
                echo $row['age'];
                echo "</td></tr>";
            }
        }

        echo "</table>";
        

        
    ?>

<br>
<br>
        <p>Inserting data into a database</p>

<form action="submit.php" method="POST">
    <input type="text" name="first" placeholder="Firstname">
    <br>
    <input type="text" name="last" placeholder="Lastname">
    <br>
    <input type="text" name="age" placeholder="Age">
    <br>
    <button type="submit" name="submit">Submit</button>
    <br>
</form>

</body>
</html>
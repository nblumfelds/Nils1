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
    <link rel="stylesheet" href="add-pep.css">
</head>
<body>
    <h1>Test</h1>
    <br>

    <?php
        print "Obtaining data from a server";
        echo "<br>";
    ?>
    <br>


    <button id="modalBtn" class="button">Add a person</button>

    <div id="simpleModal" class="modal">
        <div class="modal-content">
            <span class="closeBtn">&times;</span>
            <form action="add-pep.php" method="POST">
                <input type="text" name="first+" placeholder="Firstname">
                <br>
                <input type="text" name="last+" placeholder="Lastname">
                <br>
                <input type="text" name="age+" placeholder="Age">
                <br>
                <button type="submit" name="add-pep">Submit</button>
                <br>
            </form>
        </div>
    </div>






    <?php
        $sql = "SELECT * FROM people;";
        $results = mysqli_query($conn, $sql);
        $resultsCheck = mysqli_num_rows($results);

        echo "<table>";
        echo "<tr><th>Person ID</th><th>Name</th><th>Surname</th><th>Age</th><th>Edit</th></tr>";

        if ($resultsCheck > 0) {
            while ($row = mysqli_fetch_assoc($results)) {
                echo "
                    <tr>
                        <td>".$row['personID']."</td>
                        <td>".$row['firstname']."</td>
                        <td>".$row['lastname']."</td>
                        <td>".$row['age']."</td>
                        <td><a href=delete.php?id=".$row['personID'].">Delete</a></td>
                    </tr>
                ";
            }
        }

        echo "</table>";
        

        
    ?>

<br>
<br>
        <p>Inserting data into a database</p>

<form action="add-pep.php" method="POST">
    <input type="text" name="first" placeholder="Firstname">
    <br>
    <input type="text" name="last" placeholder="Lastname">
    <br>
    <input type="text" name="age" placeholder="Age">
    <br>
    <button type="submit" name="submit">Submit</button>
    <br>
</form>

<br>
<br>
        <p>Delete data from database</p>

<form action="unsubmit.php" method="POST">
    <input type="text" name="-first" placeholder="Firstname">
    <br>
    <input type="text" name="-last" placeholder="Lastname">
    <br>
    <button type="submit" name="submit">Submit</button>
    <br>
</form>


<script src="add-pep.js"></script>
</body>
</html>
<?php
    include_once 'dbh-conn.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Interacting with a Database</h1>

    <p>This is data from a server</p>

    <button id="aModalBtn" class="aButton">Add a person</button>



    <!--Table-->
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
                        <td><a href=delete.php?id=".$row['personID']." style='text-decoration: none;background-color: red;border-radius: 4px; color:white;''>Delete</a></td>
                        <td><button type='button' name='eModalBtn'  class='eModalBtn' id='eModalBtn' onclick='editfunction(".$row['personID'].")'>Update</button></td>
                        
                     </tr>
                ";
            }
        }

        echo "</table>";
        


        /*onclick='editfunction(".$row['personID'].")'
        var modal = document.getElementById('aModal');
        mysqli_query($conn, $sql);
        header("Location: index.php?edit=success");
        console.log(hi)
        */
        
    ?>




    <!--Modal for Adding (a)-->
    <div id="aModal" class="aModal">
        <div class="aModal-Content">
            <span class="aCloseBtn">&times;</span>
            <h3>Add a person</h3>
            <form action="Add.php" method="POST">
                <input type="text" name="aFirst" placeholder="Firstname">
                <br>
                <input type="text" name="aLast" placeholder="Lastname">
                <br>
                <input type="text" name="aAge" placeholder="Age">
                <br>
                <button type="submit" name="aSubmit">Submit</button>
                <br>
            </form>
        </div>
    </div>

    <!--Modal for Editting (e)-->
    <div id="eModal" class="eModal">
        <div class="eModal-Content">
            <span class="eCloseBtn">&times;</span>
            <h3>Edit</h3>
            <form action="Edit.php" method="POST">
                <input type="text" name="eFirst" placeholder="Firstname">
                <br>
                <input type="text" name="eLast" placeholder="Lastname">
                <br>
                <input type="text" name="eAge" placeholder="Age">
                <br>
                <button type="submit" name="eSubmit">Submit</button>
                <br>
            </form>
        </div>
    </div>



<script src="main.js"></script>
<script src="edit.js"></script>
</body>
</html>
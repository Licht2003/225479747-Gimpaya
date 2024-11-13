<?php
    include "db.php";

    $sql="Select * from items";
    $result=$conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodList</title>
</head>
<body>
    <h2>Foodlist</h2>

    <table border="1">
        <tr>
            <th>Name</th>
            <th>Food</th>
            <th>Action</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['food'] . "</td>";
                echo "<td>Delete</td>";
            }
        }
        else {
            echo "<tr><td colonspan='3' >No Item</td></tr>";
        }
    

        ?>



    </table>
</body>
</html>
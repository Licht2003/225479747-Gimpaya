<?php
    include 'db.php';

    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        $name =$_POSTP["name"];
        $price =$_POST["price"];

        if (!empty($name)&& !empty ($food)) {
            $sql= "INSERT INTO items (name, price) VALUES ('$name', '$price')";
            
            if ($conn->query($sql)=== TRUE) {
                echo "New Item added sucessfully!";

    }
    else {
        echo "Failed to add new Item.";
    }

}
else {
    echo "Please fill in all fields";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Item</title>
</head>
<body>
    <h2> Add a New Contact </h2>

    <form method = "post" action="add.php" >
        Name: <input type="text" name='name'><br><br>
        Phone: <input type="text" name='price'><br><br>
        <input type="submit" value ="Add Item">

    </form>
    <a href="index.php">Back to FoodList</a>
    
</body>
</html>
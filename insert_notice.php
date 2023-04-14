<?php
    include("db_connect.php");

    if(isset($_POST['submit'])){
        $notice = $_POST['notice'];
        // $username = "Bijay";
        $query = "INSERT INTO `notice`(`notice`, `userid`) VALUES ('$notice','$username')";

        $result = mysqli_query($con,$query);

        echo "Record successfully inserted.";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backtopage</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <a href="index.php">Backtopage</a>
</body>
</html>
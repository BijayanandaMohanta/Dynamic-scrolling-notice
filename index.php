<?php
    include('db_connect.php');

    if(isset($_REQUEST['submit'])){
        $notice = $_REQUEST['notice'];
        // $username = "Bijay";
        
        if($notice <> ""){
            $query = "INSERT INTO `notice`(`notice`, `userid`) VALUES ('$notice','$username')";
            $result = mysqli_query($con,$query);

            echo "Record successfully inserted.";
        }
        else{
            echo "Enter something on notice box.";
        }

       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice box</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="page">
        <div class="input-form">
            <form action="<?php $_PHP_SELF ?>" method="post" class="input-form">
                <label for="notice">Write your notice below</label>
                <textarea name="notice" id="notice" cols="30" rows="10" autofocus required></textarea>
                <button type="submit" name="submit">Add Notice</button>
            </form>
        </div>
        <div class="notice-scroll">
            <h2>Notice Box</h2>
            <marquee behavior="" direction="up" height="200" class="box">
                <div class="list">
                    <ol name="item-collection">
                       
                         
                        <?php
                            $query = "SELECT * FROM `notice`";
                            $result = mysqli_query($con,$query);

                            if($result -> num_rows > 0){
                                while($row = $result -> fetch_assoc()){
                                    ?><li name="list-item"><?php echo $row['notice'];?></li><?php
                                }
                            }

                        ?>
                        
                    </ol>
                </div>
            </marquee>
        </div>
    </div>
</body>
</html>
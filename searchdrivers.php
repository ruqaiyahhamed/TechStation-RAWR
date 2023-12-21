<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>

<body>

<h3>Search for A driver</h3>

<form action= "" method="POST">

    <input type="text" name="Station" placeholder="Enter station you want to search">
    <input type="submit" name="search" value="Search Data">

</form>
    
<?php

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'phptest');

    if (isset($_POST['search'])) {
        $Station = $_POST['Station'];

        $query = " SELECT * FROM drivers where Station='$Station' ";
        $query_run = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_array($query_run)) {
            ?>
            <form action="" method="POST">
                <input type="text" name="Name" value="<?php echo $row['Name'] ?> "/><br><br>
                <input type="text" name="number" value="<?php echo $row['number'] ?> "/><br><br>
                <input type="text" name="Station" value="<?php echo $row['Station'] ?> "/><br><br>
                <input type="text" name="Status" value="<?php echo $row['Status'] ?> "/><br><br>
        </form>

            <?php
        }
    }


?>

</body>
</html>
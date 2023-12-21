<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>

<body>

<h3>Search for A student</h3>
<form action= "" method="POST">

    <input type="text" name="id" placeholder="Enter ID you want to search">
    <input type="submit" name="search" value="Search Data">

</form>
    
<?php

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'phptest');

    if (isset($_POST['search'])) {
        $id = $_POST['id'];

        $query = " SELECT * FROM students where id='$id' ";
        $query_run = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_array($query_run)) {
            ?>
            <form action="" method="POST">
                <input type="text" name="Name" value="<?php echo $row['Name'] ?> "/><br><br>
                <input type="text" name="Email" value="<?php echo $row['Email'] ?> "/><br><br>
                <input type="text" name="Id" value="<?php echo $row['Id'] ?> "/><br><br>
                <input type="text" name="gender" value="<?php echo $row['gender'] ?> "/><br><br>
        </form>

            <?php
        }
    }


?>

</body>
</html>
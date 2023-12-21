<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>

<body>


<form action= "" method="POST">

    <input type="text" name="id" placeholder="Enter ID you want to search">
    <input type="submit" name="search" value="Search Data">

</form>
    
<?php

    $connection = mysqli_connect("localhost","root"و"");
    $db = mysqli_select_db($connection,'phptest');

    if (isset($_POST['search'])) {
        $id = $_POST['id'];

        $query = " SELECT * FROM students where id='$id' ";
        $query_run = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_array($query_run)) {
            ?>
            <form action="" method="POST">
                <input type="hidden" name="name" value="<?php echo $row['name'] ?> "/>
                <input type="text" name="email" value="<?php echo $row['email'] ?> "/>
                <input type="hidden" name="password" value="<?php echo $row['password'] ?> "/>
                <input type="text" name="number" value="<?php echo $row['number'] ?> "/>
                <input type="text" name="gender" value="<?php echo $row['gender'] ?> "/>
        </form>

            <?php
        }
    }


?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Document </title>
</head>

<body>
    
<h3> Delete student </h3>
<form action= "" method="POST">

    <input type="text" name="id" placeholder="Enter ID you want to delete">
    <input type="submit" name="delete" value="Delete Data">

</form>

</body>
</html>

<?php

    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,'phptest');

    if (isset($_POST['delete'])) {
        $id = $_POST['id'];

        $query = " DELETE FROM students where id='$id' ";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            echo '<script type="text/javascript"> alert("Data Successfully Deleted") </script>';
        }

        else {
            echo '<script type="text/javascript"> alert("Data Not Deleted") </script>';
        }
    }

?>

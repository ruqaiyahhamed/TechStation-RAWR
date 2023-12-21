
<html>
    <head>
        <title> insert records</title>
    </head>
    <body>


        <?php
         if(isset($_SESSION['status']))
         {

            ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
             <strong>Hey! </strong><?php echo $_SESSION['status'];?>
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <?php
            unset($_SESSION['status']);
         }


        ?>
        <h3> Insert new student </h3>
        <br>
        <form name="form1" method="POST" action="code.php">
        Id: <br>
        <input type="text" name="id">
        <br>
        <br>
        Name: <br>
        <input type="text" name="name">
        <br>
       <br>
        Email: <br>
        <input type="text" name="email">
        <br>
<br>
        gender: <br>
        <input type="text" name="gender">
        <br>
        <br>
        <button type="submit" name="insert" >insert student</button>
        
        </form>
    </body>
</html>
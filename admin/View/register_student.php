<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../assets/boot_css.php' ?>
    <title>Register Stduent</title>
</head>

<body>
    <?php
    session_start();
    include '../Components/nav.php'?>
    <div class="container shadow col-md-5 m-auto p-4 rounded">
        <form action="../Controller/register_student.php" method="POST" enctype="multipart/form-data">
            <img class="d-flex m-auto" src="<?php include '../../assets/logo.php'?>" alt="">
            <h1 class="text-center">
                Register Student
            </h1>
            <label for="">Name</label>
            <input class="form-control" name="name" type="text">
            <label for="">Father Name</label>
            <input class="form-control" name="f_name" type="text">
            <label for="">Student Image</label>
            <input class="form-control" name="image" type="file">
            <?php 
                if(isset($_SESSION['error'])){
            ?>
            <p class="text-danger font-weight-bolder">
                <?php echo $_SESSION['error']?>
            </p>
            <?php }?>
            <input class="form-control my-3 btn btn-success" type="submit" value="Add Student">
        </form>
    </div>
</body>

</html>
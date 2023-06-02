<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../assets/boot_css.php'?>
    <title>Update Data</title>

</head>

<body>
    <?php include '../Components/nav.php'?>
    <div class="container shadow col-md-5 m-auto p-4 rounded">
        <form action="../Controller/update_student.php" method="POST" enctype="multipart/form-data">
            <?php
                $id = $_GET['id'];
                include '../../config/connect.php';
                $select = "SELECT * FROM users WHERE id=$id";
                $result = mysqli_query($connection,$select);
                if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
            ?>
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <img class="d-flex m-auto" src="<?php include '../../assets/logo.php'?>" alt="">
            <h1 class="text-center">
                Register Student
            </h1>
            <label for="">Name</label>
            <input class="form-control" name="name" value="<?php echo $row['name']?>" type="text">
            <label for="">Father Name</label>
            <input class="form-control" name="f_name" value="<?php echo $row['father_name']?>" type="text">
            <label for="">Student Image</label>
            <input class="form-control" name="image" type="file">
            <?php 
                if(isset($_SESSION['error'])){
            ?>
            <p class="text-danger font-weight-bolder">
                <?php echo $_SESSION['error']?>
            </p>
            <?php }?>
            <input class="form-control my-3 btn btn-info" type="submit" value="Update Student">

            <?php }} ?>

        </form>
    </div>
</body>

</html>
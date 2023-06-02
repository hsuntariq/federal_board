<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../assets/boot_css.php'?>
    <title>Document</title>
</head>

<body>
    <?php include '../admin/Components/nav.php'?>
    <div class="container shadow col-md-5 m-auto p-4 rounded">
        <form action="./controller/register.php" method="POST" enctype="multipart/form-data">
            <h1 class="text-center">
                Register Student
            </h1>
            <label for="">Name</label>
            <input class="form-control" name="name" type="text">
            <label for="">UserName</label>
            <input class="form-control" name="username" type="text">
            <label for="">Password</label>
            <input class="form-control" name="password" type="password">
            <input class="form-control my-3 btn btn-info" type="submit" value="Register">


        </form>
    </div>
</body>

</html>
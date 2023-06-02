<?php
    include '../../config/connect.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $f_name = $_POST['f_name'];
    if(isset($_FILES['image'])){
        $fileName = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_name,'../assets/images/'.$fileName);
    }
    $update = "UPDATE `users` SET `name`='{$name}',`father_name`='{$f_name}',`image`='{$fileName}' WHERE id = $id";
    mysqli_query($connection,$update);
    header("Location: http://localhost/FederalBoard/admin/View/home.php")
?>
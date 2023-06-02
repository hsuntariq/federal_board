<?php
    include '../../config/connect.php';
    $name = $_POST['name'];
    $f_name = $_POST['f_name'];
    if(isset($_FILES['image'])){
        $fileName = $_FILES['image']['name']; 
        $fileSize = $_FILES['image']['size']; 
        $tmp_name = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmp_name,'../assets/images/'.$fileName);
    }
    $insert="INSERT INTO users(name,father_name,image) VALUES('{$name}','{$f_name}','{$fileName}')";
    mysqli_query($connection,$insert);
    header('Location: http://localhost/FederalBoard/admin/View/home.php')
?>
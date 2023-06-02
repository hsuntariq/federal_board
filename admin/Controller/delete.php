<?php
    include '../../config/connect.php';
    $id = $_GET['id'];
    $delete = "DELETE FROM users WHERE id = $id";
    mysqli_query($connection,$delete);
    session_start();
    $_SESSION['del_message'] = 'Data Deleted Successully';
    header("Location: http://localhost/FederalBoard/admin/View/home.php")
?>
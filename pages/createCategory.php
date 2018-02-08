<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/18/15
 * Time: 11:13 AM
 */

require_once 'commons.php';
require "databaseAndFunctions.php";

if(isset($_POST['name']) && isset($_POST['description']) && isset($_POST['institution'])){

    $title = $_POST['name'];
    $inst = $_POST['institution'];
    $desc = $_POST['description'];

    $sql = "INSERT INTO `category_info`(`category_name`, `institution`, `description`) VALUES ('$title','$inst','$desc')";
    $result = mysqli_query($DB,$sql);
    if($result){
        echo 'created successfully';
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }else{
        echo "error in submission";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}else{
    echo "not enough values";
    echo json_encode($_POST);
}
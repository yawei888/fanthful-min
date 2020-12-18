<?php
    $username = $_GET['username'];
    $password=$_GET['password'];
    $tel = $_GET['tel'];
    $id=$_GET['id'];


echo $name,$englishName,$price,$pic,$uid;
    $con = mysqli_connect('localhost','root','123456','shihuo');

    $sql = "UPDATE `users` SET `username` = '$username' ,`password` = '$password' ,`tel` = '$tel'  WHERE `id` = '$id'";

    $res = mysqli_query($con,$sql);

    if(!$res){
        echo json_encode(array("code"=>0,"msg"=>"修改数据失败"));
    }else{
        echo json_encode(array("code"=>$res,"msg"=>"修改数据成功"));
    }
?>
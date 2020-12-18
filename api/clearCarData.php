<?php
    // 获取传递过来的用名 和 商品id
    $username = $_GET['username'];

    $con = mysqli_connect('localhost','root','123456','shihuo');

    $sql = "DELETE FROM `car` WHERE  `username` = '$username'";

    $res = mysqli_query($con,$sql);

    if(!$res){
        // die('error for mysqli' . mysqli_error());
        echo json_encode(array("code"=>false,"msg"=>"删除数据失败"));
    }else{
        echo json_encode(array("code"=>$res,"msg"=>"删除数据成功"));
    }
?>
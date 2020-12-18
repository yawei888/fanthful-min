<?php
    // 获取传递过来的商品id
    $uid = $_GET['uid'];


    $con = mysqli_connect('localhost','root','123456','shihuo');

    $sql = "DELETE FROM `newdata` WHERE `newdata`.`uid` = '$uid'";

    $res = mysqli_query($con,$sql);

    if(!$res){
        // die('error for mysqli' . mysqli_error());
        echo json_encode(array("code"=>false,"msg"=>"删除数据失败"));
    }else{
        echo json_encode(array("code"=>$res,"msg"=>"删除数据成功"));
    }
?>
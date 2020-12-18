<?php
    $username = $_GET['username'];
    $uid = $_GET['uid'];
    $goods_num = $_GET['goods_num'];

    // $username = '婧婧';
    // $goods_id = 5;
    // $goods_num = 7;
    $con = mysqli_connect('localhost','root','123456','shihuo');

    $sql = "UPDATE `car` SET `goods_num` = ' $goods_num' WHERE `uid` = '$uid' AND `username` = '$username'";

    $res = mysqli_query($con,$sql);

    if(!$res){
        // die('error for mysqli' . mysqli_error());
        echo json_encode(array("code"=>0,"msg"=>"修改数据失败"));
    }else{
        echo json_encode(array("code"=>$res,"msg"=>"修改数据成功"));
    }
?>
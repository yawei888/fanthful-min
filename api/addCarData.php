<?php
    # 用户名 商品id
    $username = $_GET['username'];
    $uid = $_GET['uid'];
    // $username = '婧婧';
    // $uid = '8';
    $num = $_GET['num'];
    $con = mysqli_connect('localhost','root','123456','shihuo');


    $sql = "SELECT * FROM `car` WHERE `username`='$username' AND `uid`='$uid'";
    $res = mysqli_query($con,$sql);

    if(!$res){
        die('error for mysql' . mysqli_error($con));
    }
    $row = mysqli_fetch_assoc($res);
        # 如果购物车表中存在该条数据，让这个条数据中的goods_num 值加 1
    if($row){
        $goodsNum = $row['goods_num']+= $num;
        $res2= mysqli_query($con,"UPDATE `car` SET `goods_num` = '$goodsNum'  WHERE `username`='$username' AND `uid`='$uid'");
    }else{
        # 如果不存在，就往car表中 添加数据
        $res2= mysqli_query($con,"INSERT INTO `car` (`uid`, `username`, `goods_num`) VALUES ($uid, '$username', '$num')");
    }
    if($res2){
        echo json_encode(array("code"=>true,"msg"=>"添加数据成功"));
    }
    

?>
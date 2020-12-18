<?php
    $name = $_GET['name'];
    $englishName=$_GET['englishName'];
    $pic = $_GET['pic'];
    $price=$_GET['price'];
    $uid=$_GET['uid'];


echo $name,$englishName,$price,$pic,$uid;
    $con = mysqli_connect('localhost','root','123456','shihuo');

    $sql = "UPDATE `newdata` SET `name` = '$name' ,`englishName` = '$englishName' ,`pic` = '$pic' ,`price` = '$price' , `uid` = '$uid' WHERE `uid` = '$uid'";

    $res = mysqli_query($con,$sql);

    if(!$res){
        echo json_encode(array("code"=>0,"msg"=>"修改数据失败"));
    }else{
        echo json_encode(array("code"=>$res,"msg"=>"修改数据成功"));
    }
?>
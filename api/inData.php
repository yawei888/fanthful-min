<?php

    # 用户名 商品图片 价格等 
    $name = $_GET['name'];
    $englishName=$_GET['englishName'];
    $pic = $_GET['pic'];
    $price=$_GET['price'];
    $buyCount=$_GET['buyCount'];
    $uid=$_GET['uid'];

    #链接数据库 查询
    $sql="SELECT * FROM `newdata`  WHERE `uid` != '$uid'"; 

    #执行SQL语句
    $res=mysqli_query($con,$sql);

    if(!$res){
        die('报错'.mysqli_error($con));
    }
    


    $con = mysqli_connect('localhost','root','123456','shihuo');
    $sql2 = "INSERT INTO `newdata` (`id`, `name`, `pic`,`englishName`,`price`,`buyCount`,`uid`) VALUES (NULL, '$name', '$pic','$englishName','$price','$buyCount','$uid')";
    $res1 = mysqli_query($con,$sql2);
    if($res1){
        print_r(1);
    }
    


    


?>
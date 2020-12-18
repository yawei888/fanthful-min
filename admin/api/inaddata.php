<?php

    # 用户名 商品图片 价格等 
    // $name = 22;
    // $englishName=12;
    // $pic =33;
    // $price=44;
    // $uid=55;
    $name = $_GET['name'];
    $englishName=$_GET['englishName'];
    $pic = $_GET['pic'];
    $price=$_GET['price'];
    $uid=$_GET['uid'];


    // print_r($name);
    // print_r($pic);
    $con = mysqli_connect('localhost','root','123456','shihuo');
    
    $sql ="INSERT INTO `newdata` (`id`, `name`, `pic`, `englishName`, `price`, `buyCount`, `uid`, `is_select`, `buyNum`) VALUES (NULL, ' $name', '$pic ', '$englishName', '$price', '2', '$uid', '0', '0');";
    $res = mysqli_query($con,$sql);
    if($res){
        // print_r(a);
        $arr=array("code"=>1);
        echo $arr;
    }

?>
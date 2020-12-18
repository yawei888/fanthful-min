<?php

    # nav banner 图片
    $appimgUrl = $_GET['appimgUrl'];
    $imgUrl=$_GET['imgUrl'];



    // print_r($name);
    // print_r($pic)
    $con = mysqli_connect('localhost','root','123456','shihuo');
    $sql = "INSERT INTO `navs` (`id`, `appimgUrl`, `imgUrl`) VALUES (NULL, '$appimgUrl', '$imgUrl')";
    $res = mysqli_query($con,$sql);
    if($res){
        print_r(1);
    }
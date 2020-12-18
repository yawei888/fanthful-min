<?php

$con = mysqli_connect('localhost','root','123456','shihuo');

$username = $_POST['username'];
$password = $_POST['password'];
$tel = $_POST['tel'];

// $username = "大哥哥";
//     $password = "111111";

// $sql = "SELECT * FROM `users` WHERE `username`='$username' AND `password`='$password'";

 // 用户逻辑
    /*
    获取到用户名和密码之后 先去数据库中判断这个用户名是否存在
    如果用户名存在，直接返回 用户名已经存在
    如果用户名不存在，把这个用户名和密码 插入数据库
    */

#链接数据库 查询
$sql="SELECT * FROM `users`  WHERE `username` = '$username'";

#执行SQL语句
$res=mysqli_query($con,$sql);

if(!$res){
    die('报错'.mysqli_error($con));
}

//转php
$row = mysqli_fetch_assoc($res);


if($row){
    echo json_encode(array(
        "code" => 0,
        "message" => "注册失败，用户名已存在"
        ));

        // print_r("用户名存在");

}else{
    //数据库不存在该用户名，可以往数据库中添加
    $qsl1 = mysqli_query($con,"INSERT INTO `users` (`id`, `username`,`password`,`tel`) VALUES (null, '$username', '$password','$tel');");
    $res1=mysqli_query($con,$qsl1);
    echo json_encode(array(
        "code" => 1,
        "message" => "注册成功"
        ));
    // if($res1){
    //     print_r('注册成功');
    // }
};


?>
<?php

    # 用户名 tel 密码

    $username = $_GET['username'];
    $password=$_GET['password'];
    $tel = $_GET['tel'];


    $con = mysqli_connect('localhost','root','123456','shihuo');
    
    $sql ="INSERT INTO `users` (`id`, `username`, `password`, `tel`) VALUES (NULL, ' $username', '$password ', '$tel');";
    $res = mysqli_query($con,$sql);
    if($res){
        // print_r(a);
        $arr=array("code"=>1);
        echo $arr;
    }

?>
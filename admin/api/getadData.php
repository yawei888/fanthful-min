<?php
    # 链接数据库
    $con = mysqli_connect('localhost','root','123456','shihuo');
    // $s = ($start-1)*$len;
    # 设置SQL语句
    $sql = "SELECT * FROM `newdata`";

    # 执行SQL语句
    $res=mysqli_query($con,$sql);

    $arr=array();

    $row=mysqli_fetch_assoc($res);

    while($row){
        array_push($arr,$row);
        $row=mysqli_fetch_assoc($res);
    }
    print_r(json_encode($arr,JSON_UNESCAPED_UNICODE));
?>
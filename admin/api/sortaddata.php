<?php
    // 查：
    /* 
        【1】SELECT * FROM `表`
        【2】SELECT * FROM `表` WHERE 条件
            如果有多个条件限制的时候 用AND链接
        【3】SELECT *  FROM `表` WHERE `字段` LIKE '%关键字%'
        【4】按照字段进行排序
            SELECT *  FROM `表` WHERE `字段` LIKE '%关键字% ORDER BY `字段` ASC'
            ASC:升序
            DESC:降序
    
    */
    // $sql = "SELECT * FROM `student` WHERE `gender`='男' AND `age` = '20'";
    // $sql = "SELECT * FROM `student` WHERE `name` LIKE '%三%'";
    //从前端获取 搜索框.val()
    $names=$_GET['names'];

    $con = mysqli_connect('localhost','root','123456','shihuo');

    $sql = "SELECT * FROM `newdata` WHERE `name` LIKE '%$names%'";

    $res = mysqli_query($con,$sql);

    if(!$res){
        die("数据库的错误：" . mysqli_error($con));
    }

    $arr = array();
    $row = mysqli_fetch_assoc($res);

    while($row){
        array_push($arr,$row);
        $row = mysqli_fetch_assoc($res);
    }

    print_r(json_encode($arr,JSON_UNESCAPED_UNICODE));
?>
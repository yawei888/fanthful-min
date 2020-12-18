<?php
// $name=$_GET['name'];
// $name = $_POST['name'];


    $start =$_GET['start'];
    $len=$_GET['len'];
    $s=($start-1)*$len;

    # 链接数据库
    $con = mysqli_connect('localhost','root','123456','shihuo');
  
    # 设置SQL语句
    $sql = "SELECT * FROM `newdata` LIMIT $len,$s";

    # 执行SQL语句
    $res=mysqli_query($con,$sql);

    $arr=array();

    $row=mysqli_fetch_assoc($res);

    while($row){
        array_push($arr,$row);
        $row=mysqli_fetch_assoc($res);
    }
    print_r(json_encode($arr,JSON_UNESCAPED_UNICODE));


    // if(!$res){
    //     die('error' . mysqli_error($con));
    // }
    // # 数据的处理
    // $dataArr = array();
    // $row = mysqli_fetch_assoc($res);
    // while($row){
    //     array_push($dataArr,$row);
    //     $row = mysqli_fetch_assoc($res);
    // }
    // print_r(json_encode($dataArr,JSON_UNESCAPED_UNICODE));
    # $row 得到的是当前请求的20条数据
    
    // $sql2 = "SELECT COUNT(*) `count` FROM `goods`";
    // $res2 = mysqli_query($con,$sql2);
  
    // if (!$res2) {
    //   die('error for mysql: ' . mysqli_error($con));
    // }
    // $row2 = mysqli_fetch_assoc($res2);
    # 得到数据的总数量 
    # 需要把商品数据 和总数量都返回 给前端


    // echo json_encode(array(
    // //   // "total" => $row2['count'],
    // // //   "list" => $dataArr,
    //   "code" => 1,
    //   "message" => "获取列表数据成功"
    // ));
?>
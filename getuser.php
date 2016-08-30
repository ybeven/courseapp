<?php 
	session_start();
	//var_dump($_POST);
    if(!empty($_SESSION['name'])) {session_destroy();}
    session_destroy();

	$con=mysqli_connect("us-cdbr-iron-east-04.cleardb.net","b2d07b2acdadc6","178d1c7b","ad_2f57f4263383513"); 
	if (mysqli_connect_errno($con)) 
	{ 
    	echo "连接 MySQL 失败: " . mysqli_connect_error(); 
	} 

    $sql = "select id from usertable where 1";
	$result=mysqli_query($con,$sql);

	// 数字数组
	// $row=mysqli_fetch_array($result,MYSQLI_NUM);
	// printf ("%s : %s",$row[0],$row[1]);

	// 关联数组
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	echo $row['id'];
	// printf ("%s : %s",$row["name"],$row["url"]);

	// 释放结果集
	mysqli_free_result($result);

	mysqli_close($con);

	if ($fileflag == 1) {
		session_start();
		$_SESSION['name']=$_POST["username"];
		echo "1";
	}
    else echo "0";

	// if($row[0] == 1) {
	// 	session_start();
	// 	$_SESSION['name']=$_POST["loginName"];
	// 	echo "1";
	// }
	// else echo "1";

?>
<?php 
	session_start();
	//var_dump($_POST);
    if(!empty($_SESSION['name'])) {session_destroy();}
    session_destroy();

	//var_dump($_POST);
	//set user
	//echo $_POST["username"]='kewei111';
	//echo $_POST["password"]=md5('123');
	$db = mysql_connect('us-cdbr-iron-east-04.cleardb.net','b2d07b2acdadc6','178d1c7b') or die('Unable to connect .');
	$connection = mysql_select_db('ad_2f57f4263383513',$db) or die(mysql_error($db));
	mysql_query("SET NAMES 'utf8'");
	// echo $connection;
	// $sql = "select file_name,file_size,file_type,id,file_data from file where file.mine_id=65";
	$username = $_POST['username'];
	
	if($_POST["password"]==NULL||$_POST["username"]==NULL) {echo "-2";die();}
	$username = iconv('utf-8', 'gbk//IGNORE', $_POST['username']);

	$sql = "select id from usertable where 1";
	
	$file_id = mysql_query($sql,$db) or die(mysql_error());
	
	for($i=0;$m=mysql_fetch_array($file_id);$i++)
	{	
		$fileflag = $m['id'];
	}	
	//$query="insert into [science].[dbo].[Usertable] values('$username','$_POST[password]',null)";var_dump($query);
	//var_dump($_POST[password]);
	//echo "rows:";
	//var_dump($row);
	//echo $_POST["password"]."::row0:".$row[0];

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


$db = mysqli_init();
    $db->ssl_set(PATH_TO_SSL_CLIENT_KEY_FILE, PATH_TO_SSL_CLIENT_CERT_FILE, PATH_TO_CA_CERT_FILE, null, null);
    $db->real_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE_NAME);

    <?php 
	require_once('lib.inc.php');
	session_start();
	//var_dump($_POST);
    if(!empty($_SESSION['name'])) {session_destroy();}
    session_destroy();

	//var_dump($_POST);
	//set user
	//echo $_POST["username"]='kewei111';
	//echo $_POST["password"]=md5('123');
	$db = getDb($db_config);
	if (!$db) {
		echo "203\r\n" . $db == null ? "数据库连接错误" :(mysql_error($db));
		exit();
	}
	// echo $connection;
	// $sql = "select file_name,file_size,file_type,id,file_data from file where file.mine_id=65";
	$username = $_POST['username'];
	
	if($_POST["password"]==NULL||$_POST["username"]==NULL) {echo "-2";die();}
	// $username = iconv('utf-8', 'gbk//IGNORE', $_POST['username']);

	$sql = "select id from usertable where id = 1";
	$result = mysql_query($sql, $db);
	if (!$result) {
	echo "203\r\nmysql query error" . mysql_error($db);
	exit();
	}

	for($i=0;$m=mysql_fetch_array($result);$i++)
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
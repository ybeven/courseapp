


<?php 


	//var_dump($_POST);
	//set user
	//echo $_POST["username"]='kewei111';
	//echo $_POST["password"]=md5('123');
	
$dbms='mysql';     //数据库类型
$host='us-cdbr-iron-east-04.cleardb.net'; //数据库主机名
$dbName='ad_2f57f4263383513';    //使用的数据库
$user='b2d07b2acdadc6';      //数据库连接用户名
$pass='178d1c7b';          //对应的密码
$dsn="$dbms:host=$host;dbname=$dbName";


try {
    $dbh = new PDO($dsn, $user, $pass); //初始化一个PDO对象
    echo "连接成功<br/>";
    // 你还可以进行一次搜索操作
    foreach ($dbh->query('SELECT id from usertable where 1') as $row) {
        print_r($row); //你可以用 echo($GLOBAL); 来看到这些值
    }
    
    $dbh = null;
} catch (PDOException $e) {
    die ("Error!: " . $e->getMessage() . "<br/>");
}
//默认这个不是长连接，如果需要数据库长连接，需要最后加一个参数：array(PDO::ATTR_PERSISTENT => true) 变成这样：
$db = new PDO($dsn, $user, $pass, array(PDO::ATTR_PERSISTENT => true));
    


?>
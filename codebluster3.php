<?php
$conn = Mysql_connect('localhost','root','');
$db = Mysql_select_db('test');
	include_once('input.php');
	
	$name = $_post('name');
	$age = $_post('age');
	
	if(mysql_query("INSERT INTO REGISTER VALUES("$name",'$age')")){
		echo "sucessfully Inserted";
	}
?>
<?php
/* Write your PHP code here */
echo "Hello world, I'm a <strong>PHP</strong> script!";
?>



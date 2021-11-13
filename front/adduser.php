<?
*//
var_dump( $_Get );
//*
// 1. connect to DB - mysql - mysqli - PDO 
$dbc = new mysqli ('localhost', 'root','mobtani');
// 2. create insert qurey
$sql = "INSERT INTO user ('title','body')
		VALUES('my title','متن پیام')";
// 3. execute query 
$result = $dbc -> query ( $sql ); // mysqli_query
// 4. close connection
$dbc -> close(); //mysqli_close
?>
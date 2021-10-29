<?php
/*
var_dump( $_POST );
var_dump( $_GET );
var_dump( $_REQUEST );
*/
// 1.connect to DB - mysql - mysqli - PDO
$dbc = new mysqli ('localhost', 'root', '', 'message'); // mysqli_connect
// 2. create insert query
$sql = "INSERT INTO message(title, body)
		VALUES('my title', 'متن پیام')";
// 3. execute query
$result = $dbc -> query ( $sql ); // mysqli_query
// 4. close connection
$dbc -> close(); //mysqli_close
echo 'موفقیت';
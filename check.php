<?php
	$db_host="localhost";
	$db_user="root";
	$db_password="TEst!234";
	$db_name="sqldb";
	$con=mysqli_connect($db_host, $db_user, $db_password, $db_name);

	if( mysqli_connect_error($con) ) {
		echo "접속 실패","<br>";
		echo "오류 원인:", mysqli_connect_error();
		exit();
	}
	echo "MYSQL 연결 성공";
	mysqli_close($con);
?>

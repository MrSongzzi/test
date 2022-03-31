<?php
$con = mysqli_connect("localhost","root","TEst!234","sqldb") or die("MYSQL 연결에 실패하였습니다");

	$userid = $_POST["userid"];
	$sql = "DELETE FROM usertbl WHERE userid = '".$userid."'";
	$ret = mysqli_query($con, $sql);

	echo "회원삭제 결과 안내 :"."<br>";

	if($ret) {
		echo $userid." 가 삭제되었습니다"; 
	}
	else {
		echo "삭제 실패"."<br>";
		echo "실패 원인 : ".mysqli_error($con);
	}
 	mysqli_close($con);

echo "<br><br> <a href='delete.php'> [삭제페이지로 이동] </a>";

?>







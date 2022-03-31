<?php
$con=mysqli_connect("localhost","root","TEst!234","sqldb") or die("접속실패");
	$userid=$_POST["userid"];
	$name = $_POST["name"];
	$birthyear = $_POST["birthyear"];
	$addr = $_POST["addr"];
	$mobile1 = $_POST["mobile1"];
	$mobile2 = $_POST["mobile2"];
	$height = $_POST["height"];
	$mdate = date("Y-m-d");

	$sql="INSERT INTO usertbl VALUES('".$userid."','".$name."',".$birthyear.",'".$addr."','".$mobile1."','".$mobile2."',".$height.",'".$mdate."')";

	$ret = mysqli_query($con,$sql);

	echo "<h2> 가입 처리 결과 </h2>";

	if($ret) {
		echo "데이터 입력 완료";
	}	
	else {
		echo "데이터 입력 실패"."<br>";
		echo "실패원인 : ".mysqli_error($con);		
	}
	mysqli_close($con);

	echo "<br><a href='join.php'>[가입페이지로 이동]</a>";

?>

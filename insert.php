<?php
include('BaseModel.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
	$account_name = $_POST["account_name"];
	$username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
	$img_profile = $_FILES["img_profile"];
	$path="Template/img_profile/";
	
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO `imghub_account` (`username`, `password`, `email`, `account_name`, `intro`, `img_profile`, `account_group`, `grouplevel`, `level`, `lastupdate`, `since`) 
			VALUES ('$username', '$password', '$email', '$account_name', '', '$img_profile', 'No group', '', 'member', '', '')";

	$result = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
	
	//ปิดการเชื่อมต่อ database
	mysqli_close($con);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม

		// echo '<pre>';
        // print_r($result);
        // echo  '</pre>';
	
	if($result){
	echo "<script type='text/javascript'>";
	echo "alert('Register Succesfuly');";
	echo "window.location = 'index.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
	echo "alert('Error back to register again');";
	echo "</script>";
}
?>
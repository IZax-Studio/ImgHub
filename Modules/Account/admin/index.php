<?php session_start(); 
include('../../../BaseModel.php');

  $ID = $_SESSION['ID'];
  $name = $_SESSION['account_name'];
  $level = $_SESSION['level'];
  $group = $_SESSION['account_group'];
  $img_profile = $_SESSION['img_profile'];
 	if($level!='admin'){
    Header("Location: logout.php");  
  }  
?>
<?php include('header.inc.php'); ?>
<!DOCTYPE html>
<html style="background-color:black">
<head>
	<title></title>
</head>
<body>
<?php 
	if(!isset($_GET['action'])){ 
		require_once($path.'view.inc.php');
	}
?>
</body>
</html>
<?php session_start(); 
include('../../../BaseModel.php');

  $ID = $_SESSION['ID'];
  $name = $_SESSION['account_name'];
  $level = $_SESSION['level'];
  $group = $_SESSION['account_group'];
  $img_profile = $_SESSION['img_profile'];

 	if($level!='member'){
    Header("Location: logout.php");  
  }  
?>


<?php 
	if ($_GET['theme'] == 'lime'){ 
		require_once($path.'header.inc.php');
  }
  else{ 
    require_once($path.'header_red.inc.php');
  }
?>




<!DOCTYPE html>
<html style="background-color:black">
<head>
	<title></title>
</head>
<body>
<div class=top-bar>
  <table>
    <th style="padding: 10px;border-color: #f0f8ff00;"> <f style="font-size: x-large; color: wheat;"><?php echo $name; ?></f> </th><th style="border-color: #f0f8ff00;"><img class="img-profile" id="img_profile" style="margin: auto;" src="<?php echo "../../../img_profile/",$img_profile ?>"></th>
  </table>
</div>
<?php 
	if(!isset($_GET['action'])){ 
		require_once($path.'view.inc.php');
  }
  elseif ($_GET['action'] == 'update'){ 
    require_once($path.'update.inc.php');
  }
?>
</body>



</html>


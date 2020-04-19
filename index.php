<?php include('Model/BaseModel.php');
$path = "modules/user/views/"; 

$img_profile = "img_profile/";
 ?>
<?php
date_default_timezone_set('Asia/Bangkok');
?>
<!DOCTYPE html>
<html style="background-color:black;" lang="en">
    <head>
        <?php require_once('header.inc.php') ?>
    </head>
    <body>
        <div> 
            <div>
                <?php require_once("/body.inc.php"); ?>
            </div> 
        </div> 
        <?php require_once('footer.inc.php'); ?>
    </body>
</html>

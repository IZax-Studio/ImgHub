<?php 
session_start();
        if(isset($_POST['username'])){
                  include("BaseModel.php");
                  $username = $_POST['username'];
                  $password = $_POST['password'];

                  $sql="SELECT * FROM `imghub_account` 
                  WHERE  username= '$username' 
                  AND  password= '$password' ";
                  $result = mysqli_query($con,$sql);
				
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["id"] = $row["id"];
                      $_SESSION["account_name"] = $row["account_name"];
                      $_SESSION["level"] = $row["level"];
                      $_SESSION["account_group"] = $row["account_group"];
                      $_SESSION["img_profile"] = $row["img_profile"];

                      if($_SESSION["level"]=="admin"){ 

                        Header("Location: ../Modules/Account/admin/index.php");
                      }
                  if ($_SESSION["level"]=="member"){ 

                        Header("Location: ../Modules/Account/member/index.php");
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" username หรือ  password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: ../index.php"); //user & password incorrect back to login again
 
        }
?>
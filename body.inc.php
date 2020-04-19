<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#img_user').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }else{
            $('#img_user').attr('src', 'template/image/account_profile.png');
        }
    }
</script>

<body style="background-color:black;" onload="myFunction()" style="margin:0;">

<div id="loader"></div>

<div style="display:none;" id="myDiv" class="animate-bottom">
<!-- ======================================================Left menu====================================================== -->

<ul id="nav-two" class="nav">
  <li><a  onclick="openNav()" style="font-size: 25px;">Login</a>
  <audio id="sound" controls preload="auto"><source src="template/sounds/hover.mp3" controls></source></audio>
  </li>
  <li><a  onclick="openNavRg()" style="font-size: 25px;">Register</a></li>
  <li><a  onclick="openNavAb()" style="font-size: 25px;">About</a></li>
</ul>
<!-- =======================================================Welcome======================================================== -->

<div style="margin-left:25%;padding:1px 16px;height:1000px;">
  <img style="margin: auto;width: 100%;height: 100%;" src="template/image/Welcome.jpg">
</div>

<!-- ======================================================Login Page====================================================== -->

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>


<div class="container" style="padding-top:100px">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="border-radius: 30px;background-color: aquamarine;">
      <h3 align="center">
      <span class="glyphicon glyphicon-lock"> </span>
      ImgHub Login </h3>
      <form  name="formlogin" action="model/check_login.php" method="POST" id="login" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text" style="border-radius: 12px;" name="username" class="form-control input-text" required placeholder="Username" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="password" style="border-radius: 12px;" name="password" class="form-control input-text" required placeholder="Password" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" style="border-radius: 12px;" class="btn btn-success" id="btn">
            <span class="glyphicon glyphicon-log-in"> </span>
             Login </button>
             <center>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

</div>
<!-- ======================================================Register====================================================== -->

<div id="mySidenavRg" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNavRg()">&times;</a>


<form id="formRegister" name="formRegister" enctype="multipart/form-data" method="post" action="model/insert.php" style="background-color: #ebebeb;">
  <p><br />
    <br />
  </p>
  <table width="700" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="40" colspan="2" align="center" bgcolor="#D6D5D6"><b>สมัครสมาชิก</b></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td width="117" align="right" bgcolor="#EBEBEB">ชื่อที่ใช้แสดง 
    :</td>
      <td bgcolor="#EBEBEB"><input type="text" name="account_name" id="account_name" class="input-text" style="width: 50%; height: 35px;" placeholder="ชื่อที่ใช้แลดง"  required="required"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">Username :</td>
      <td bgcolor="#EBEBEB"><input type="text" name="username" id="username" class="input-text" style="width: 50%; height: 35px;" placeholder="ตัวเลขหรือภาษาอังกฤษเท่านั้น"  required="required"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">Password :
  <label> </label></td>
      <td bgcolor="#EBEBEB"><input type="password" name="password" id="password" class="input-text" style="width: 50%; height: 35px;" placeholder="ตัวเลขหรือภาษาอังกฤษเท่านั้น" required="required"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">Email :
  <label> </label></td>
      <td bgcolor="#EBEBEB"><input type="text" name="email" id="email" class="input-text" style="width: 50%; height: 35px;" placeholder="ตัวเลขหรือภาษาอังกฤษเท่านั้น" required="required"/></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td style="height: 25px" bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr align="right">
      <td bgcolor="#EBEBEB">                    
                                                          <div>
                                                              <label>รูปโปรไฟล์ </label>
                                                              </td>
                                                              <td>
                                                              <img class="img-responsive" id="img_user" style="margin: auto;border-radius: 20px;border-style: solid;border-color: black;border-width: 2px;width: 256px;height: 256px;" src="template/image/account_profile.png">
                                                              <br>
                                                              <div class="upload-btn-wrapper">
                                                                <button class="btn">Upload a file</button>
                                                                  <input class="input-img" style="background-color: #ebebeb;" type='file' name="img_profile" id="img_profile" onchange="readURL(this);" />
                                                              </div>
                                                          </div>
        </td>
    </tr>
    <tr>
      <td align="right" bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB"> &nbsp;
      &nbsp; <input type="reset" name="Reset" id="button" value="Reset" />        
      <input type="submit" name="Register" id="Register" value="register" /></td>
    </tr>
    <tr>
      <td bgcolor="#EBEBEB">&nbsp;</td>
      <td bgcolor="#EBEBEB">&nbsp;</td>
    </tr>
  </table>
  <p><br />
    <br />
    <br />
    <br />
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>


</div>




<!-- ======================================================About====================================================== -->
<div id="mySidenavAb" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNavAb()">&times;</a>
  <img style="margin: auto;" src="template/image/About.png">

</div>

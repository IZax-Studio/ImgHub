<table style="width:100%">
<!-- -------Left_menu------ -->
<tr>
<th rowspan="2" style="width:20%;">
<div style="width:100%;">
	<div class="box" style="text-align: center;">
		<form action="logout.php">
			<h1>Admin Page!</h1>
            <?php echo $img_profile; ?>
			<h3> สวัสดี คุณ <?php echo $name; ?> สถานะ <?php echo $level; ?> </h3>
			<input class="botton" type="submit" value="ออกจากระบบ">
			<div>
			<marquee class="top-line">Group : <?php echo $group ?> </marquee>
		</form>
	</div>
</div>
	<div class="box" style="margin-top:2%;text-align: center;">
  		<input class="botton" type="botton" value="จัดการฟิตข่าว">
  		<input id="accGroup" class="botton" type="botton" value="จัดการกลุ่ม">
  		<input class="botton" type="botton" value="ข้อความ">
	</div>
</div>
</th>
<!-- -------Banner------ -->
<th>

<h1 style="text-align:center;color:lime;">Welcome to ImgHub</h1>

</th>
</tr>
<tr>
<!-- -------View------ -->
<td>



</td>
</tr>
</table>


<div id="winGroup" class="modal">

  <!-- Modal content -->
  <div class="modal-content" style="margin-top:2%;text-align: center;">
  <div class="close">x</div>

	  <p><u>จัดการกลุ่ม</u></p>
    <!-- ----ปุ่มจัดการ---- -->
		<input class="botton" type="botton" value="สร้างกลุ่ม">
  		<input id="accGroup" class="botton" type="botton" value="รายชื่อกลุ่มของคุณ">
  		<input class="botton" type="botton" value="เข้าร่วมกลุ่ม">


  </div>

</div>



<script>
// Get the modal
var modal = document.getElementById("winGroup");

// Get the button that opens the modal
var btn = document.getElementById("accGroup");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
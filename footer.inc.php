<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

function openNavRg() {
  document.getElementById("mySidenavRg").style.width = "100%";
}

function closeNavRg() {
  document.getElementById("mySidenavRg").style.width = "0";
}

function openNavAb() {
  document.getElementById("mySidenavAb").style.width = "100%";
}

function closeNavAb() {
  document.getElementById("mySidenavAb").style.width = "0";
}



$("#nav-two a")
  .each(function(i) {
    if (i != 0) {
      $("#sound")
        .clone()
        .attr("id", "sound" + i)
        .appendTo($(this).parent());
    }
    $(this).data("beep", i);
  })
  .mouseenter(function() {
    $("#sound" + $(this).data("beep"))[0].play();
  });
$("#sound").attr("id", "sound0");



</script>


<?php
if($_POST){
    if(isset($_FILES['img_profile'])){
        $name_file =  $_FILES['img_profile']['name'];
        $tmp_name =  $_FILES['img_profile']['tmp_name'];
        $locate_img ="img_profile/";
        move_uploaded_file($tmp_name,$locate_img.$name_file);
    }
}
?>
</body>

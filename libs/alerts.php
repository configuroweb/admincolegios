<?php
//custom alerts code!!
$currentuser=getLoggedMemberID();
//start magic
if ($currentuser=="admin") {
  # code...show custom alert for admin
  echo '<div class="alert alert-success fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong><span class="ti ti-announcement fa-2x"></span> </strong> <strong>&nbsp;&nbsp;Bienvenido a tu panel administrativo!!</strong>.
  </div>';
}
elseif ($currentuser=="guest") {
  # code...redirect unauthenticated users to login
  redirect("index.php?signIn=1");
}
  else {
        echo '<div class="alert alert-success fade-in fade-out">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong><span class="ti ti-announcement fa-2x"></span> </strong> <strong>&nbsp;&nbsp;Bienvenido a tu panel administrativo!!</strong>.
    </div>';
      }
?>

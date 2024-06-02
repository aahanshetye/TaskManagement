
<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  $loggedin = true;
}
else {
  $loggedin = false;
}

if($loggedin) {
    echo '<button class="addTask" style="color: #686868;"><a href="/TaskManagement/logout.php">Logout</a></button>';
}
?>
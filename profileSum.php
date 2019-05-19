<?php
require_once "init.php";
require_once "UserDetails.php";
require_once "profile.php";
?>
<?php
$profile = new Profile($_SESSION["email"]);
$profile->showExercise();
?>
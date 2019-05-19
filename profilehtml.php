<?php
require_once "init.php";
require_once "UserDetails.php";
require_once "profile.php";
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
body {
    padding-top: 4rem;
  background: white url("img/gym88.jpg") no-repeat top;
  background-size: cover;
  color: #ddd;
}

.mentor {
    padding-top: 3rem;
    }

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 5px;
  cursor: pointer;
}

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */
.button4 {background-color: #FFFF00	; color: black;} /* Gray */
.button5 {background-color: #555555;} /* Black */

table {
    border-radius: 10px;
    background-color: rgba(15, 15, 15, 0.55);;
    text-align: center;
    width:50%;
    margin-top: 3rem;
    margin-left:auto;
    margin-right:auto;
    margin-bottom: 3rem;
}

.forma {
    padding-top: 2rem;
    max-width: 400px;
    margin: 6px auto;
    margin-bottom: 10rem;
}

.upbar {
     padding-top: 0rem;
    }

    h1 {
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
}

menu-bar {
  display: flex;
  align-items: center;
  justify-content: center;
  padding-top: 2rem;
}

/* p {
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;
} */

a {
  text-decoration: none;
  color: #008CBA;
}

.box {
    border-radius: 10px;
    /* background-color: rgba(15, 15, 15, 0.55);; */
    text-align: center;
    min-width: 30rem;
    margin: 1rem, auto, 1rem, auto;
}

.box > img {
    padding: 1rem;
}

</style>

<div class="upbar">
  <a href="home.html">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="about.html">About</a>
</div>

  <body>
   <div class="menu-bar">

</div>

<form class="forma" action="http://localhost/tech/profilehtml.php" method="POST">
    <div class="form-group">
    <label for="exampleInputPassword1">% Fat</label>
    <input name="fat" type="text" class="form-control" id="exampleInputPassword1" placeholder="Update fat percentage">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">% Muscle</label>
    <input name="muscle" type="text" class="form-control" id="exampleInputPassword1" placeholder="Update Muscle percentage">
  </div>
  <button href="profilehtml.php" type="submit" class="btn btn-primary">Update</button>
  <a href="home.html" class="btn btn-primary">Log Out</a>
</form>

<table border="0px">
         <tr>
            <th>Email</th>
            <th>Gender</th>
            <th>Id</th>
            <th>Weight</th>
            <th>Height</th>
            <th>Age</th>
            <th>Fat_Percentage</th>
            <th>Muscle_Percentage</th>
         </tr>

		<?php

$UserDetails = new UserDetails($_SESSION["email"]);
$profile = new Profile($_SESSION["email"]);
$profile->showExercise();
if (isset($_POST['fat']) && isset($_POST['muscle']))
{
    $UserDetails->update_Characteristics($_POST['fat'], $_POST['muscle']);
    $comments = $UserDetails->compare_Characteristics();

    foreach($comments as $c){
      echo "<p style=\"text-align: center\"> $c </p>";
    }

}

$characteristics = $UserDetails->getCharacteristics();
echo "<tr>";
foreach ($characteristics as $c)
{
    echo "<td>$c</td>";
}
echo "</tr";

?>



  </body>

</html>





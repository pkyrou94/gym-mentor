<?php
require_once "init.php";
require_once "GymTrainer.php";
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>

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

.forma {
    padding-top: 2rem;
    max-width: 400px;
    margin: 6px auto;
    margin-bottom: 10rem;
}

body {
  background: white url("img/gym88.jpg") no-repeat top;
  background-size: cover;
  color: #ddd;
}

h1 {
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
}

p {
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;
}

a {
  text-decoration: none;
  color: #008CBA;
}
</style>
</head>
<body>


<div class="upbar">
  <a href="home.html">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="about.html">About</a>
</div>

<div class="mentor">
  <h1>Gym Mentor</h1>
</div>

<form class="forma" action="http://localhost/tech/GymTrainerinserthtml.php" method="POST">
    <div class="form-group">
    <label for="gender-select">Exercise muscle name</label>
    <select name="exercise" class="form-control" id="gender-select">
    <option></option>
    <option>Back</option>
      <option>Chest</option>
      <option>Bicep</option>
      <option>Legs</option>
      <option>Tricep</option>
      <option>Shoulders</option>
    </select>
  </div>
    <div class="form-group">
    <label for="gender-select">Difficulty level:</label>
    <select name="levelDif" class="form-control" id="gender-select">
    <option></option>
     <option>1</option>
      <option>2</option>
      <option>3</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Image name</label>
    <input name="pathImg" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter image name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Whrite a short description">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button href="GymTrainerinserthtml.php" type="submit" class="btn btn-primary">Submit</button>
</form>



</body>
</html>

<?php


$GymTrainer = new GymTrainer();


if (isset($_POST['pathImg']) && isset($_POST['levelDif']) && isset($_POST['exercise']) && isset($_POST['description']))
{
  $GymTrainer->checkEmpty($_POST['pathImg'], $_POST['exercise'], $_POST['levelDif']);
  
  $GymTrainer->checkSamePathing($_POST['pathImg']); 

  $GymTrainer->insertExcercise($_POST['pathImg'], $_POST['levelDif'], $_POST['exercise'], $_POST['description']);
}

?>

<?php
require_once "init.php";
require_once "Classes.php";
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
  background: white url("img/gym8.jpg") no-repeat top;
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

<form class="forma" action="http://localhost/tech/GymTrainerinsertclasshtml.php" method="POST">
    <div class="form-group">
    <label for="gender-select">Trainning Class Name</label>
    <select name="tcname" class="form-control" id="gender-select">
    <option></option>
    <option>Crossfit</option>
      <option>Yoga</option>
      <option>Grit</option>
      <option>Trx</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Trainer Name</label>
    <input name="trainername" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter image name">
  </div>

    <div class="form-group">
    <label for="gender-select">Seats:</label>
    <select name="seats" class="form-control" id="gender-select">
    <option></option>
     <option>4</option>
      <option>8</option>
      <option>12</option>
      <option>16</option>
      <option>20</option>
    </select>
  </div>
  <div class="form-group">
    <label for="gender-select">Days:</label>
    <select name="days" class="form-control" id="gender-select">
    <option></option>
     <option>Monday</option>
      <option>Tuesday</option>
      <option>Wednesday</option>
      <option>Thursday</option>
      <option>Friday</option>
      <option>Saturday</option>
      <option>Sunday</option>
    </select>
  </div>
  <div class="form-group">
    <label for="gender-select">Hours:</label>
    <select name="hours" class="form-control" id="gender-select">
    <option></option>
     <option>09:00 - 10:00</option>
     <option>09:30 - 10:30</option>

      <option>10:00 - 11:00</option>
      <option>10:30 - 11:30</option>

      <option>11:00 - 12:00</option>
      <option>11:30 - 12:30</option>

      <option>12:00 - 13:00</option>
      <option>12:30 - 13:30</option>

      <option>13:00 - 14:00</option>
      <option>13:30 - 14:30</option>

      <option>14:00 - 15:00</option>
      <option>14:30 - 15:30</option>

      <option>15:00 - 16:00</option>
      <option>15:30 - 16:30</option>

      <option>16:00 - 17:00</option>
      <option>16:30 - 17:30</option>

      <option>17:00 - 18:00</option>
      <option>17:30 - 18:30</option>

      <option>18:00 - 19:00</option>
      <option>18:30 - 19:30</option>

      <option>19:00 - 20:00</option>
      <option>19:30 - 20:30</option>

      <option>20:00 - 21:00</option>
      <option>20:30 - 21:30</option>

      <option>21:00 - 22:00</option>
      <option>21:30 - 22:30</option>
    </select>
  </div>
  <div class="form-group">
    <label for="gender-select">Class Hall Name:</label>
    <select name="chname" class="form-control" id="gender-select">
    <option></option>
     <option>Class A</option>
      <option>Class B</option>
      <option>Class C</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Trainer Id</label>
    <input name="TrainerId" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter image name">
  </div>
  <button href="GymTrainerinsertclasshtml.php" type="submit" class="btn btn-primary">Submit</button>
</form>


<?php

$Classes = new Classes();

if (isset($_POST['tcname']) && isset($_POST['trainername']) && isset($_POST['seats']) && isset($_POST['days']) && isset($_POST['hours']) && isset($_POST['chname']) && isset($_POST['TrainerId']))
{
    $Classes->checkEmpty($_POST['tcname'], $_POST['trainername'], $_POST['seats'], $_POST['days'], $_POST['hours'], $_POST['chname'], $_POST['TrainerId']);
    $Classes->checkSamePathing($_POST['days'], $_POST['hours'], $_POST['chname']);
    $Classes->insertClassDetails($_POST['tcname'], $_POST['trainername'], $_POST['seats'], $_POST['days'], $_POST['hours'], $_POST['chname'], $_POST['TrainerId']);

}

?>
</body>
</html>

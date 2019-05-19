<?php
require_once "init.php";
require_once "account.php";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
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

.upbar {
     padding-top: 1rem;

    }

.mentor {
    padding-top: 0rem;
    }

.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color: #f44336;} /* Red */
.button4 {background-color: #FFFF00	; color: black;} /* Gray */
.button5 {background-color: #555555;} /* Black */

.forma {
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

<form class="forma" action="http://localhost/tech/characteristicshtml.php" method="POST">
  <div class="form-group">
  <label for="exampleInputEmail1">email</label>
  <input name="weight" type="text" class="form-control"  placeholder="Enter your email">
</div>
<div class="form-group">
  <label for="exampleInputPassword1">password</label>
  <input name="height" type="text" class="form-control" placeholder="Enter your password">
</div>
<div class="form-group">
<label for="exampleInputPassword1">password</label>
<input name="age" type="text" class="form-control" placeholder="Enter your password">
</div>
  <div class="form-group">
    <label for="gender-select">Muscle Strength:</label>
    <select name="muscleStrength" class="form-control" id="gender-select">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="popup" onclick="myFunction()">Click me for instaraction!
  <span class="popuptext" id="myPopup">1 den exo asxolithi pote me orgna gimnastiriou 2 poli ligo 3 arketa 4 para poli 5 para para poli</span>
</div>
  <div class="form-group">
    <label for="gender-select">endurance:</label>
    <select name="endurance" class="form-control" id="gender-select">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




<script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}

</script>

</body >
</html>
<?php
$Account = new Account();
if (isset($_POST['weight']) && isset($_POST['height']) && isset($_POST['age']) && isset($_POST['muscleStrength']) && isset($_POST['endurance']) && isset($_POST['fat']) && isset($_POST['muscle']))
{
  echo "email";
    //$Account->insertCharacteristics($_POST['weight']);
     $Account->insertCharacteristics($_POST['weight'], $_POST['height'], $_POST['age']);
     //, $_POST['muscleStrength'], $_POST['endurance'], $_POST['fat'], $_POST['muscle']
}
?>

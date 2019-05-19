
<?php
require_once "init.php";
require_once "Nutritionist.php";
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>

.mentor {
  background-color: rgba(0, 255, 115, 0.432); /* Green */
    padding-top: 4rem;
   
    }

    .upbar {
      text-align: center;
      background-color: rgba(0, 255, 115, 0.432); /* Green */
     padding-top: 1rem;
    }
    
.button {
  background-color: rgba(0, 0, 0, 0.432); /* Green */
  border: none;
  color: rgb(255, 255, 255);
  padding: 15px 35px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 30px;
  margin: 4px 10px;
  cursor: pointer; 
}

.menu-bar {
  display: flex;
  align-items: center;
  justify-content: center;
  padding-top: 5rem;
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
  color: rgb(255, 255, 255);
}

p {
  text-indent: 50px;
  text-align: justify;
  letter-spacing: 3px;
}

a {
  text-decoration: none;
  color: rgb(255, 255, 255);
}
</style>
</head>
<body>


<div class="upbar">
  <a href="Nutritionisthtml.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="about.html">About</a>
</div>

<div class="mentor">
  <h1>Gym Mentor</h1>
</div>
}
</style>
</head>
<body>

<form class="forma" action="http://localhost/tech/NutritionistInserthtml1.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Proteins per 100 gr</label>
    <input name="proteins" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="per 100 gr">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Fat per 100 gr</label>
    <input name="fat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="per 100 g">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Carbohydrates per 100 gr</label>
    <input name="carbohydrates" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="per 100 gr">
  </div>
  <button href="NutritionistInserthtml1.php" type="submit" class="btn btn-primary">Submit</button>
 
</form>



</body>
</html>

<?php

$Nutritionist = new Nutritionist();

if (isset($_POST['name']) && isset($_POST['proteins']) && isset($_POST['fat']) && isset($_POST['carbohydrates']))
{
    $Nutritionist->checkEmpty($_POST['name'], $_POST['proteins'], $_POST['fat'], $_POST['carbohydrates']);

    $Nutritionist->checkSameName($_POST['name']);

    $Nutritionist->insertFoodsDetails($_POST['name'], $_POST['proteins'], $_POST['fat'], $_POST['carbohydrates']);
}

?>
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
    margin-bottom: 3rem;
}

body {
  background: white url("img/gym88.jpg") no-repeat top;
  background-size: cover;
  color: #ddd;
}

.button3 {background-color: #f44336;}

h1 {
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
}

h2 {
  text-align: center;
  color: #f2f2f2;
  margin: 1rem;
  margin-top: 2rem;
}

h3 {
  color: #f2f2f2;
  text-align: center;
  margin: 1rem;
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
  <a href="Nutritionisthtml.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="about.html">About</a>
</div>

<div class="mentor">
  <h1>Gym Mentor</h1>
</div>

<h3>Delete a Mealplan.</h3>

<form class="forma" action="http://localhost/tech/Nutritionistdeletehtml.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Insert Meal Code For Delete </label>
    <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Insert Meal Code">
  </div>
  <button href="Nutritionistdeletehtml.php" type="submit" class="btn btn-primary">Submit</button>
  <!--<button href="NutritionistCMhtml1.php" class="button button3" type="submit" class="btn btn-primary">Create a new meal</button>-->
</form>

<?php

$Nutritionist = new Nutritionist();

if (isset($_POST['id']))
{

    $Nutritionist->deleteMeal($_POST['id']);

}
?>
<h3>Meal List.</h3>
<table border="0px">
         <tr>
            <th>Breakfast</th>
            <th>Snack1</th>
            <th>Lunch</th>
            <th>Snack2</th>
            <th>Dinner</th>
            <th>Snack3</th>
            <th>Total Protein</th>
            <th>Total Fat</th>
            <th>Total Carbohydrates</th>
            <th>Meal Code</th>
         </tr>
<?php
$Nutritionist = new Nutritionist();
$Nutritionist->showMeals();
?>
</table>

</body>
</html>
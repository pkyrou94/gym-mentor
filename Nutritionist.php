<?php
require_once "init.php";

class Nutritionist
{
    private $proteinsum = 0;
    private $fatsum = 0;
    private $carbohydratessum = 0;
    private $nameOfFood;
    private $day;
    
    public function checkEmpty($name, $proteins, $fat, $carbohydrates)
    {

        if (empty($name))
        {

            $message = 'SORRY .Name is empty \nPLEASE TRY AGAIN';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/NutritionistInserthtml1.php');
                </SCRIPT>";
            exit();
        }

        if (empty($proteins))
        {
            $message = 'SORRY .Your proteins is empty \nPLEASE TRY AGAIN';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/NutritionistInserthtml1.php');
                </SCRIPT>";
            exit();
        }

        if (empty($fat))
        {
            $message = 'SORRY .Fat is empty \nPLEASE TRY AGAIN';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/NutritionistInserthtml1.php');
                </SCRIPT>";
            exit();
        }

        if (empty($carbohydrates))
        {
            $message = 'SORRY .Carbohydrates is empty \nPLEASE TRY AGAIN';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/NutritionistInserthtml1.php');
                </SCRIPT>";
            exit();
        }
    }

    public function checkEmptyCM($breakfast, $snack1, $lunch, $snack2, $dinner, $snack3)
    {

        if (empty($breakfast))
        {

            $message = 'SORRY .Breakfast food is empty \nPLEASE TRY AGAIN';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/NutritionistCMhtml.php');
                </SCRIPT>";
            exit();
        }

        if (empty($snack1))
        {
            $message = 'SORRY .Snack is empty \nPLEASE TRY AGAIN';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/NutritionistCMhtml.php');
                </SCRIPT>";
            exit();
        }

        if (empty($lunch))
        {
            $message = 'SORRY .Lunch food is empty \nPLEASE TRY AGAIN';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/NutritionistCMhtml.php');
                </SCRIPT>";
            exit();
        }

        if (empty($snack2))
        {
            $message = 'SORRY .Snack is empty \nPLEASE TRY AGAIN';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/NutritionistCMhtml.php');
                </SCRIPT>";
            exit();
        }

        if (empty($dinner))
        {
            $message = 'SORRY .Dinner food is empty \nPLEASE TRY AGAIN';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/NutritionistCMhtml.php');
                </SCRIPT>";
            exit();
        }

        if (empty($snack3))
        {
            $message = 'SORRY .Snack is empty \nPLEASE TRY AGAIN';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/NutritionistCMhtml.php');
                </SCRIPT>";
            exit();
        }
    }

    public function checkSameName($name)
    {

        if (isset($name))
        {

            $checkdata = " SELECT mealName FROM foods WHERE mealName='$name' ";
            $query = mysql_query($checkdata);

            if (mysql_num_rows($query) > 0)
            {
                $message = 'SORRY. Your image name is used. Please whrite other name';
                echo "<SCRIPT type='text/javascript'> //not showing me this
			alert('$message');
			window.location.replace('http://localhost/tech/NutritionistInserthtml1.php');
			</SCRIPT>";
                exit();
            }
            else
            {
                $message = 'SUCESFULL';
                echo "<SCRIPT type='text/javascript'> //not showing me this
			alert('$message');
			window.location.replace('http://localhost/tech/NutritionistInserthtml1.php');
			</SCRIPT>";
            }
        }

    }
    public function insertFoodsDetails($name, $proteins, $fat, $carbohydrates)
    {
        $select = "insert into foods(mealName,proteins,fat,carbohydrates) values ('$name','$proteins','$fat','$carbohydrates')";
        $sql = mysql_query($select);

        print '<script type="text/javascript">';
        print 'alert("the data is inserted")';
        print '</script>';
        exit();
    }

    public function sum($mealName)
    {

        $sql1 = "SELECT proteins, fat, carbohydrates FROM foods WHERE mealName='$mealName'";
        $result1 = mysql_query($sql1);
        while ($row1 = mysql_fetch_assoc($result1))
        {
            $proteins = $row1["proteins"];
            $fat = $row1["fat"];
            $carbohydrates = $row1["carbohydrates"];
            $this->proteinsum = $proteins + $this->proteinsum;
            $this->fatsum = $fat + $this->fatsum;
            $this->carbohydratessum = $carbohydrates + $this->carbohydratessum;
            /* echo $this->proteinsum;
        echo $this->fatsum;
        echo $this->carbohydratessum;     */
        }
    }

    public function checkValidName($breakfast, $snack1, $lunch, $snack2, $dinner, $snack3)
    {
        $sql = "SELECT mealName FROM foods ORDER BY mealName";
        $result = mysql_query($sql);
        $i = 0;

        while ($row = mysql_fetch_assoc($result))
        {
            $mealName = $row["mealName"];

            if (strcmp($mealName, $breakfast) == 0)
            {
                $i = $i + 1;
                $this->sum($mealName);
                /* $sql1 = "SELECT proteins, fat, carbohydrates FROM foods WHERE mealName='$mealName'";
            $result1 = mysql_query($sql1);
            while ($row1 = mysql_fetch_assoc($result1))
            {
            $proteins = $row1["proteins"];
            $fat = $row1["fat"];
            $carbohydrates = $row1["carbohydrates"];
            $proteinsum = $proteins + $proteinsum;
            $fatsum = $fat + $fatsum;
            $carbohydratessum = $carbohydrates + $carbohydratessum;
            echo $proteinsum;
            echo $fatsum;
            echo $carbohydratessum;
            }*/
            }
            if (strcmp($mealName, $snack1) == 0)
            {
                $i = $i + 1;
                $this->sum($mealName);
            }
            if (strcmp($mealName, $lunch) == 0)
            {
                $i = $i + 1;
                $this->sum($mealName);
            }
            if (strcmp($mealName, $snack2) == 0)
            {
                $i = $i + 1;
                $this->sum($mealName);
            }
            if (strcmp($mealName, $dinner) == 0)
            {
                $i = $i + 1;
                $this->sum($mealName);
            }
            if (strcmp($mealName, $snack3) == 0)
            {
                $i = $i + 1;
                $this->sum($mealName);
            }
            if ($i == 6)
            {
                $this->insertNewMeal($breakfast, $snack1, $lunch, $snack2, $dinner, $snack3);
                $this->proteinsum;
                $this->fatsum;
                $this->carbohydratessum;
                $select = "UPDATE mealsplan SET totalprotein='$this->proteinsum',totalfat='$this->fatsum',totalcarbohydrates='$this->carbohydratessum' WHERE breakfast='$breakfast' AND snack1='$snack1' AND lunch='$lunch'AND snack2='$snack2'AND dinner='$dinner'AND snack3='$snack3'";
                $sql = mysql_query($select);

            }
        }
        mysql_free_result($result);
    }

    public function showFoods()
    {
        $sql = "SELECT mealName,proteins,fat,carbohydrates FROM foods ORDER BY mealName";
        $result = mysql_query($sql);

        while ($row = mysql_fetch_assoc($result))
        {
            $mealName = $row["mealName"];
            $proteins = $row["proteins"];
            $fat = $row["fat"];
            $carbohydrates = $row["carbohydrates"];
            echo "<tr>";

            echo "<td>$mealName</td>";
            echo "<td>$proteins</td>";
            echo "<td>$fat</td>";
            echo "<td>$carbohydrates</td>";
            //echo "<br>";
            echo "</tr>";
        }
        mysql_free_result($result);

    }

    public function showMeals()
    {
        $sql = "SELECT * FROM mealsplan";
        $result = mysql_query($sql);

        while ($row = mysql_fetch_assoc($result))
        {
            $breakfast = $row["breakfast"];
            $snack1 = $row["snack1"];
            $lunch = $row["lunch"];
            $snack2 = $row["snack2"];
            $dinner = $row["dinner"];
            $snack3 = $row["snack3"];
            $totalprotein = $row["totalprotein"];
            $totalfat = $row["totalfat"];
            $totalcarbohydrates = $row["totalcarbohydrates"];
            $id = $row["id"];
            echo "<tr>";

            echo "<td>$breakfast</td>";
            echo "<td>$snack1</td>";
            echo "<td>$lunch</td>";
            echo "<td>$snack2</td>";
            echo "<td>$dinner</td>";
            echo "<td>$snack3</td>";
            echo "<td>$totalprotein</td>";
            echo "<td>$totalfat</td>";
            echo "<td>$totalcarbohydrates</td>";
            echo "<td>$id</td>";
            echo "</tr>";
            //echo "<br>";
        }
        mysql_free_result($result);

    }

    public function insertNewMeal($breakfast, $snack1, $lunch, $snack2, $dinner, $snack3)
    {

        $select = "insert into mealsplan(breakfast, snack1, lunch, snack2, dinner, snack3) values ('$breakfast','$snack1','$lunch', '$snack2', '$dinner', '$snack3')";
        $sql = mysql_query($select);

        print '<script type="text/javascript">';
        print 'alert("the data is inserted")';
        print '</script>';

    }

    public function deleteMeal($id)
    {
        $select = "DELETE FROM mealsplan WHERE id='$id'";
        $sql = mysql_query($select);
        print '<script type="text/javascript">';
        print 'alert("The meal is deleted")';
        print '</script>';
    }
}
//***********************************************************************************//

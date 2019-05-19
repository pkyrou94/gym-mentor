<?php
require_once "init.php";

class GymTrainer
{
    private $name;
    private $dateAdded;

    public function checkEmpty($pathImg, $exercise, $levelDif)
    {

        if (empty($pathImg))
        {

            $message = 'SORRY .Your Image name is empty \nPLEASE TRY AGAIN';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/GymTrainerinserthtml.php');
                </SCRIPT>";
            exit();
        }

        if (empty($exercise))
        {
            $message = 'SORRY .Your exercise name is empty \nPLEASE TRY AGAIN';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/GymTrainerinserthtml.php');
                </SCRIPT>";
            exit();
        }

        if (empty($levelDif))
        {
            $message = 'SORRY .Your Difficulty level label is empty \nPLEASE TRY AGAIN';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/GymTrainerinserthtml.php');
                </SCRIPT>";
            exit();
        }
    }

    public function checkSamePathing($pathImg)
    {
      
        if (isset($pathImg))
        {

            $checkdata = " SELECT pathImg FROM exercise WHERE pathImg='$pathImg' ";
            $query = mysql_query($checkdata);

            if (mysql_num_rows($query) > 0)
            {
                $message = 'SORRY. Your image name is used. Please whrite other name';
                echo "<SCRIPT type='text/javascript'> //not showing me this
			alert('$message');
			window.location.replace('http://localhost/tech/GymTrainerinserthtml.php');
			</SCRIPT>";
                exit();
            }
            else
            {
                $message = 'SUCESFULL';
                echo "<SCRIPT type='text/javascript'> //not showing me this
			alert('$message');
			window.location.replace('http://localhost/tech/GymTrainerinserthtml.php');
			</SCRIPT>";
            }
        }

    }
    public function insertExcercise($pathImg, $levelDif, $exercise, $description)
    {
        $select = "insert into exercise(pathImg,levelDif,exercise,description) values ('$pathImg','$levelDif','$exercise','$description')";
        $sql = mysql_query($select);

        $sql3 = "SELECT exId from exercise";
        $result3 = mysql_query($sql3);
        while ($row3 = mysql_fetch_assoc($result3))
        {
            $a = $row3["exId"];
            //$sql ="UPDATE customersex SET idEx=$exId";
            //mysql_query($sql);
        }

        mysql_free_result($result3);

        $select = "insert into customersex(idEx) values ('$a')";
        $sql = mysql_query($select);

        print '<script type="text/javascript">';
        print 'alert("the data is inserted")';
        print '</script>';
        exit();
    }

    public function showInsertExercise()
    {
        $sql = "SELECT * FROM exercise";
        $result = mysql_query($sql);

        while ($row = mysql_fetch_assoc($result))
        {
            $pathImg = $row["pathImg"];
            $levelDif = $row["levelDif"];
            $exercise = $row["exercise"];
            $description = $row["description"];
            $exId = $row["exId"];
            echo "<tr>";

            echo "<td>$pathImg</td>";
            echo "<td>$levelDif</td>";
            echo "<td>$exercise</td>";
            echo "<td>$description</td>";
            echo "<td>$exId</td>";
            echo "</tr>";
            //echo "<br>";
        }
        mysql_free_result($result);

    }

    public function deleteExercise($id)
    {
    $select = "DELETE FROM exercise WHERE exId='$id'";
    $sql = mysql_query($select);
    print '<script type="text/javascript">';
    print 'alert("The Food is deleted")';
    print '</script>';
    }
}
//***********************************************************************************//

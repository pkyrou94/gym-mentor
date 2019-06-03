<?php
require_once "init.php";

class Classes
{
    private $name;
    private $dateAdded;

    public function checkEmpty($tcname, $trainername, $seats, $days, $hours, $chname, $TrainerId)
    {

        if (empty($tcname))
        {

            $message = 'SORRY .Lesson name name is empty \nPLEASE TRY AGAIN';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/GymTrainerinsertclasshtml.php');
                </SCRIPT>";
            exit();
        }

        if (empty($trainername))
        {
            $message = 'SORRY .Training name is empty \nPLEASE TRY AGAIN';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/GymTrainerinsertclasshtml.php');
                </SCRIPT>";
            exit();
        }

        if (empty($seats))
        {
            $message = 'SORRY .Seats is empty \nPLEASE TRY AGAIN';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/GymTrainerinsertclasshtml.php');
                </SCRIPT>";
            exit();
        }
        if (empty($days))
        {
            $message = 'SORRY .Days is empty \nPLEASE TRY AGAIN';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/GymTrainerinsertclasshtml.php');
                </SCRIPT>";
            exit();
        }
        if (empty($hours))
        {
            $message = 'SORRY .Hours is empty \nPLEASE TRY AGAIN';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/GymTrainerinsertclasshtml.php');
                </SCRIPT>";
            exit();
        }
        if (empty($chname))
        {
            $message = 'SORRY .Class hall name is empty \nPLEASE TRY AGAIN';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/GymTrainerinsertclasshtml.php');
                </SCRIPT>";
            exit();
        }
        if (empty($TrainerId))
        {
            $message = 'SORRY .Trainer id is empty \nPLEASE TRY AGAIN';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/GymTrainerinsertclasshtml.php');
                </SCRIPT>";
            exit();
        }
    }

    public function checkSamePathing($days, $hours, $chname)
    {
      
        if (isset($days))
        {
echo $days;
            $checkdata = " SELECT days,hours,chname FROM classes";
            $query = mysql_query($checkdata);

            while ($row3 = mysql_fetch_assoc($query))
            {
                $days1 = $row3["days"];
                $hours1 = $row3["hours"];
                $chname1 = $row3["chname"];
                
                if ($days1 == $days && $hours1 == $hours && $chname1 == $chname ) // && mysql_num_rows($query1) > 0 && mysql_num_rows($query2) > 0 )
                {
                    $message = 'SORRY. This combine days hours and class hall is reservetion';
                    echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/GymTrainerinsertclasshtml.php');
                </SCRIPT>";
                    exit();
                }
               
               
            }

           
        }

    }
    public function insertClassDetails($tcname, $trainername, $seats, $days, $hours, $chname, $TrainerId)
    {
        $select = "insert into classes(tcname,trainername,seats,days,hours,chname,TrainerId,availability) values ('$tcname','$trainername','$seats','$days','$hours','$chname','$TrainerId','$seats')";
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


		<?php
require_once "init.php";

class Profile
{

    private $id;
    private $i = 1;
    private $availability = 0;

    public function __construct($email)
    {
        $sql = "SELECT id FROM customers WHERE email='$email'";
        $result = mysql_query($sql);

        while ($row = mysql_fetch_assoc($result))
        {
            $this->id = $row["id"];
        }
        mysql_free_result($result);
    }
    /*public function updateExercise()
    {
    // $this->i=$this->i+1;
    $sql = "SELECT pathImg, description, exId FROM exercise WHERE levelDif='2' ORDER BY exId DESC";
    $result = mysql_query($sql);
    while ($row = mysql_fetch_assoc($result))
    {
    $exId = $row["exId"];
    $description = $row["description"];
    $pathImg = $row["pathImg"];
    $select = "insert into customersex(idEx, kg, visits, id) values ('$exId','20','1','$this->id')";
    // $select = "UPDATE customersex SET idEx='$exId',kg='20', visits='1', id='$this->id' WHERE idEx !='$exId' AND id='$this->id'";
    //$select = "DELETE FROM customersex WHERE condition";
    $sql = mysql_query($select);
    echo '<div class="box">';
    echo "<img src='" . $pathImg . "'>";
    echo "<br>";
    echo $description;
    echo "</div>";
    }
    exit();

    }*/
    public function showExercise()
    {

        $sql = "SELECT pathImg, description, exId FROM exercise WHERE levelDif='1' ORDER BY exId DESC";
        $result = mysql_query($sql);
        while ($row = mysql_fetch_assoc($result))
        {
            $exId = $row["exId"];
            $description = $row["description"];
            $pathImg = $row["pathImg"];

            /* $sql = "SELECT idEx FROM customersex WHERE id='$this->id'";
            $result = mysql_query($sql);*/

            $sql2 = "SELECT visits FROM customersex WHERE idEx=$exId";
            $result2 = mysql_query($sql2);

            while ($row2 = mysql_fetch_assoc($result2))
            {
                $visits = $row2["visits"];
                if ($visits % 5 == 0)
                {
                    mysql_query("Update customersex SET kg=kg+10 WHERE idEx=$exId");
                }
                mysql_query("Update customersex SET visits=$visits+1 WHERE idEx=$exId");
                /*   if ($visits % 10 == 0)
            {
            $this->updateExercise();

            //update customersex set visits=9
            }*/
            }

            echo '<div class="box">';
            echo "<img src='" . $pathImg . "'>";
            echo "<br>";
            echo $description;
            echo "</div>";

            echo "<br>";
            echo "<br>";
        }
    }
    public function showClasses()
    {
        $sql = "SELECT * FROM classes ORDER BY
        CASE
             WHEN days = 'Monday' THEN 1
             WHEN days = 'Tuesday' THEN 2
             WHEN days = 'Wednesday' THEN 3
             WHEN days = 'Thursday' THEN 4
             WHEN days = 'Friday' THEN 5
             WHEN days = 'Saturday' THEN 6
             WHEN days = 'Sunday' THEN 7
        END
         ASC";

        $result = mysql_query($sql);

        while ($row = mysql_fetch_assoc($result))
        {
            $tcname = $row["tcname"];
            $trainername = $row["trainername"];
            $seats = $row["seats"];
            $days = $row["days"];
            $hours = $row["hours"];
            $chname = $row["chname"];
            $trainerid = $row["trainerid"];
            $id = $row["id"];
            // $prereservation = $row["prereservation"];
            $availability = $row["availability"];
            echo "<tr>";

            echo "<td>$days</td>";
            echo "<td>$hours</td>";
            echo "<td>$tcname</td>";
            echo "<td>$trainername</td>";
            echo "<td>$availability</td>";
            echo "<td>$chname</td>";
            echo "<td>$id</td>";
            echo "</tr>";
            //echo "<br>";
        }
        mysql_free_result($result);

    }
    public function updateReservation($id)
    {
        $sql = "SELECT * FROM classes WHERE id='$id'";
        $result = mysql_query($sql);

        while ($row = mysql_fetch_assoc($result))
        {
            $tcname = $row["tcname"];
            $days = $row["days"];
            $hours = $row["hours"];
            echo "<script type='text/javascript'>alert('{ If you are sure for $tcname programm on $days at $hours please click ok}');</script>";
           
         
               
            }

        $sql = "SELECT availability FROM classes WHERE id='$id'";
        $result = mysql_query($sql);

        while ($row = mysql_fetch_assoc($result))
        {
            $availability = $row["availability"];
            echo $availability;
            if ($availability == 0)
            {
                print '<script type="text/javascript">';
                print 'alert("Availability for this class is zero")';
                print '</script>';
                exit();
            }
        }
        $select = "UPDATE classes SET availability=availability-1 WHERE id='$id'";
        $sql = mysql_query($select);
        print '<script type="text/javascript">';
        print 'alert("availability update")';
        print '</script>';
        exit();
    }

    /*public function update_availability_classes($fat, $muscle)
{
$sql = "UPDATE customers SET fat_percentage=$fat , muscle_percentage=$muscle WHERE email='$this->email'";
mysql_query($sql);
$this->fat_percentage = $fat;
$this->muscle_percentage = $muscle;
}*/
}
?>




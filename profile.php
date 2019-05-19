
		<?php
require_once "init.php";

class Profile
{

    private $id;
    private $i=1;

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

}
?>




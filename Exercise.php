<?php
require_once "init.php";

class GymTrainer
{
    private $exName;
    private $muscleGroup;

    public function exercise()
    {
        $sql = "SELECT pathImg, description, exId FROM exercise WHERE levelDif='1' ORDER BY exId DESC";
        $result = mysql_query($sql);
        while ($row = mysql_fetch_assoc($result))
        {
            $exId = $row["exId"];
            $description = $row["description"];
            $pathImg = $row["pathImg"];
            $sql2 = "SELECT visits FROM customersex WHERE idEx=$exId";
            $result2 = mysql_query($sql2);
        }
    }
}
//***********************************************************************************//

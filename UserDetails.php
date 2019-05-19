<?php
require_once "init.php";

class UserDetails
{
    private $fat_percentage_old;
    private $fat_percentage;
    private $muscle_percentage_old;
    private $muscle_percentage;
    private $email;
    private $gender;
    private $id;
    private $weight;
    private $height;
    private $age;
    private $health;
    private $allergic;
    private $endurance;

    public function __construct($email)
    {
        $sql = "SELECT email,gender,id,weight,height,age,fat_percentage,muscle_percentage  FROM customers WHERE email='$email'";
        $result = mysql_query($sql);

        while ($row = mysql_fetch_assoc($result))
        {
            $this->email = $row["email"];
            $this->gender = $row["gender"];
            $this->id = $row["id"];
            $this->weight = $row["weight"];
            $this->height = $row["height"];
            $this->age = $row["age"];
            $this->fat_percentage_old = $row["fat_percentage"];
            $this->muscle_percentage_old = $row["muscle_percentage"];
        }
        mysql_free_result($result);
    }

    public function compare_Characteristics()
    {
        if ($this->fat_percentage_old < $this->fat_percentage)
        {
            $fat =  "den ta piges kala oson afora to lipos";
        }
        else
        {
            $fat = "ta pas arketa kala oson afora to lipos";
        }
        if ($this->muscle_percentage_old < $this->muscle_percentage)
        {
            $muscle = "ta pas arketa kala oson afora ti miki maza";
        }
        else
        {
            $muscle = "den ta piges kala oson afora ti miki maza";
        }

        return array($fat, $muscle);
    }

    public function update_Characteristics($fat, $muscle)
    {
        $sql = "UPDATE customers SET fat_percentage=$fat , muscle_percentage=$muscle WHERE email='$this->email'";
        mysql_query($sql);
        $this->fat_percentage = $fat;
        $this->muscle_percentage = $muscle;
    }

    public function getCharacteristics()
    {
        return array(
            $this->email,
            $this->gender,
            $this->id,
            $this->weight,
            $this->height,
            $this->age,
            isset($this->fat_percentage) ? $this->fat_percentage : $this->fat_percentage_old,
            isset($this->muscle_percentage) ? $this->muscle_percentage : $this->muscle_percentage_old
        );
        /*echo $this->fat_percentage;
        echo $this->muscle_percentage;*/
    }
}

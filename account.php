<?php
require_once "init.php";
?>


<?php
class Account
{
    private $email;
    private $customerName;
    private $creditdCardInfo;

    public function register($email, $password, $gender)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $message = 'SORRY .Invalid email format please try again ';
            echo "<SCRIPT type='text/javascript'> //not showing me this
				alert('$message');
				window.location.replace('http://localhost/tech/signup.html');
				</SCRIPT>";
            exit();
        }

        if (empty($password))
        {
            $message = 'SORRY .Your password is empty \nPLEASE TRY AGAIN';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/signup.html');
                </SCRIPT>";
            exit();
        }

        if (!empty($password) && ($password == $password))
        {
            if (strlen($password) <= '8')
            {
                $message = 'SORRY .Your password must contain at least 8 Characters \nPLEASE TRY AGAIN';
                echo "<SCRIPT type='text/javascript'> //not showing me this
				alert('$message');
				window.location.replace('http://localhost/tech/signup.html');
				</SCRIPT>";
                exit();
            }
            elseif (!preg_match("#[0-9]+#", $password))
            {
                $message = 'SORRY .Your Password Must Contain At Least 1 Number \nPLEASE TRY AGAIN';
                echo "<SCRIPT type='text/javascript'> //not showing me this
				alert('$message');
				window.location.replace('http://localhost/tech/signup.html');
				</SCRIPT>";
                exit();
            }

        }
        elseif (!empty($password))
        {
            $cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
        }
        else
        {
            $passwordErr = "Please enter password   ";
        }

        if (isset($email))
        {
            $checkdata = " SELECT email FROM customers WHERE email='$email' ";
            $query = mysql_query($checkdata);

            if (mysql_num_rows($query) > 0)
            {
                $message = 'SORRY. Your email Already Exist. Please try again';
                echo "<SCRIPT type='text/javascript'> //not showing me this
			alert('$message');
			window.location.replace('http://localhost/tech/signup.html');
			</SCRIPT>";
                exit();
            }
            else
            {
                $message = 'SUCESFULL';
                echo "<SCRIPT type='text/javascript'> //not showing me this
			alert('$message');
			window.location.replace('http://localhost/tech/characteristicshtml.php');
			</SCRIPT>";
              //  $this->email = $email;
            }

            $_SESSION["email"] = $email;

            $select = "insert into customers(email,password,gender,id) values ('$email','$password','$gender',0)";
            $sql = mysql_query($select);

            print '<script type="text/javascript">';
            print 'alert("the data is inserted")';
            print '</script>';
            exit();
        }

    }

    public function insertCharacteristics($weight, $height, $age, $muscleStrength, $endurance, $fat_percentage, $muscle_percentage)
    {
        /*if (!isset($_SESSION['email']))
        {
            $message = 'You need to first login or register to give your personal details.';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                    alert('$message');
                    window.location.replace('http://localhost/tech/characteristicshtml.php');
                    </SCRIPT>";
            exit();
        }
        else
        {
            $message = 'SUCESFULL';
            echo "<SCRIPT type='text/javascript'> //not showing me this
                alert('$message');
                window.location.replace('http://localhost/tech/signup2.html');
                </SCRIPT>";
        }*/

        $email = $_SESSION['email'];

       echo $email;
        $select = "UPDATE customers SET weight=$weight, height=$height, age=$age, muscleStrength=$muscleStrength, endurance=$endurance, fat_percentage=$fat_percentage, muscle_percentage=$muscle_percentage Where email='$email'";
        //echo $select;
        $sql = mysql_query($select);

        $message = 'SUCESFULL';
        echo "<SCRIPT type='text/javascript'> //not showing me this
            alert('$message');
            window.location.replace('http://localhost/tech/signup2.html');
            </SCRIPT>";
        //exit();
    }

    public function payment()
    {

    }

}
?>


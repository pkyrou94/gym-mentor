<?php
require_once "init.php"
?>

<?php

class WebUser
{
    private $email;
    private $loginStatus;
    // $_SESSION["email"] = $email;

    public function login($email, $password)
    {
        if (isset($email))
        {
            // $email=$_POST['email'];
            $checkdata = " SELECT email FROM customers WHERE email='$email' ";
            $query = mysql_query($checkdata);

            if (mysql_num_rows($query) > 0)
            {
                if (isset($password))
                {
                    //$email=$_POST['password'];
                    $checkdata = " SELECT password FROM customers WHERE password='$password' ";
                    $query = mysql_query($checkdata);
                    if (mysql_num_rows($query) > 0)
                    {

                        mysql_query($sql);
                        $message = 'Succesfull';
                        echo "<SCRIPT type='text/javascript'> //not showing me this
                            alert('$message');
                            window.location.replace('http://localhost/tech/characteristicshtml.php');
                            </SCRIPT>";
                        $this->email = $email;
                        $this->loginStatus = true;
                        $_SESSION["email"] = $email;
                        exit();
                    }
                    else
                    {
                        $message = 'Error your password is wrong Please try again';
                        echo "<SCRIPT type='text/javascript'> //not showing me this
                                alert('$message');
                                window.location.replace('http://localhost/tech/loginhtml.php');
                                </SCRIPT>";
                        exit();
                    }
                }
            }
            else
            {
                $message = 'error your email dose not exist please try again nnn';
                echo "<SCRIPT type='text/javascript'> //not showing me this
                    alert('$message');
                    window.location.replace('http://localhost/tech/loginhtml.php');
                    </SCRIPT>";
                exit();
            }
        }
    }
}
?>


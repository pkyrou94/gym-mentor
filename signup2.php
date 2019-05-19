<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  </head>

  <body>
<?php
    
// Storing session data

//**************************perno ta parakato me ti methodo post******************************************//  
            $check1=$_POST['check1'];
            $check2=$_POST['check2'];
            $check3=$_POST['check3'];
            $check4=$_POST['check4'];
        
//**************************************************************************//
 
//******************elenenxo tin orthotita tou mail*****************// 
            
//**********************************************************************************//            
           
         /*if ($check1=="on") &&  $check2=="on") {
           $message = 'exomen provlima';
			echo "<SCRIPT type='text/javascript'> //not showing me this
			alert('$message');
			window.location.replace('http://localhost/tech/signup2.html');
			</SCRIPT>";
         }*/
 
    mysql_connect("localhost","root","");
    mysql_select_db("mentor");
    
//**************************************************************************//   
if ($check1=="on")
			{
                
                $select="Update customers SET muscle_gain=false";
		        $sql=mysql_query($select);
            
           
			header('location: http://localhost/tech/signup2.html');
		
			  
			}

 
          
        ?>
	
  </body>

</html>

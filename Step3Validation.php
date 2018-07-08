<?php
echo "<pre>";print_r($GLOBALS);echo "</pre>";

    $flag=true;
if(isset($_POST["amount"]) &&
       isset($_POST["dop"]) &&
       isset($_POST["rn"]) &&
       
       isset($_POST["nob"])
        )
    {
        if (strlen($_POST["amount"])==0)
           {
               echo"Amount is Not Valid";
                echo"<br>";
                $flag=false;
           }
        
        if (strlen($_POST["dop"])==0)
           {
               echo"Date of Payment is Not Valid";
                echo"<br>";
                $flag=false;
           }
        if (strlen($_POST["rn"])==0)
           {
               echo"Receipt is Not Valid";
                echo"<br>";
                $flag=false;
           }
     
             
        
         
        else if ( $flag == true)
        {
            header('Location: finalstage.php');
        }
    }
    else
    {
        echo "Incorrect";
    }
    
?>
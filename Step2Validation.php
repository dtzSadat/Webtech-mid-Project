<?php
echo "<pre>";print_r($GLOBALS);echo "</pre>";

    $flag=true;
if(isset($_POST["on"]) &&
       isset($_POST["rn"]) &&
       isset($_POST["mn"]) &&
       isset($_POST["ename"]) &&
       
       isset($_POST["house1"]) &&
       isset($_POST["road1"]) &&
       
       isset($_POST["Ppst1"]) &&
       isset($_POST["Ppo1"]) &&
       isset($_POST["cn"]) &&
       isset($_POST["em"]) &&
       isset($_POST["op"]) &&
       isset($_POST["poi"]) &&
       isset($_POST["doi"])
        )
    {
        if (strlen($_POST["ename"])==0)
           {
               echo"Emergency Contact Name is Not Valid";
                echo"<br>";
                $flag=false;
           }
        
        if (strlen($_POST["Ppst1"])==0)
           {
               echo"Police Station is Not Valid";
                echo"<br>";
                $flag=false;
           }
        if (strlen($_POST["Ppo1"])==0)
           {
               echo"Post Office is Not Valid";
                echo"<br>";
                $flag=false;
           }
        if (strlen($_POST["cn"])==0)
           {
               echo"Contact is Not Valid";
                echo"<br>";
                $flag=false;
           }
        
         
        else if ( $flag == true)
        {
            header('Location: step3.html');
        }
    }
    else
    {
        echo "Incorrect";
    }
    
?>
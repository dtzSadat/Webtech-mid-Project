<?php
    echo "<pre>";print_r($GLOBALS);echo "</pre>";
    $flag=true;

    if(isset($_POST["name"]) &&
       isset($_POST["fname"]) &&
       isset($_POST["lname"]) &&
       isset($_POST["fatherName"]) &&
       isset($_POST["fprofession"]) &&
       isset($_POST["motherName"]) &&
       isset($_POST["mprofession"]) &&
       isset($_POST["aprofession"]) &&
       isset($_POST["DOB"]) &&
       isset($_POST["Bid"]) &&
       isset($_POST["hcm"]) &&
       isset($_POST["em"]) &&
       isset($_POST["PRpst"]) &&
       isset($_POST["PRpo"]) &&
       isset($_POST["Ppst"]) &&
       isset($_POST["Ppo"]) )
    {
        if (strlen($_POST["name"])==0)
           {
               echo"Name is Not Valid";
                echo"<br>";
                $flag=false;
           }
        if (strlen($_POST["fname"])==0)
           {
               echo"First Name is Not Valid";
                 echo"<br>";
                $flag=false;
           }
        if (strlen($_POST["lname"])==0)
           {
               echo"Last Name is Not Valid";
                echo"<br>";
                $flag=false;
           }
        if (strlen($_POST["fatherName"])==0)
           {
               echo"Father's Name is Not Valid";
                echo"<br>";
                $flag=false;
           }
        if (strlen($_POST["fprofession"])==0)
           {
               echo"Father's Profession is Not Valid";
                echo"<br>";
                $flag=false;
           }
        if (strlen($_POST["motherName"])==0)
           {
               echo"Mother's Name is Not Valid";
                echo"<br>";
                $flag=false;
           }
        if (strlen($_POST["mprofession"])==0)
           {
               echo"Mother's Profession is Not Valid";
                echo"<br>";
                $flag=false;
           }
        if (strlen($_POST["aprofession"])==0)
           {
               echo"Aplicant's Profession is Not Valid";
                echo"<br>";
                $flag=false;
           }
        if (strlen($_POST["DOB"])==0)
           {
               echo"Date of birth is Not Valid";
                echo"<br>";
                $flag=false;
           }
        if (strlen($_POST["Bid"])==0)
           {
               echo"Birth ID is Not Valid";
                echo"<br>";
                $flag=false;
           }
        if (strlen($_POST["hcm"])==0)
           {
               echo"height is Not Valid";
                echo"<br>";
                $flag=false;
           }
        
        if (strpos($_POST["em"],"@")==0)
           {
               echo"Email is Not Valid";
                echo"<br>";
                $flag=false;
           }
        if (strlen($_POST["PRpst"])==0)
           {
               echo"Present Police station address is Not Valid";
                echo"<br>";
                $flag=false;
           }
        if (strlen($_POST["PRpo"])==0)
           {
               echo"Present Post office adress is Not Valid";
                echo"<br>";
                $flag=false;
           }
        if (strlen($_POST["Ppst"])==0)
           {
               echo"Parmanent police station address is Not Valid";
                echo"<br>";
                $flag=false;
           }
         if (strlen($_POST["Ppo"])==0)
           {
               echo"Parmanent post office address is Not Valid";
                echo"<br>";
                $flag=false;
           }
         
        else if ( $flag == true)
        {
            header('Location: step2.html');
        }
    }
    else
    {
        echo "Incorrect";
    }
    
?>
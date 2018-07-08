<?php
   echo "<pre>";print_r($GLOBALS);echo "</pre>";
?>

<html>
   
   <style>
       .button{
           text-align: center;
           padding: 10px
       }
    </style>
    
    <title>Stage 02</title>
    <h2>Passport Application-Review Enrolment Summary</h2>
    <h3>Online Application ID: </h3>
    <h4>Enrolment date: </h4>
    <a style="color: red"><i>Remember Before submitting your application</i></a>
    
    <ul>
        <li><i>Ater you click submit ,you are not llowed to modify your information</i></li>
        <li><i>Please visit <?php
                echo $_POST["bank"];
            ?>
             Branch</i></li>
    </ul>
    <hr>
    <body>
       <form action="Step2Validation.php" method="post">
           
        <table border="1" style="width: 80%" align="center">
            <tr>
                <td>
                <pre>
                
                <h3>Applicant Contact Information</h3>
                
                
                
                
                
                <h3>Emergency Contact Person's Details</h3>

                
               
                
                </pre>
                
                </td>
            
                <td>
                <pre>
                
                
                
                
                       
                </pre>
                </td>
            </tr>
        </table>
        <br><br>
        <div align="center">
           
            <input class="button" type="submit" name="submit" value="Save & Continue">
            
        </div>
        
      </form> 
        <form action="step1.html" method="post">
            <input align="center" class="button" type="submit" name="submit" value="Previous Page">
        </form>
    </body>
</html>
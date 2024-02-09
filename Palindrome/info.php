<?php
include_once 'connect.php';




    
$name=$_POST['name1'];
$position=$_POST['position'];
$date=$_POST['date'];
$name2=$_POST['name2'];
$communication=$_POST['communication'];
$prof=$_POST['prof'];
$skill=$_POST['skill'];
$knowlwdge=$_POST['knowledge'];
$comment=$_POST['comment'];
            
            
$query="INSERT INTO info VALUES ('','$name','$position','$date','$name2','$communication','$prof','$skill','$knowlwdge','$comment');";
$run=mysqli_query($con,$query);

header("Location:form.php");
      
        


    
    
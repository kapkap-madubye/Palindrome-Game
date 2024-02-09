<?php

if(isset($_POST['submit'])){
    $pp=$_POST['pal'];
    $pp2=$_POST['pal2'];
    $reverse=getRevStr($pp,$pp2);

    if($pp==$reverse || $pp2==$reverse){
        echo "$pp is a perfect Palindrome , $pp2 is a perfect Palindrome";

    }else{
        echo "$pp is not a Palindrome , $pp2 is not a Palindrome";
    }
}

function getRevStr($word){

   $revstr="";
   $count=strlen($word)-1;
   for($i=$count;$i>=0;$i--){
    $revstr .= $word[$i];
   }

   return $revstr;	
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="pal" id="pal">
        <input type="text" name="pal2" id="pal2">
        <input type="submit"name="submit" id="submit" value="submit">

    </form>
    <?php
    $localhost="localhost";
    $name="root";
    $password="";
    $db="db";
    if(isset($_POST['submit'])){
        if(!empty($_POST['username']) && !empty($_POST['email'])  && !empty($_POST['password'])) {

            $username=$_POST['username'];
            $email=$_POST['email'];
            $password=$_POST['password'];

            $query="INSERT INTO user(username,email,password) Values('$username',$email,$password);
            $run=mysqli_query($con,$query);
            if($run!==true){
                echo "info not submitted ";
            }else{
                echo "info submitted";    



                }

        }else{
            echo "Fill up all fiels";
        }
    }
</body>
</html>
<?php
include 'connecton.php';

if(isset($_POST['submit']))


{
    $name=$_POST["name"];
    $email=$_POST["email"]; 
    $phn_no=$_POST["phn_no"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    mysqli_query($conn,"insert into login_table(username,password) values ('$username','$password')");
    $id=mysqli_insert_id($conn);
    mysqli_query($conn,"insert into registration_tb(login_id,name,email,phn_no) values ('$id','$name','$email','$phn_no')");


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
    <form method="post"enctype="multipart/form-data">
        
        name: <input type="text"  name="name"><br><br>
        email: <input type="text"  name="email"><br><br>
        phn_no:<input type="text" name="phn_no"><br><br>
        username:<input type="text" name="username"><br><br>
        password:<input type="text" name= "password"><br><br>
        <input type="submit" value="submit" name= "submit"><br><br>
        
    </form>
    
</body>
</html>

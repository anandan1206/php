 
 
 <?php
include 'connecton.php';
$edit=$_GET['edit_id'];
$qury=mysqli_query($conn,"select * from registration where id='$edit'");
 
if(isset($_POST['edit']))
{ 
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$username=$_POST["username"];
$password=$_POST["password"];
mysqli_query($conn,"UPDATE registration set name='$name',email='$email',phone='$phone',username='$username',password='$password' where id='$edit'");
header('location:viewtab.php');
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
    <form method="post">
    <table class="table table-borderd">
        <thead>
            <?php 
             while($row=mysqli_fetch_assoc($qury))
             {
             ?>

            <tr>
                <th>name</th>
                <td> <input type="text" name="name"value=" <?php echo $row ['name'];?>"></td>
</tr>
<tr>
    <th>email</th>
    <td><input type="text" name="email"value="<?php echo $row ['email'];?>"></td>
</tr>
<tr>
    <th>phone</th>
    <td> <input type="text" name="phone"value="<?php echo $row ['phone'];?>"></td>
    </tr>
    <tr>
        <th>username</th>
        <td> <input type="text"name="username"value="<?php echo $row ['username'];?>"></td>
        </tr>
        <tr>
            <th>password</th>
            <td><input type="text" name="password"value="<?php echo $row[ 'password'];?>"></td>
</tr>
<tr>
    <td><input type="submit" name="edit" value= "save"> 

</td>
             </tr>
    <?php
             }
             ?>
             </thead>
            
    </table>
            </form>
</body>
</html>
<?php
 include 'connecton.php';
 $file="";
 if(isset($_POST['submit']))
 {
 $name=$_POST['name'];
 $image=$_FILES['image']['name'];

 if ($image!="")
 {
     $filearray=pathinfo($_FILES['image']['name']);
     $file1=rand();
     $file_ext=$filearray['extension'];
     $file=$file1.".".$file_ext;
 }
 $quarey=mysqli_query($conn,"insert into image(name,image) values('$name','$file')");
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
    
 <form method="post" enctype="multipart/form-data">
     name : <input type="text" name="name"><br><br>
     image :<input type="file" name="image"><br><br>
     <input type="submit" value="submit" name= "submit"><br><br>
</form>
     
</body>
</html>


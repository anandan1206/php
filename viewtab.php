<?php
include 'connecton.php';
$qury=mysqli_query($conn,"select * from registration");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table,th,td{ border:1px solid;}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

    
    
<table>
    <thead>
    <tr>
        <th>name</th>
        <th>email</th>
        <th>phn_no</th>
        <th>username</th>
        <th>password</th>
        <th>action</th>
        
        
    </tr>
</thead>
<tbody>
    <?php
    while($row=mysqli_fetch_assoc($qury))
    {
       ?>
       <tr>
           <td><?php echo $row['name'];?></td>
           <td><?php echo $row['email'];?></td>
           <td><?php echo $row['phone'];?></td>
           <td><?php echo $row['username'];?></td>
           <td><?php echo $row['password'];?></td>
           <td> <a href="editpage.php?edit_id=<?php echo $row['id'];?>"><input type= "submit" name="submit" value="edit"></a>
           <a href="delete.php?delete_id=<?php echo $row['id'];?>"><input type="submit" name="delete" value="delete"></a>
        
        </td>
       </tr> 

</tbody>
<?php
    }
    ?>
    
</table>
</body>
</html>
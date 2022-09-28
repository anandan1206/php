
<?php
include 'connecton.php';
$qury=mysqli_query($conn,"select * from login_table join registration_tb on login_table.login_id=registration_tb.login_id");
?>
<!DOCTYPE html>
<html lang="en">
<style>
        table,th,td{ border:1px solid;}
    </style>
<head>
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
            </tr>
        </thead>
    
    <?php
    while($row=mysqli_fetch_assoc($qury))
    
    {
        ?>
    <tbody>
        
        <tr>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['phn_no'];?></td>
        <td><?php echo $row['username'];?></td>
        <td><?php echo $row['password'];?>
    </td>
   
    </tbody>
    <?php
    }
    ?>
    </table>
</body>
</html>
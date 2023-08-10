<?php 

include("connection.php"); 

$con = connection(); 

$id=$_GET['id']; 

$sql = "SELECT * FROM user WHERE id = '$id'"; 

$query=mysqli_query($con, $sqli); 

$rom = mysqli_fetch_array($query); 
?> 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css"> 
    <title>Edit Users</title>
</head>
<body>
<form action="edit_user.php" method="POST"> 

     
 

<!DOCTYPE html> 

<html lang="en"> 

<head> 

  <meta charset="UTF-8"> 

  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

  <link rel="stylesheet" href="CSS/style.css"> 

  <title>Edit user</title> 

</head> 

<body> 

  <div class="users-form">  

<h1>Edit user</h1> 
    <input type="hidden" name="id" value="<?= $row['id']?>"> 

    <input type="text" name="name" placeholder="name" value="<?= $row['name']?>">    

    <input type="text" name="phone number" placeholder="phone number" value="<?= $row['phone number']?>"> 

    <input type="text" name="email" placeholder="email" value="<?= $row['email']?>"> 

    <input tpe="text" name="password" placeholder="password" value="<?= $row['password']?>"> 

    <input type="password" name="confirm password" placeholder="confirm password" value="<?= $row['confirm password']?>"> 

    <input type="submit" value="Send"> 

  </form> 

  </div> 

</body> 

</html> 
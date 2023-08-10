<?php 
include("connection.php"); 
$con = connection(); 

$sql = "SELECT * FROM user"; 
$query =mysqli_query($con, $sql); 

?> 

<form class="form">
<form class="insert_user.php" method="POST">
<link rel="stylesheet" type="text/css" href="CSS/style.css">
    <p class="title">Register </p>
    <p class="message">Sign up now and get more information about our services. </p>
        <div class="flex">
        <align-items: center; * Centra verticalmente *>
        <label>
            <input class="input" type="text" placeholder="" name="name" required="">
            <span>Name</span>
        </label>

        <label>
            <input class="input" type="text" placeholder="" name="phone_number" required="">
            <span>Phone number</span>
        </label>
    </div>  
            
    <label>
        <input class="input" type="email" placeholder="" name="email" required="">
        <span>Email</span>
    </label> 
        
    <label>
        <input class="input" type="password" placeholder="" name="password" required="">
        <span>Password</span>

    </label>
    <input type="submit" value="add user">
    <p class="signin">Already have an acount? <a href="#">Sign_in</a> </p>
    
</form>


    </div>
    <div class="user">
        <h2></h2>
        <h2>Registered Users</h2> 
<table> 
  <thead> 
    <tr> 
    <th>ID</th> 
    <th>Name</th> 
    <th>Phone number</th> 
    <th>Email</th> 
    <th>Password</th> 
    <th></th> 

    </tr> 

  </thead> 

  <tbody> 

    <tr> 

    <td>1</td> 
    <td>William Hills</td> 
    <td>9707937897</td> 
    <td>willi07@gmail.com</td> 
    <td>123456</td> 


    <td><a href="*" class="users-table--edit">Edit</a></td> 
    <td><a href="*" class="users-table--delete">Delete</a></td> 
    </tr> 
  </tbody> 
</table> 

</div> 

</body> 

</html>

</body>
</html>
<?php  while($row = mysqli_fetch_array($query)): ?> 
  <tr> 
  <td><?= $row['ID'] ?></td> 
  <td><?= $row['name'] ?></td> 
  <td><?= $row['phone_number'] ?></td> 
  <td><?= $row['email'] ?></td> 
  <td><?= $row['password'] ?></td> 
  <td><a href="*" class="users-table--edit">Edit</a></td> 
  <td><a href="*" class="users-table--delete">Delete</a></td> 

  </tr> 

    <?php endwhile; ?> 
</tbody> 
</table> 
</div> 
</body> 
</html>

 
 
 
 







 

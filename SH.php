<!DOCTYPE html>
<html>
<head>
    <title>User Regristration</title>
</head>
<body> 

<div>
    <?php
    
    if (isset($_POST['firstname'])  &&  isset($_POST['lastname'])) {
        $firstname= $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phonenumber = $_POST['phonenumber'];
        $state = $_POST['state'];
        $password = $_POST['password'];
  echo   $firstname  . " " . $lastname  . " " . $email . " " . $phonenumber . " " . $state . " " . $password;
  echo  "<h3>Account Created <br>You can now log in to your account</h3>";
    }
     ?>
</div>

     <div>
         <form action="SH.php" method="POST">
           <div class="container">
               <h1 style="background-color:orange">Regristration</h1>
               <p style="color:blue">Fill up the form with accurate data.</p>
               <label for="firstname"><b>First Name</b></label>
               <input style="background-color:aqua"  type="text" name="firstname" placeholder="Input your first name" required ><br><br>

               <label for="lastname"><b>Last Name</b></label>
               <input   style="background-color:aqua" type="text" name="lastname" placeholder="Input your last name" required><br><br>

               <label for="email"><b>Email Address</b></label>
               <input  style="background-color:aqua" type="email" name="email" placeholder="Input your email address" required><br><br>

               <label for="phonenumber"><b>Phone Number</b></label>
               <input style="background-color:aqua" type="number" name="phonenumber" placeholder="Input your phone number" required><br><br>

               <label for="state"><b>State Of Origin</b></label>
               <input  style="background-color:aqua" type="text" name="state" placeholder="Input your state of origin" required><br><br>

               <label for="password"><b>Password</b></label>
               <input  style="background-color:aqua" type="password" name="password" placeholder="Input password" required><br><br>

               <input style="background-color:orange" type="submit" name="create" value="Register Account"><br><br>

               
           </div>
         </form>
     </div> 
</body>
</html> 
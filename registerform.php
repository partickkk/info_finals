<html>
    <head>
        <title>Food Shop</title>
     </head>

     <body>
    <form action="handleForm.php" method="POST"> 
        <!-- Input field for entering username -->
        <p>USERNAME: <input type="text" placeholder="Enter username here" name="registerUsernameTextField" size="25" required</p>
        <!-- Input field for entering password -->
        <p>PASSWORD: <input type="password" placeholder="Enter password here" name="registerPasswordTextField" size="25"required</p>
        <!-- Submit button for registering -->
        <p><input type="submit" value="REGISTER" name="registerButton"></p>

    </form>
    <!-- Link to the login page for users who already have an account -->
    <p><input type="submit" value="I already have an account" name="exitRegistere" onclick="location.href='login.php'"</p>
     </body>

</html>
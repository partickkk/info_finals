<html>
    <body>
        <!-- Title welcoming users to the online food shop and prompting them to log in -->
        <h1>Welcome to My Online Food Shop! Please log in.</h1>

        <!-- Form for logging in -->
        <form action="handleForm.php" method="POST">
            <!-- Input field for entering username -->
            <p>USERNAME: <input type="text" placeholder="Enter your username here" name="usernameTextField"></p>
            <!-- Input field for entering password -->
            <p>PASSWORD: <input type="password" placeholder="Enter your password here" name="passwordTextField"></p>
            <!-- Submit button to log in -->
            <p><input type="submit" value="LOGIN" name="loginButton"></p>
        </form>

        <!-- Link to register page for new users -->
        <p><input type="submit" value="REGISTER" name="registerButton" onclick="location.href='registerform.php'"></p>
    </body>
</html>
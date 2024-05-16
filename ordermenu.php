<?php
    // Start session to maintain user session data
    session_start();

    // Redirect to login page if username session variable is not set
    if(!isset($_SESSION['username'])){
        header('Location: login.php');
    }
?>


<html>
    <body>
        <!-- Welcome message displaying the username -->
        <h2>Welcome to my online food shop, <span style="color: red;"><?php echo $_SESSION['username']; ?></span>! Here is my menu:</h2>
        <!-- Logout button to log out the user -->
        <p><input type="submit" value="LOG OUT" name="logoutButton" onclick="location.href='logout.php'"></p>
        <!-- Menu items list -->
        <ul>
            <li><b>Burger</b> - 50 PHP</li>
            <li><b>Fries</b> - 40 PHP</li>
            <li><b>Burger Steak</b> - 60 PHP</li>
            <li><b>Fried Chicken</b> - 60 PHP</li>
            <li><b>Spaghetti</b> - 55 PHP</li>
        </ul>

        <!-- Form to place an order -->
        <form action="calculateOrder.php" method="POST">
            Choose your order: 
            <!-- Dropdown menu to select food item -->
            <select name="foodSelectField">
                <option value="burger">Burger</option>
                <option value="fries">Fries</option>
                <option value="burgerSteak">Burger Steak</option>
                <option value="friedChicken">Fried Chicken</option>
                <option value="spaghetti">Spaghetti</option>
            </select> <br><br>
            <!-- Input field to enter quantity of food -->
            Quantity: <input type="text" name="quantityTextField"> <br><br>
            <!-- Input field to enter cash -->
            Cash: <input type="text" name="cashTextField"> <br><br>
            <!-- Submit button to place the order -->
            <input type="submit" value="ORDER!" name="orderButton">
        </form>
    </body>
</html>
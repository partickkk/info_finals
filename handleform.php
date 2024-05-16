<?php 
	// Start session to maintain user session data
	session_start();
	
	// Include necessary files for database connection and functions
	require_once('dbConfig.php');
	require_once('functions.php');

	// Execute if register button is clicked
	if (isset($_POST['registerButton'])) {
		// Get username and password from form input
		$username = $_POST['registerUsernameTextField'];
		$password = password_hash($_POST['registerPasswordTextField'], PASSWORD_DEFAULT);

		// Check if input fields are empty
		if(empty($username) || empty($password)){
			// Display error message and redirect to registration form
			echo '<script> 
			alert("The input field is empty!");
			window.location.href = "registerform.php";
			</script>';
		}else{
			// Add user to database and redirect to login page after successful registration
			if(addUser($conn, $username, $password)){
				header('Location: login.php');
			// Display error message if username already exists
			}else{
				echo '<script> 
				alert("The username is already taken!");
				window.location.href = "registerform.php";
				</script>';
			}
		}
	}

	// Execute if login button is clicked
	if(isset($_POST['loginButton'])) {
		// Get username and password from form input
		$username = $_POST['usernameTextField'];
		$password = $_POST['passwordTextField'];

		// Check if input fields are empty
		if(empty($username) && empty($password)) {
			// Display error message and redirect to login page
			echo "<script>
			alert('Input fields are empty!');
			window.location.href='login.php'
			</script>";
		}else{
			// Redirect to online shop after successful login
			if(login($conn, $username, $password)) {
				header('Location: orderMenu.php');
			// Display error message if incorrect username/password
			}else{
				echo "<script>
				alert('The username and/or password is incorrect!');
				window.location.href='login.php'
				</script>";
			}
		}
	}
?>
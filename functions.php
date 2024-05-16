<?php 
	// Function to add a new user to the database
	function addUser($conn, $username, $password) {
		$sql = "SELECT * FROM user_accounts WHERE username=?"; // Query to check if username already exists
		
		// Prepare and execute the query
		$stmt = $conn->prepare($sql);
		$stmt->execute([$username]);

		// If username does not exist, insert the new user into the database
		if($stmt->rowCount() == 0) {
			$sql = "INSERT INTO user_accounts (username,password) VALUES (?,?)"; // Query to insert new user
			$stmt = $conn->prepare($sql);
			// Execute the query with username and hashed password as parameters
			return $stmt->execute([$username, $password]);
		}
	}

	// Function to authenticate user login
	function login($conn, $username, $password) {
		$query = "SELECT * FROM user_accounts WHERE username=?"; // Query to retrieve user information
		
		// Prepare and execute the query
		$stmt = $conn->prepare($query);
		$stmt->execute([$username]);

		// If username exists, proceed with password verification
		if($stmt->rowCount() == 1) {
			// Fetch user account information
			$row = $stmt->fetch();

			// Store account info as session variable
			$_SESSION['userInfo'] = $row;

			// Extract values from the session variable
			$uid = $row['user_id'];
			$uname = $row['username'];
			$passHash = $row['password'];

			// Validate password using password_verify function
			if(password_verify($password, $passHash)) {
				// Set user_id and username session variables
				$_SESSION['user_id'] = $uid;
				$_SESSION['username'] = $uname;
				return true; // Return true if login is successful
			}
			else {
				return false; // Return false if password is incorrect
			}
		}
	}
?>
<?php 	
	

	include('config/connect.php');
	$email = $title = '';
	$errors = array('email'=>'', 'title'=>'');

	if(isset($_POST['submit'])){
	

		// checking for if the fields were entered correctly
		if (empty($_POST['email'])){
			$errors['email'] = 'email is not entered correctly';
		}
		else{
			//echo htmlspecialchars($_POST['email']);
			$email = htmlspecialchars($_POST['email']);
			if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'email is not entered correctly!';
			}
			
		}

		if (empty($_POST['title'])){
			$errors['title'] = 'title must be letters or spaces';
		}
		else{
			//echo htmlspecialchars($_POST['title']);
			$title = htmlspecialchars($_POST['title']);
			if (!preg_match('/^[a-zA-Z\s]+$/', $title)){
				$errors['title'] = 'title must be letters or spaces';
			}
		}
		
		// checking if data can be sent to database
		if (array_filter($errors)){

		}	else{

			// adding data to database
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$title = mysqli_real_escape_string($conn, $_POST['title']);

			$sql = "INSERT INTO superstars(name,email) VALUES('$title', '$email')";

			// save to db and checking
			if(mysqli_query($conn, $sql)){
				// success
				header('Location: index.php');
			} else{
				// error
				echo 'query error: ' . mysqli_error($conn);

			}

		}

	}





 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Adam's Horoscope Corner</title>
	<link rel="stylesheet" href="styles.css"></link>
    <script defer src="scripts.js"></script>
</head>
<body style="background-color: rgb(29, 28, 28);">
	 <?php include 'templates/header.php' ?>
	 <div>
	 <form method="POST" action="Add.php">
	 	<center>
		 	<ul>
		 		<br><br>
			 	<label>Your Email:</label>
			 	<li><input type="text" name="email" value="<?php echo htmlspecialchars($email) ?>"></li>
			 	<br><div style="color:red"><?php echo $errors['email'] ?></div><br>
			 	<label>Your Superstar Name:</label>
			 	<li><input type="text" name="title" value="<?php echo htmlspecialchars($title) ?>"></li>
			 	<br><div style="color:red"><?php echo $errors['title'] ?></div><br>
			 	<li><input type="submit" name="submit" value="submit"></li>
		 	</ul>	
	 	</center>
	 </form>
	</div>
</body>
</html>
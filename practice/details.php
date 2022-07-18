<?php 
	include('config/connect.php');

	// deleting data
	if(isset($_POST['delete'])){

		$id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

		$sql = "DELETE FROM superstars WHERE id = $id_to_delete";

		if(mysqli_query($conn, $sql)){
			//success
			header('Location: index.php');
		} else {
			//failure
			echo 'query error: ' . mysqli_error($conn);
		}

	}

	// check get request id param
	if(isset($_GET['id'])){

		$id = mysqli_real_escape_string($conn, $_GET['id']);

		$sql = "SELECT * FROM superstars WHERE id = $id";

		// getting result
		$result = mysqli_query($conn, $sql);

		// fetch results
		$supes = mysqli_fetch_assoc($result);

		mysqli_free_result($result);
		mysqli_close($conn);

		//print_r($supes);

	}

 ?>




 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adam's Horoscope Corner</title>
    <link rel="stylesheet" href="styles.css"></link>
    <script defer src="scripts.js"></script>
 </head>
 <body style="background-color: rgb(29, 28, 28);">
 	  <?php include 'templates/header.php' ?>
 	  <center>
 	  <div>
 	  	<?php if($supes): ?>
 	  		<h4><?php echo htmlspecialchars($supes['name']); ?></h4>
 	  		<p>Created By: <?php echo htmlspecialchars($supes['email']); ?></p>
 	  		<p><?php echo htmlspecialchars($supes['created_at']); ?></p>

 	  		<!--- Delete Form --->
 	  		<form action="details.php" method="POST">
 	  			<input type="hidden" name="id_to_delete" value="<?php echo $supes['id'] ?>">
 	  			<input type="submit" name="delete" value="Delete">

 	  		</form>


 	  	<?php else: ?>

 	  		<h1>No such wrestler exists!</h1>


 	  	<?php endif; ?>
 	  </div>
 	</center>

 </body>
 </html>
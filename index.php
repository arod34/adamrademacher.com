<?php 

    include('config/connect.php');

    // write queries
    $sql = 'SELECT id, name, email FROM superstars ORDER BY created_at';

    // make queries
    $result = mysqli_query($conn,$sql);

    // fetch resulting rows
    $superstars = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);

    mysqli_close($conn);

 ?>


<!DOCTYPE html>
<html lang="en">
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
    
    <div>
        <?php foreach ($superstars as $supe) :  ?>
            <h6><?php echo htmlspecialchars($supe['name']); ?></h6>
            <a href="details.php?id=<?php echo $supe['id'] ?>">MORE INFO</a>
        <?php endforeach; ?>
    </div>
</body>
</html>

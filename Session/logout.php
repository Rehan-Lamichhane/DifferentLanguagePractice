<?php
    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Session <?php echo $_SESSION['name']?> destroyed.....</p>
    <a href="./session_start.php"> Go back to login</a>
</body>
</html>
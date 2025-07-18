<?php
    session_start();

    if(isset($_POST['submit'])){
        $_SESSION['name']=$_POST['uname'];
        $_SESSION['email'] = $_POST['umail'];
      // echo $_POST['uname'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Welcome to Dashboard. <?php echo $_SESSION['name']?></p>
    <br><br><br><br>
    <pre>To destroy your session: </pre>
    <a href="./logout.php">Logout</a>
</body>
</html>
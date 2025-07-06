
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="./FormHandling.css">
</head>
<body>
    <form action="response.php" method="post" target="_blank">
        <label for="full_name">Full Name</label>
        <input type="text" name="full_name" id="full_name">

         <label for="address">Address</label>
        <input type="text" name="address" id="address">
        
         <label for="email">E-Mail</label>
        <input type="text" name="email" id="email">
        
         <label for="password">Password</label>
        <input type="password" name="password" id="password">
        
        <label for="conform_password">Comform Password</label>
        <input type="password" name="conform_password" id="conform_password">

        <input type="submit" name="Send" value="Send Data">
        <input type="button" name="showData" value="Show Data">
    </form>
</body>
</html>
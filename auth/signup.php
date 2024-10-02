<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
<h1>Register</h1>
    <form method="post" action="../include/register.inc.php">
        <input type="text" name="Username" placeholder="username" required><br><br>
        <input type="email" name="email" id="" placeholder="email" required><br><br>
        <input type="password" name="pwd" id="" placeholder="password" required><br><br>
        <input type="password" name="pwd2" id="" placeholder="confirm password"><br><br>
        <input type="submit" value="submit">
        </form>
        <h1>Already registered?<a HREF="login.php">LOGIN</a></h1>
</body>
</html>
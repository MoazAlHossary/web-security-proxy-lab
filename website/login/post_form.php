<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login via POST</title>
    <link rel="stylesheet" href="lstyles.css">
</head>
<body>
    <div class="container">
        <h2>Login (POST Method)</h2>
        <form action="login_success.php" method="POST">
        <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="Enter your username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter your password" required>

            <input type="submit" value="Login">
        </form>
        <a href="../index.html" class="back-home">Back to Home</a>
        </div>
</body>
</html>

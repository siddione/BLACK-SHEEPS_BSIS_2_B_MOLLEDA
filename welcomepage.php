<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f0f0;
        }
        h1 {
            margin-bottom: 20px;
        }
        .btn-container {
            display: flex;
            gap: 15px;
        }
        .btn {
            text-decoration: none;
            padding: 10px 20px;
            color: white;
            background-color: #007BFF;
            border-radius: 5px;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Welcome to Our Website!</h1>
    <div class="btn-container">
        <a href="login.php" class="btn">Login</a>
        <a href="signup.php" class="btn">Sign Up</a>
    </div>
</body>
</html>

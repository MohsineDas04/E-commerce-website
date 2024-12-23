<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our E-Commerce Store</title>
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        .welcome-container {
            text-align: center;
            max-width: 600px;
            margin: 100px auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .welcome-title {
            color: #2c3e50;
            margin-bottom: 20px;
            font-size: 2.5em;
        }

        .welcome-description {
            color: #7f8c8d;
            margin-bottom: 30px;
            line-height: 1.6;
        }

        .welcome-actions {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        .welcome-btn {
            display: inline-block;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .welcome-btn-register {
            background-color: #3498db;
            color: white;
        }

        .welcome-btn-login {
            background-color: #2ecc71;
            color: white;
        }

        .welcome-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1 class="welcome-title">Welcome to Our E-Commerce Store</h1>
        <p class="welcome-description">
            Discover a world of amazing products at your fingertips. 
            Join our community and start shopping today!
        </p>
        <div class="welcome-actions">
            <a href="register.php" class="welcome-btn welcome-btn-register">Register</a>
            <a href="login.php" class="welcome-btn welcome-btn-login">Login</a>
        </div>
    </div>
</body>
</html>
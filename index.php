<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: linear-gradient(120deg, #3498db, #8e44ad);
        }

        .login-container {
            background: rgba(255, 255, 255, 0.2);
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            text-align: center;
        }

        h2 {
            text-align: center;
            color: #fff;
            margin-bottom: 30px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: 0.3s;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #2c3e70;
            border: none;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .error-message {
            color: #e74c3c;
            margin-bottom: 1rem;
        }

        .login-button {
            background: #e74c3c;
            color: #fff;
            padding: 0.8rem 2rem;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .login-button:hover {
            background: #c0392b;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="./backend/login.php" method="POST">
            <input type="email" name="email" id="email" class="input" placeholder="Email" required/>
            <input type="password" name="password" id="password" class="input" placeholder="Password" required/>
            <button type="submit" class="button">Login</button>
        </form>
    </div>
</body>
</html>

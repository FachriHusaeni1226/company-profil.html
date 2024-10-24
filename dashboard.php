<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <!-- Link Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(120deg, #3498db, #8e44ad);
            overflow: hidden;
        }

        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.2);
            padding: 2rem 3rem;
            border-radius: 15px;
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            transform: scale(0);
            animation: scaleUp 0.7s ease-in-out forwards 1.5s;
        }

        h1 {
            font-size: 2rem;
            color: #fff;
            margin: 0;
            opacity: 0;
            animation: fadeIn 1.5s ease-in-out forwards;
        }

        p {
            font-size: 1rem;
            color: #fff;
            opacity: 0;
            animation: fadeIn 1.5s ease-in-out forwards 0.3s;
        }

        .button {
            display: inline-block;
            margin-top: 2rem;
            padding: 0.8rem 2rem;
            font-size: 1rem;
            color: #fff;
            background: #e74c3c;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            text-decoration: none;
            transition: background 0.3s, transform 0.3s;
            opacity: 0;
            animation: fadeIn 1.5s ease-in-out forwards 0.6s;
        }

        .button:hover {
            background: #c0392b;
            transform: scale(1.05);
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        @keyframes scaleUp {
            0% {
                transform: scale(0);
            }
            100% {
                transform: scale(1);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hallo, Welcome Back Admin!</h1>
        <p>Glad to see you again. Let's get started with your tasks.</p>
        <a href="index.php" class="button">Go to Dashboard</a>
    </div>
</body>
</html>

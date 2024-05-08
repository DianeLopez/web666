<!DOCTYPE html>
<html>
<head>
    <title>Smart Socket Switch - Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            background-image: url('appliances.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            font-family: Arial, sans-serif; 
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.8); /* Transparent white background */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1); /* Box shadow */
            padding: 40px;
            text-align: center;
            width: 300px;
        }

        .logo {
            width: 100px;
            height: 100px;
            border-radius: 50%; /* Make the logo circular */
            margin-bottom: 20px;
            animation: slide 2s infinite alternate; /* Apply animation to the logo */
        }

        @keyframes slide {
            0% { transform: translateY(0); } /* Starting position */
            100% { transform: translateY(20px); } /* Ending position */
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            color: #606770; /* Label color */
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 8px;
            text-align: left;
        }

        input[type="text"],
        input[type="password"] {
            border: 1px solid #dddfe2; /* Input border color */
            border-radius: 6px; /* Rounded corners */
            padding: 10px;
            margin-bottom: 16px;
            width: 100%;
        }

        button[type="submit"] {
            background-color: #808080; /* Gray color */
            border: none;
            border-radius: 6px; /* Rounded corners */
            color: #fff;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            padding: 12px 0;
            transition: background-color 0.3s ease;
            width: 100%;
        }

        button[type="submit"]:hover {
            background-color: #737373; /* Darker shade of gray on hover */
        }

        .error {
            color: red;
            margin-bottom: 16px;
        }

        p {
            font-size: 14px;
            color: #606770; /* Text color */
            margin-top: 8px;
        }

        a {
            color: #1877f2; /* Link color */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <img src="logo.jpg.jpg" class="logo" alt="Logo">
        <h2>Login</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <form action="userdashboard.php" method="post">
            <label>Email</label>
            <input type="text" name="uname" placeholder="Email">

            <label>Password</label>
            <input type="password" name="password" placeholder="Password">

            <button type="submit">Login</button>
        </form>
        <p><a href=" create new account.php  ">Create new account</a></p>
        <p><a href="#">Forgot password?</a></p>
    </div>
</body>
</html>

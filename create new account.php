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
            position: relative; /* Position relative for absolute positioning of icons */
        }

        .logo {
            width: 100px;
            height: 100px;
            border-radius: 50%; /* Make the logo circular */
            margin-bottom: 20px;
            animation: slide 2s infinite alternate; /* Apply animation to the logo */
        }

        .welcome-icon {
            position: relative;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .right-icon,
        .left-icon {
            width: 100px;
            height: 100px;
            margin: 0 5px;
            border-radius: 50%; /* Make the icon circular */
            animation: wave 2s infinite alternate;
        }

        @keyframes wave {
            0% { transform: rotate(0deg); }
            50% { transform: rotate(15deg); }
            100% { transform: rotate(0deg); }
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

        input[type="text"] {
            border: 1px solid #dddfe2; /* Input border color */
            border-radius: 6px; /* Rounded corners */
            padding: 10px;
            margin-bottom: 16px;
            width: 100%;
        }

        .button-link {
            background-color:#808080; /* Gray color */
            border: none;
            color: white;
            padding: 12px 24px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            width: 100%;
            margin-top: 20px; /* Add margin to match the design */
        }

        .button-link:hover {
            background-color:  #737373; /* Darker shade of gray on hover */
        }

        .error {
            color: red;
            margin-bottom: 16px;
        }

        p {
            font-size: 15px; /* Smaller font size */
            color: #707B7C ; /* Text color */
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
        <h2 class="welcome-icon">
            <img src="left_icon.png.jpg" class="left-icon" alt="Left Icon">
            WELCOME
            <img src="right_icon.png.jpg" class="right-icon" alt="Right Icon">
        </h2>
        <p>Enter your name</p> <!-- Moved below the welcome text -->
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <form action="choose your email address.php" method="get">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First Name">

            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last Name">
            
            <button type="submit" class="button-link">Next</button>
        </form>
    </div>
</body>
</html>

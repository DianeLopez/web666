<!DOCTYPE html>
<html>
<head>
    <title>Smart Socket Switch - Sign Up</title>
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

        input[type="password"],
        input[type="text"] {
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
            margin-top: 50px; /* Adjusted margin-top */
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

        .checkbox-container {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-bottom: 16px;
        }

        #showPasswordCheckbox {
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Create a strong password</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <form action="dashboard pages.php" method="GET">
            <label>Password</label>
            <input type="password" name="password" id="password" placeholder="Password">

            <label>Confirm Password</label>
            <input type="password" name="confirm_password" id="confirmPassword" placeholder="Confirm Password">
            
            <div class="checkbox-container">
                <input type="checkbox" id="showPasswordCheckbox" onclick="togglePasswordVisibility()">
                <label for="showPasswordCheckbox">Show Password</label>
            </div>
            
            <button type="submit">Sign Up</button>
        </form>
    </div>

    <script>
        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var confirmPasswordInput = document.getElementById("confirmPassword");
            var checkbox = document.getElementById("showPasswordCheckbox");

            if (checkbox.checked) {
                passwordInput.type = "text";
                confirmPasswordInput.type = "text";
            } else {
                passwordInput.type = "password";
                confirmPasswordInput.type = "password";
            }
        }
    </script>
</body>
</html>

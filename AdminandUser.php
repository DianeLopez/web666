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
            padding: 60px; /* Increased padding */
            text-align: center;
            width: 400px; /* Increased width */
            position: relative; /* To position the triangle */
            overflow: hidden; /* Hide overflowing triangle */
        }

        .triangle {
            position: absolute;
            bottom: -35px; /* Adjusted position */
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border-left: 35px solid transparent; /* Adjusted size */
            border-right: 35px solid transparent; /* Adjusted size */
            border-top: 35px solid rgba(255, 255, 255, 0.8); /* Same as container background */
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

        button[type="submit"] {
            background-color: #808080; /* Gray color */
            border: none;
            border-radius: 6px; /* Rounded corners */
            color: #fff;
            cursor: pointer;
            font-size: 19px;
            font-weight: bold;
            padding: 12px 0;
            transition: background-color 0.3s ease;
            width: 100%;
            margin-top: 20px;
        }

        button[type="submit"]:hover {
            background-color: #737373; /* Darker shade of gray on hover */
        }

        .error {
            color: red;
            margin-bottom: 16px;
        }

        p {
            font-size: 18px;
            color: #606770; /* Text color */
            margin-top: 8px;
            margin-bottom: 8px; /* Added margin bottom for better spacing */
            text-align: justify;
        }

        a {
            color: #1877f2; /* Link color */
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Style for admin and user buttons */
        button.admin,
        button.user {
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

        button.admin:hover,
        button.user:hover {
            background-color: #737373; /* Darker shade of gray on hover */
        }

        .system-info {
            text-align: center; /* Centered text */
            margin-bottom: 20px;
        }

        .system-info p:first-child {
            font-weight: bold; /* Make the first paragraph bold */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="triangle"></div> <!-- Inverted triangle -->
        <img src="logo.jpg.jpg" class="logo" alt="Logo">
        <div class="system-info">
            <h2>Welcome to Smart Socket Switch System</h2>
        </div>
        <p>Here is our Smart Socket Switch system. It allows you to control appliances remotely using your phone, ensuring peace of mind and convenience.</p>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <form id="admin-form" method="post" action="">
            <button type="submit" class="admin">Admin</button>
        </form>
        <form id="user-form" method="post" action="">
            <button type="submit" class="user">User</button>
        </form>
    </div>

    <script>
        document.querySelector('.admin').addEventListener('click', function() {
            document.getElementById('admin-form').action = 'index1.php';
        });

        document.querySelector('.user').addEventListener('click', function() {
            document.getElementById('user-form').action = 'index2.php';
        });
    </script>
</body>
</html>

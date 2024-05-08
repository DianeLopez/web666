<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #dashboard {
            width: 1300px;
            margin: 0 auto;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
        }
        #dashboard h2 {
            text-align: center;
        }
        #dashboard ul {
            list-style-type: none;
            padding: 0;
        }
        #dashboard ul li {
            padding: 10px 0;
            border-top: 1px solid #eee;
        }
        #dashboard ul li:last-child {
            border-bottom: 1px solid #eee;
        }
        #dashboard ul li a {
            text-decoration: none;
            color: #333;
        }
    </style>
</head>
<body>
    <div id="dashboard">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="dash.php">Profile</a></li>
            <li><a href="landlord.php">Room</a></li>
            <!-- Updated link for Notification -->
            <li><a href="notification.php">Notification</a></li>
            <li><a href="#">Messages</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Tutorial</a></li>
            <li><a href="#">Help Center</a></li>
        </ul>
      
        <hr>
        <p><a href="index2.php">Logout</a></p>
    </div>
</body>
</html>

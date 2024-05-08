<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Socket Switch</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        #header {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        #appTitle {
            font-size: 24px;
            font-weight: bold;
        }

        #status {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 20px;
        }

        #on {
            color: green;
        }

        #off {
            color: red;
        }

        #dashboard {
            display: none; 
            justify-content: center;
            width: 80%;
            margin-bottom: 20px;
        }

        #smallTable {
            width: 20%;
            margin-right: 20px;
        }

        #largeTable {
            width: 70%;
        }

        #logout {
            margin-top: 20px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        .folder-container {
            display: flex;
            justify-content: center;
            align-items: flex-start;
        }

        .folder {
            width: 150px;
            height: 150px;
            text-align: center;
            margin: 20px;
            border: 2px solid black;
            border-radius: 10px;
            padding: 10px;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .folder img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 10px;
        }

        .folder p {
            margin: 0; 
            font-weight: bold; 
        }

        .number {
            color: #2ECC71;
            font-size: 24px; 
            margin-top: auto;
        }

        .folder-buttons {
            position: absolute; 
            top: 0; 
            right: -30px; 
            display: flex;
            flex-direction: column;
        }

        .folder-buttons button {
            margin-bottom: 5px;
        }

        #applianceButtons {
            position: absolute;
            top: 0;
            right: 0;
            margin-top: 20px;
        }

        #applianceButtons button {
            margin-left: 10px;
        }

        .rooms {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        /* CSS para sa mensahe ng batas */
        #law_message {
            display: block;
            text-align: center;
            margin: auto; /* I-center ang box horizontally */
            padding: 10px; /* Paliitin ang padding para sa mas maliit na box */
            background-color: #f0f0f0;
            border: 2px solid #333;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: slideIn 0.5s ease-in-out forwards;
            align-items: center; /* Itayo ang box */
            position: absolute; /* I-set ang position sa absolute */
            top: 49%; /* Ilagay ang box sa gitna ng screen vertically */
            left: 50%; /* Ilagay ang box sa gitna ng screen horizontally */
            transform: translate(-50%, -50%); /* I-adjust ang position ng box sa gitna */
            max-width: 500px; /* I-set ang maximum width ng box */
        }

        @keyframes slideIn {
            from {
                transform: translate(-50%, -100%);
                opacity: 0;
            }
            to {
                transform: translate(-50%, -50%);
                opacity: 1;
            }
        }

        .law_content {
            font-size: 16px;
        }

        .close_button_inside {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div id="header">
        <p id="appTitle">Smart Socket Switch</p>
    </div>

    <div id="status">
        <p id="on">Appliances On: <span id="onCount">5</span></p>
        <p id="off">Appliances Off: <span id="offCount">5</span></p>
    </div>

    <!-- Mensahe ng batas -->
    <div id="law_message">
        <h2>Republic Act ng Smart Socket Switch (RSS) Act of 2024:</h2>
        <div class="law_content">
            <p>I. Seguridad ng Smart Socket Switch</p>
            <p>1. Lahat ng Smart Socket Switch ay dapat sumunod sa pambansang pamantayan ng seguridad para sa pangangalaga ng publiko laban sa anumang aksidente.</p>
            <p>2. Ang mga may kakayahan na i-access sa pamamagitan ng telepono ay dapat magkaruon ng authentication measures.</p>
            <p>II. Proteksyon ng Data</p>
            <p>1. Bawal ang pag-aangkat o pagbebenta ng personal na impormasyon ng mga gumagamit ng Smart Socket Switch nang walang pahintulot ng mga ito.</p>
            <p>III. Pagsusuri at Pagsasaayos</p>
            <p>1. Ang batas na ito ay maaaring amyendahan batay sa pag-unlad ng teknolohiya at pangangailangan ng publiko.</p>
            <p>IV. Parusa</p>
            <p>1. Ang sinumang lumabag sa batas na ito ay maaaring parusahan ng multa o iba pang nararapat na parusa batay sa umiiral na batas.</p>
        </div>
        <button class="close_button_inside" onclick="hideLawMessage()">Close</button> <!-- Button na close sa loob ng box -->
    </div>

    <div id="dashboard" class="folder-container">
        <div class="rooms">
            <!-- Room 1 -->
            <div class="folder" onclick="highlightNumber('folder1Count')">
                <p>Room 1</p>
                <img src="icon.jpg" alt="logo">
                <p id="folder1Count" class="number">0</p>
            </div>

            <!-- Room 2 -->
            <div class="folder" onclick="highlightNumber('folder2Count')">
                <p>Room 2</p>
                <img src="icon.jpg" alt="logo">
                <p id="folder2Count" class="number">0</p>
            </div>

            <!-- Room 3 -->
            <!-- Add rooms 3 to 10 -->
            <!-- Room 3 -->
            <div class="folder" onclick="highlightNumber('folder3Count')">
                <p>Room 3</p>
                <img src="icon.jpg" alt="logo">
                <p id="folder3Count" class="number">0</p>
            </div>

            <!-- Room 4 -->
            <div class="folder" onclick="highlightNumber('folder4Count')">
                <p>Room 4</p>
                <img src="icon.jpg" alt="logo">
                <p id="folder4Count" class="number">0</p>
            </div>

            <!-- Room 5 -->
            <div class="folder" onclick="highlightNumber('folder5Count')">
                <p>Room 5</p>
                <img src="icon.jpg" alt="logo">
                <p id="folder5Count" class="number">0</p>
            </div>

            <!-- Room 6 -->
            <div class="folder" onclick="highlightNumber('folder6Count')">
                <p>Room 6</p>
                <img src="icon.jpg" alt="logo">
                <p id="folder6Count" class="number">0</p>
            </div>

            <!-- Room 7 -->
            <div class="folder" onclick="highlightNumber('folder7Count')">
                <p>Room 7</p>
                <img src="icon.jpg" alt="logo">
                <p id="folder7Count" class="number">0</p>
            </div>

            <!-- Room 8 -->
            <div class="folder" onclick="highlightNumber('folder8Count')">
                <p>Room 8</p>
                <img src="icon.jpg" alt="logo">
                <p id="folder8Count" class="number">0</p>
            </div>

            <!-- Room 9 -->
            <div class="folder" onclick="highlightNumber('folder9Count')">
                <p>Room 9</p>
                <img src="icon.jpg" alt="logo">
                <p id="folder9Count" class="number">0</p>
            </div>

            <!-- Room 10 -->
            <div class="folder" onclick="highlightNumber('folder10Count')">
                <p>Room 10</p>
                <img src="icon.jpg" alt="logo">
                <p id="folder10Count" class="number">0</p>
            </div>
        </div>
    </div>

    <div id="applianceButtons">
        <button>Add Room</button>
        <button>Delete</button>
    </div>

    <button id="logout">Log Out</button>

    <script> 
         // JavaScript code

        // Function to redirect to login.php when Log Out button is clicked
        document.getElementById("logout").addEventListener("click", function() {
            window.location.href = 'index.php';
        });
        
        
        
        // Simulang JavaScript para sa pag-update ng counts
        let onCount = 5;
        let offCount = 5;

        function updateCounts() {
            // I-update ang counts
            onCount = Math.floor(Math.random() * 20);
            offCount = 20 - onCount;

            // I-update ang HTML na nakakasalamuha sa counts
            document.getElementById("onCount").innerText = onCount;
            document.getElementById("offCount").innerText = offCount;
        }

        // I-set ang interval para sa otomatikong pag-update kada 3 segundo
        setInterval(updateCounts, 3000);
   // Function to handle clicking on each room folder
        function highlightNumber(roomNumber) {
            // Redirect user to appliances-monitor.php with room number as parameter
            window.location.href = 'appliances-monitor.php?room=' + roomNumber;
        }
        
        // Function to update the numbers in each room
        function updateRoomNumbers() {
            for (let i = 1; i <= 10; i++) {
                const roomId = "folder" + i + "Count";
                const randomNumber = Math.floor(Math.random() * 10) + 1;
                document.getElementById(roomId).innerText = randomNumber;
            }
        }

            
        
        
        
        
        // Set interval to update room numbers every 3 seconds
        setInterval(updateRoomNumbers, 3000);

        // Function to hide law message and show dashboard
        function hideLawMessage() {
            document.getElementById("law_message").style.display = "none";
            document.getElementById("dashboard").style.display = "flex";
        }
    </script>
</body>
</html>

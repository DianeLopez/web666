<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Smart Home Control</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0; /* Adding a background color */
    }

    .container {
        text-align: center;
        margin-top: 50px;
    }

    .row {
        display: flex;
        justify-content: space-around;
        margin-bottom: 20px; /* Adjust as needed */
    }

    .object-container {
        position: relative; /* Added */
        display: flex;
        align-items: center;
        justify-content: center; 
        flex-direction: column; 
        margin-bottom: 40px; 
        border: 2px solid #ccc; 
        border-radius: 10px; 
        padding: 20px; /* Increased padding */
        background-repeat: no-repeat; /* Prevent background from repeating */
        background-size: cover; /* Cover the entire container */
        background-position: center; /* Center the background image */
        width: 300px; /* Adjust width */
        height: 200px; /* Adjust height */
    }

    .object-name {
        position: absolute; /* Added */
        top: 10px; /* Added */
        left: 10px; /* Added */
        color: white; /* Set text color to white */
    }

    .switch-container {
        position: relative;
        width: 60px;
        height: 34px;
    }

    .switch {
        position: absolute;
        bottom: 10px; /* Adjusted */
        right: 10px; /* Adjusted */
        transform: translateY(-50%);
        width: 34px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
        border-radius: 34px;
        width: 60px;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
        border-radius: 50%;
    }

    input:checked + .slider {
        background-color: #2196F3;
    }

    input:focus + .slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Background images for appliances */
    .rice-cooker-bg {
        background-image: url('rice_cooker_bg.jpg'); /* Replace 'rice_cooker_bg.jpg' with your image path */
    }

    .electric-fan-bg {
        background-image: url('electric_fan_bg.jpg'); /* Replace 'electric_fan_bg.jpg' with your image path */
    }

    .blender-bg {
        background-image: url('blender_bg.jpg.jpg');
    }

    .kettle-bg {
        background-image: url('kettle_bg.jpg.jpg');
    }

    .dishwasher-bg {
        background-image: url('dishwasher_bg.jpg.jpg');
    }

    .air-conditioner-bg {
        background-image: url('air_conditioner_bg.jpg.jpg');
    }

    .vacuum-cleaner-bg {
        background-image: url('vacuum_cleaner_bg.jpg.jpg');
    }

    .washing-machine-bg {
        background-image: url('washing_machine_bg.jpg.jpg');
    }
</style>
</head>
<body>

<div class="container">
    <h2>Smart Home Control</h2>
    <div class="row">
        <!-- First Row -->
        <div class="object-container rice-cooker-bg"> <!-- Adding rice cooker background -->
            <div class="object-name">Rice Cooker</div>
            <div class="switch-container">
                <label class="switch">
                    <input id="riceCookerSwitch" type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
        <div class="object-container electric-fan-bg"> <!-- Adding electric fan background -->
            <div class="object-name">Electric Fan</div>
            <div class="switch-container">
                <label class="switch">
                    <input id="electricFanSwitch" type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
        <div class="object-container blender-bg"> <!-- Adding blender background -->
            <div class="object-name">Blender</div>
            <div class="switch-container">
                <label class="switch">
                    <input id="blenderSwitch" type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Second Row -->
        <div class="object-container kettle-bg"> <!-- Adding kettle background -->
            <div class="object-name">Kettle</div>
            <div class="switch-container">
                <label class="switch">
                    <input id="kettleSwitch" type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
        <div class="object-container dishwasher-bg"> <!-- Adding dishwasher background -->
            <div class="object-name">Dishwasher</div>
            <div class="switch-container">
                <label class="switch">
                    <input id="dishwasherSwitch" type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
        <div class="object-container air-conditioner-bg"> <!-- Adding air conditioner background -->
            <div class="object-name">Air Conditioner</div>
            <div class="switch-container">
                <label class="switch">
                    <input id="airConditionerSwitch" type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <!-- Third Row -->
        <div class="object-container vacuum-cleaner-bg"> <!-- Adding vacuum cleaner background -->
            <div class="object-name">Vacuum Cleaner</div>
            <div class="switch-container">
                <label class="switch">
                    <input id="vacuumCleanerSwitch" type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
        <div class="object-container washing-machine-bg"> <!-- Adding washing machine background -->
            <div class="object-name">Washing Machine</div>
            <div class="switch-container">
                <label class="switch">
                    <input id="washingMachineSwitch" type="checkbox">
                    <span class="slider"></span>
                </label>
            </div>
        </div>
    </div>
</div>

<script>
// Add event listeners for each appliance switch
document.getElementById('riceCookerSwitch').addEventListener('change', function() {
    if (this.checked) {
        console.log('Rice cooker turned ON');
    } else {
        console.log('Rice cooker turned OFF');
    }
});

document.getElementById('electricFanSwitch').addEventListener('change', function() {
    if (this.checked) {
        console.log('Electric fan turned ON');
    } else {
        console.log('Electric fan turned OFF');
    }
});

document.getElementById('blenderSwitch').addEventListener('change', function() {
    if (this.checked) {
        console.log('Blender turned ON');
    } else {
        console.log('Blender turned OFF');
    }
});

document.getElementById('kettleSwitch').addEventListener('change', function() {
    if (this.checked) {
        console.log('Kettle turned ON');
    } else {
        console.log('Kettle turned OFF');
    }
});

document.getElementById('dishwasherSwitch').addEventListener('change', function() {
    if (this.checked) {
        console.log('Dishwasher turned ON');
    } else {
        console.log('Dishwasher turned OFF');
    }
});

document.getElementById('airConditionerSwitch').addEventListener('change', function() {
    if (this.checked) {
        console.log('Air Conditioner turned ON');
    } else {
        console.log('Air Conditioner turned OFF');
    }
});

document.getElementById('vacuumCleanerSwitch').addEventListener('change', function() {
    if (this.checked) {
        console.log('Vacuum Cleaner turned ON');
    } else {
        console.log('Vacuum Cleaner turned OFF');
    }
});

document.getElementById('washingMachineSwitch').addEventListener('change', function() {
    if (this.checked) {
        console.log('Washing Machine turned ON');
    } else {
        console.log('Washing Machine turned OFF');
    }
});
</script>

</body>
</html>

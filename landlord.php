<!DOCTYPE html>
<html>
<head>
    <title>Table Example</title>
    <style>
        body {
            width: 100%;
            max-width: 1200px; /* Adjust the max-width to fit your laptop screen size */
            margin: 0 auto; /* Center the content horizontally */
            font-family: Arial, sans-serif; /* Set a commonly used font */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            border: 2px solid #000; /* Add a border to the table */
            border-radius: 5px; /* Add some border radius for rounded corners */
        }
        th, td {
            padding: 10px; /* Increase padding for better spacing */
            text-align: left; /* Align text to the left */
        }
        th {
            background-color: #f0f0f0; /* Light gray background for table header */
        }
        td {
            border-top: 1px solid #ddd; /* Add border at the top of each table data cell */
        }
        .button-container {
            display: flex;
            align-items: center;
            margin-bottom: 20px; /* Increase margin for better separation */
        }
        .button-container input[type="text"] {
            flex: 1; /* Make the search input box fill the available space */
            padding: 8px; /* Increase padding for better appearance */
            border: 1px solid #ccc; /* Add a border to the search input box */
            border-radius: 5px; /* Add some border radius for rounded corners */
        }
        .button-container button {
            padding: 8px 15px; /* Increase padding for better appearance */
            border: none; /* Remove default button border */
            background-color: #4CAF50; /* Green background color */
            color: white; /* White text color */
            border-radius: 5px; /* Add some border radius for rounded corners */
            cursor: pointer; /* Add cursor pointer on hover */
        }
        .button-container button:hover {
            background-color: #45a049; /* Darker green color on hover */
        }
    </style>
</head>
<body>
    <div class="button-container">
        <input type="text" placeholder="Search..." onkeyup="filterTable()">
        <button>Add Owner</button>
        <button>Delete</button>
    </div>
    <table id="myTable">
        <tr>
            <th>Name</th>
            <th>Contact</th>
            <th>Room</th>
            <th>Appliance</th>
        </tr>
        <tr>
            <td>Jerico</td>
            <td>097673</td>
            <td>1</td>
            <td>Electric fan</td>
        </tr>
        <tr>
            <td>Joe Honey</td>
            <td>097774</td>
            <td>2</td>
            <td>Rice Cooker</td>
        </tr>
        <tr>
            <td>Kathleen</td>
            <td>097976</td>
            <td>3</td>
            <td>Washing machine</td>
        </tr>
        <tr>
            <td>Cristine</td>
            <td>097176</td>
            <td>4</td>
            <td>Washing machine</td>
        </tr>
        <tr>
            <td>Rovic</td>
            <td>093176</td>
            <td>5</td>
            <td>Washing machine</td>
        </tr>
    </table>

    <script>
        function filterTable() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.querySelector('input[type="text"]');
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0]; // Search only in the first column (Name)
                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>
</html>

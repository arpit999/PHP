<!DOCTYPE html>
<!--
Student ID: 000762465
Name: Arpit Patel

Authorship : This is all work done by me.
-->
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title></title>

        <style>

            table {
                border: 1px solid black;
                border-collapse: collapse;
                width: 30%;
            }

            th, td {
                text-align: left;
                padding: 8px;
                text-align: center;
            }

            tr:nth-child(odd){
                background-color: #d1c4e9;
            }

            th {
                background-color: #4527a0;
                color: white;
            }

            /*            table, th, td {
                            border: 1px solid black;
                            text-align: center;
                        }*/
            p{
                font-size: 17px;
                font-weight: bold;
                text-align: center;
                color: red;
            }

            h3{
                text-align: center;
                width: 30%;
            }

        </style>
    </head>


    <body>

        <?php
//          var_dump($_GET);
        // getting conversion type to show in header
        $conversionType = $_GET["conversionType"];
        // getting the startin tempeture value
        $startTemperature = $_GET["startTemperature"];
        // getting ending tempeture value
        $endTemperature = $_GET["endTemperature"];
        // step increase value
        $skipTemperature = $_GET["skipTemperature"];
        ?>

        <?php
        /**
         * check variable is set and check end value should be grater then start one. If not user get error for that execute the code
         */
        if (!(isset($startTemperature) && ($startTemperature > 0) && ($startTemperature < $endTemperature))) {
            echo "<p>ERROR: Please enter valid input in Starting Tempeture.</p>";
        } elseif (!(isset($endTemperature) && $endTemperature > 0)) {
            echo "<p>ERROR: Please enter valid input in End Tempeture.</p>";
        } elseif (!(isset($skipTemperature) && ($skipTemperature > 0) && ($skipTemperature < $endTemperature) )) {
            echo "<p>ERROR: Please enter valid input in Step Increase.</p>";
        } elseif ($conversionType == "Celsius to Fahrenheit") {

            //print heading according to conversion type
            echo"<h3>$conversionType</h3>";

            // create table and table heading
            echo"<table>
            <tr>
                <th>Celsius</th>
                <th>Fahrenheit</th> 
            </tr>";

            //loop for the print value in table and add row and column in loop
            for ($i = $startTemperature; $i <= $endTemperature; $i += $skipTemperature) {
                $temp = sprintf('%0.2f', $i * 33.8);
                echo "<tr><td>$i</td><td>$temp</td></tr>";
            }
        } else {

            // this is for the Fahrenheit to Celsius
            echo"<h3>$conversionType</h3>";

            // create table and table heading
            echo"<table>
            <tr>
                <th>Fahrenheit</th>
                <th>Celsius</th> 
            </tr>";

            //loop for the print value in table and add row and column in loop
            for ($i = $startTemperature; $i <= $endTemperature; $i += $skipTemperature) {
                $temp = sprintf('%0.2f', $i * -17.2222);
                echo "<tr><td>$i</td><td>$temp</td></tr>";
            }
        }
        ?>

    </body>

</html>
<!--Author: Luke A Brannock
Date: Febuary 17, 2024
File: my-first.php
Purpose: PHP Practice
-->
<html>
    <head>
        <title>First PHP Example</title>
    </head>
        <body>
            <h1>Circle Calculation<h1>
            <?php
            $radius = 15.75;
            $area = pi() * pow($radius, 2);
            $circumference = 2 * pi() * $radius;

            Print("<p>A circle with a radius of $radius has an area of
             $area and a circumference of $circumference.</p>");

            print("<p>That'sall that I have been designed to tell
             you!</p>");
             ?>
        </body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Match statement</title>
</head>
<body>
    <?php
        echo "<br>".str_repeat("=", 50), "<br>";
        $score = 85;
        match(true){
            ($score <60) => print "You got an F.",
            ($score >= 60 && $score <70) => print "You got a E.",
            ($score >= 70 && $score <80) => print "You got a D.",
            ($score >= 80 && $score <90) => print "You got a C.",
            ($score >= 90 && $score <95) => print "You got a B.",
            default => print "You got an A."
        }
    ?>
    <?php 
        echo "<br>".str_repeat("=", 50), "<br>";
        $day = 4;
        match($day){
            1 => print "Today is Monday.",
            2 => print "Today is Tuesday.",
            3 => print "Today is Wednesday.",
            4 => print "Today is Thursday.",
            5 => print "Today is Friday.",
            6 => print "Today is Saturday.",
            7 => print "Today is Sunday.",
            default => print "Invalid day."
        }
     ?>
</body>
</html>
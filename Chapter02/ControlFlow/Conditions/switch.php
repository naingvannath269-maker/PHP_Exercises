<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch statement</title>
</head>
<body>
    <?php
        $score = 85;
        switch(true){
            case ($score <60):
                echo "You got an F.";
                break;
            case ($score >= 60 && $score <70):
                echo "You got a E.";
                break;
            case ($score >= 70 && $score <80):
                echo "You got a D.";
                break;
            case ($score >= 80 && $score <90):
                echo "You got a C.";
                break;
            case ($score >= 90 && $score <95):
                echo "You got a B.";
                break;
            default:
                echo "You got an A.";
        }
     ?>
     <?php 
        $day = 4;
        switch($day){
            case 1:
                echo "Today is Monday.";
                break;
            case 2:
                echo "Today is Tuesday.";
                break;
            case 3:
                echo "Today is Wednesday.";
                break;
            case 4:
                echo "Today is Thursday.";
                break;
            case 5:
                echo "Today is Friday.";
                break;
            case 6:
                echo "Today is Saturday.";
                break;
            case 7:
                echo "Today is Sunday.";
                break;
            default:
                echo "Invalid day.";
        }
     ?>
</body>
</html>
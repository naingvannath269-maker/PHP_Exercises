<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If else if statement</title>
</head>
<body>
    <?php
        $score = 85;
        if($score <60){
            echo "You got an F.";
        }else if($score >= 60 && $score <70){
            echo "You got a E.";
        }else if($score >= 70 && $score <80){
            echo "You got a D.";
        }else if($score >= 80 && $score <90){
            echo "You got a C.";
        }else if($score >= 90 && $score <95){
            echo "You got a B.";
        }else{
            echo "You got an A.";
        }
     ?>
</body>
</html>
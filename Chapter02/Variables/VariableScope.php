<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Scope</title>
</head>
<body>
    <div style="font-size: 3rem">
        <?php
        $counter = 10;
        function myLocal(){
            $count = 10;
            $count++;
            echo "Local: ${count}<br>";
        }
        function myStatic(){
            static $count = 10;
            $count++;
            echo "Static: ${count}<br>";
        }
        function myGlobal(){
            global $counter;
            $counter++;
            echo "Global: ${counter}<br>";
        }
        myLocal();
        myLocal();
        myStatic();
        myStatic();
        myGlobal();
        myGlobal();
        ?>
    </div>
</html>
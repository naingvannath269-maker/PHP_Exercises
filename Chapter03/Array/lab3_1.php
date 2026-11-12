<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lap3.1 Indexed Array</title>
</head>

<body>
    <?php
    $subjects = ["Python Programming II", "Web Frontend Development", "Java OOP", "Web Application Development", "Windows Server Administration"];
    echo count($subjects);
    array_push($subjects, "Project Proposal Writing");
    echo "Subjects: {$subjects}";

    ?>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Ex1</title>
</head>

<body>
    <?php
    class Student
    {
        public string $name;
        public float $score;
        public string $school;

        public function __construct(string $name)
        {
            $this->name = $name;
        }

        public function getDetails(): string
        {
            return "Name: {$this->name} | Score: {$this->score}| School: {$this->school}";
        }
    }

    $st1 = new Student("Naing Vannath");
    $st1->score = 95;
    $st1->school = "Angkor University";
    echo $st1->getDetails();

    $st2 = new Student("Vannath Naing");
    $st2->score = 100;
    $st2->school = "University of Cambodia";
    echo "<br>" . $st2->getDetails();
    ?>
</body>

</html>
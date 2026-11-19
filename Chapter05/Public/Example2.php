<?php
    declare(strict_types=1);

    class Student
    {
        public string $name;
        public float $score;

        public function __construct(string $name, float $score)
        {
            $this->name = $name;
            $this->score = $score;
        }

        public function getRank(): string
        {
            if ($this->score > 100 || $this->score < 0) {
                return "Please input valid score!!";
            } else if ($this->score < 50) {
                return "F";
            } else if ($this->score <= 60) {
                return "D";
            } else if ($this->score <= 70) {
                return "C";
            } else if ($this->score <= 80) {
                return "B";
            } else {
                return "A";
            }
        }

        public function getDetail()
        {
            echo "Name: {$this->name} | Score: {$this->score} | Rank: {$this->getRank()}";
        }
    }

    $student = new Student("Naing Vannath", 90);
    $student->getDetail();

    $st2 =new Student("Vannath Naing", 110);
    echo "<br>";
    $st2->getDetail();
?>
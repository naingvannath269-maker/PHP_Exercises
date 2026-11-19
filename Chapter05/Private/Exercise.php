<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private access modifier</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .show-info{
            max-width: fit-content;
            align-items: center;
            background-color: #301ce2;
            border: 2px solid #e25454;
            padding: 20px;
            margin: 20px auto;
            color: white;
            border-radius: 10px;
            text-align: center;
        }
        .info{
            font-size: 20px;
            font-weight: bold;
            padding-top: 10px;
        }

        .show-info h1{
            font-size: 30px;
            font-weight: bold;
            text-decoration: underline;
            color: #e25454;
        }
    </style>
</head>
<body>
    <?php 
        class Student{
            private string $name;
            private float $score;

            public function __construct(string $name, float $score)
            {
                $this->name = $name;
                $this->score = $score;
            }


            public function getName(): string{
                return $this->name;
            }

            public function getScore(): float{
                return $this->score;
            }
            
            public function setName(string $name): void{
                $this->name = $name;
            }

            public function setScore(float $score): void{
                $this->score = $score;
            }

            public function getRank(): string{
                if($this->score > 100 || $this->score < 0){
                    return "Please input valid score!!";
                }else if($this->score < 50){
                    return "F";
                }else if($this->score <= 60){
                    return "D";
                }else if($this->score <= 70){
                    return "C";
                }else if($this->score <= 80){
                    return "B";
                }else{
                    return "A";
                }
            }
            public function getInfo(): string{
                return "Name: {$this->name} | Score: {$this->score} | Rank: {$this->getRank()}";
            }
        }
    ?>

    <div class="show-info">
        <h1>Student Information</h1>
        <p class="info">
            <?php
                $student = new Student("Naing Vannath", 90);
                echo $student->getInfo();
            ?>
        </p>
    </div>
</body>
</html>
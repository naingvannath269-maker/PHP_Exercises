<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method Overloading with private members</title>
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
            padding: 30px;
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

        .show-info h2{
            font-size: 30px;
            font-weight: bold;
            text-decoration: underline;
            color: #e25454;
        }

        .student-info, .university-info{
            padding-top: 20px;
            border: 2px solid #e25454;
            border-radius: 10px;
            background-color: #79ddd8;
            padding: 20px;
            margin-top: 20px;
        }
        .title{
            font-size: 25px;
            font-weight: bold;
            text-decoration: underline;
            color: #02f502;
        }
    </style>
</head>
<body>
    <?php
        class Student {
            private string $name;
            private int $age;
            private string $gender;
            private string $address;

            public function __construct(string $name, int $age, string $gender)
            {
                $this->name = $name;
                $this->age = $age;
                $this->gender = $gender;
                $this->address = "Not Defined";
            }
            public function getName(): string {
                return $this->name;
            }
            public function getAge(): int {
                return $this->age;
            }
            public function getGender(): string {
                return $this->gender;
            }
            public function getAddress(): string {
                return $this->address;
            }
            public function setName(string $name): void {
                $this->name = $name;
            }
            public function setAge(int $age): void {
                $this->age = $age;
            }
            public function setGender(string $gender): void {
                $this->gender = $gender;
            }
            public function setAddress(string $address): void {
                $this->address = $address;
            }

            public function enrollment(): string {
                return "Student is enrolled on " . date("Y-m-d");
            }
            public function getDetail(): void{
                echo "Name: {$this->name} <br>";
                echo "Age: {$this->age} <br>";
                echo "Gender: {$this->gender} <br>";
                echo "Address: {$this->address} <br>";
                echo $this->enrollment();
            }
        }

        class UniversityStudent extends Student {
            private string $universityName;
            private string $major;
            
            public function __construct(string $name, int $age, string $gender, string $universityName, string $major){
                parent::__construct($name, $age, $gender);
                $this->universityName = $universityName;
                $this->major = $major;
            }

            public function getDetail(): void{
                parent::getDetail();
                echo "<br>University Name: {$this->universityName} <br>";
                echo "Major: {$this->major} <br>";
            }
        }

        $st1 = new Student("Naing Vannath", 20, "Male");
        $st1->setAddress("Siem Reap, Cambodia");
        $st2 = new UniversityStudent("Vannath Naing", 22, "Male", "Angkor University", "Computer Science");
    ?>

    <div class="show-info">
        <h1 class="title">Student and University Student Information</h1>
        <div class="student-info">
            <h2>Student Information</h2>
            <p class="info">
                <?php
                    $st1->getDetail();
                ?>
            </p>
        </div>
        <div class="university-info">
            <h2>University Student Information</h2>
            <p class="info">
                <?php
                    $st2->getDetail();
                ?>
            </p>
        </div>
    </div>
</body>
</html>
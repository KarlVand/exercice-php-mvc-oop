<?php

declare(strict_types=1);

require_once '/var/www/html/studentGroup.php';

$allStudents = [];
$group1 = [];
$group2 = [];

$allStudents =
[
$paul = new Student('Verbrugge', 'Paul', 88.2, 1),
$jacqueline = new Student('Brulux', 'Jacqueline', 96.1, 1),
$josette = new Student('Bondia', 'Josette', 58.6, 1),
$jules = new Student('Vanderplast', 'Jules', 32.1, 1),
$jobert = new Student('Duchateau', 'Jobert', 76.8, 1),
$claude = new Student('Verbrechts', 'Claude', 25.2, 2),
$henri = new Student('Ducon', 'Henri', 99.1, 2),
$nadine = new Student('Mejoree', 'Nadine', 95.6, 2),
$norbert = new Student('Franluche', 'Norbert', 47.3, 2),
$jacques = new Student('Fruchon', 'Jacques', 0.0, 2),
];


function addStudents($students)
{
    global $group1, $group2;
    
    foreach ($students as $student)
    {
        if ($student->getGroup() === 1)
        {
            $group1[]= $student->grades();
        } else {
            $group2[] = $student->grades();
        }
    }
}

addStudents($allStudents);

echo "<h1>GROUP 1</h1> <br>" . implode($group1) . "<br>";
echo "<h1>GROUP 2</h1> <br>" . implode($group2) . "<br>";

/* function calculateAverage()
{
    global $group1, $group2;
    return $group1->grade * count($group1) / 5;
}

echo calculateAverage(); */


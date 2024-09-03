<?php

declare(strict_types=1);

require_once '/var/www/html/studentGroup.php';

$allStudents = [];
$group1 = [];
$group2 = [];

function addStudents(Student $students)
{
    global $allStudents, $group1, $group2;
    $allStudents[] = $students;

    if ($students->getGroup() === 1)
    {
        $group1[]= $students;
    } else {
        $group2[] = $students;
    }
}



$paul = new Student('Verbrugge', 'Paul', 88.2, 1);
$jacqueline = new Student('Brulux', 'Jacqueline', 96.1, 1);
$josette = new Student('Bondia', 'Josette', 58.6, 1);
$jules = new Student('Vanderplast', 'Jules', 32.1, 1);
$jobert = new Student('Duchateau', 'Jobert', 76.8, 1);
$claude = new Student('Verbrechts', 'Claude', 25.2, 1);
$henri = new Student('Ducon', 'Henri', 99.1, 1);
$nadine = new Student('Mejoree', 'Nadine', 95.6, 1);
$norbert = new Student('Franluche', 'Norbert', 47.3, 1);
$jacques = new Student('Fruchon', 'Jacques', 0.0, 1);

global $students;
echo $students[0]($group1);


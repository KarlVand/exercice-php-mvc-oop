<?php

declare(strict_types=1);

class Student
{
    public string $surname;
    protected string $forename;
    protected float $grade;
    protected int $group;

    public $students = [];

    public function __construct(string $surname, string $forename, float $grade, int $group)
    {
        $this->surname = $surname;
        $this->forename = $forename;
        $this->grade = $grade;
        $this->group = $group;
    }
 
    public function getGroup() : int
    {
        return $this->group;
    }

    public function getGrade() : float
    {
        return $this->grade;
    }
    public function grades()
    {
        return "<b>{$this->surname}</b> {$this->forename} : {$this->grade} <br>";
    }

    

}

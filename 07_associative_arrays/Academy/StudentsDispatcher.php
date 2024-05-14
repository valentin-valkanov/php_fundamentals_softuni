<?php declare(strict_types=1);

namespace Academy;

use Academy\StudentFactory;

require_once 'StudentFactory.php';
class StudentsDispatcher
{
    private array $students = [];

    public function __construct(private StudentFactory $studentFactory)
    {
    }

    public function readData()
    {
        $n = readline();
        for($i = 0; $i < $n; $i+=1){
            $studentName = readline();
            $grade = (float)readline();
            $student = $this->studentFactory->create($studentName);

            if(array_key_exists($studentName, $this->students) === false){
                $student->addGrade($grade);
                $this->addStudent($student);
            }else{
                $this->students[$studentName]->addGrade($grade);
            }
        }
//        dd($this->students);
    }

    public function getFilteredStudentsByGrade()
    {
        foreach ($this->students as $studentName => $studentObject)
            if($studentObject->getAverageGrade() < 4.5){
                unset($this->students[$studentName]);
            }
    }

    public function printStudents()
    {
       usort($this->students, fn($a, $b) => $b->getAverageGrade() <=> $a->getAverageGrade());

       foreach ($this->students as $student){
           $averageGrade = number_format($student->getAverageGrade(), 2);
           echo "{$student->getName()} -> {$averageGrade}" . PHP_EOL;
       }
    }

    public function addStudent(Student $student): void
    {
        $this->students[$student->getName()] = $student;
    }
}
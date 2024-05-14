<?php declare(strict_types=1);

namespace Academy;

class StudentsDispatcher
{
    private array $students = [];

    public function readData()
    {
        $n = readline();
        for($i = 0; $i < $n; $i+=1){
            $studentName = readline();
            $grade = (float)readline();

            if(array_key_exists($studentName, $this->getStudents()) === false){
                $student = new Student($studentName);
                $student->getGrades()[] = $grade;
                $this->addStudent($student);

            }
        }
    }

    public function getFilterStudentsByGrade()
    {

    }

    public function getStudents(): array
    {
        return $this->students;
    }

    public function addStudent(Student $student): void
    {
        $this->students[$student->getName()] = $student;
    }
}
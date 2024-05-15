<?php
declare(strict_types=1);

namespace App\Objects\Grades;

class StudentRepository
{
    public function createStudentsFromInput(): array
    {
        $n = readline();
        $input = readline();

        $data = [];

        for($i=0; $i<$n; $i++){
            $data[] = explode(" ", $input);
            $input = readline();
        }

        $students = [];
        foreach ($data as $item) {
            if (is_string($item[0])) {
                $name = $item[0];
                unset($item[0]);
                $student = new Student($name, array_values($item));
                $students[] = $student;
            }
        }

        return $students;
    }

    public function sortStudentsByGrades($students): array
    {
        usort($students, function($a, $b) {
            // Compare by name (ascending)
            $nameComparison = strcmp($a->getName(), $b->getName());
            if ($nameComparison !== 0) {
                return $nameComparison;
            }

            // Compare by average grade (descending)
            return $b->getAverageGrade() <=> $a->getAverageGrade();
        });

        return $students;
    }

    public function printStudents($students)
    {
        foreach ($students as $student){
            if($student->getAverageGrade() >= 5.00){
                $grade = number_format($student->getAverageGrade(), 2, '.' , ' ');
                $name = $student->getName();
                echo "$name -> $grade" . PHP_EOL;
            }
        }
    }
}






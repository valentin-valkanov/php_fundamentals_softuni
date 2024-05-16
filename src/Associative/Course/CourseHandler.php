<?php declare(strict_types=1);

namespace App\Associative\Course;

class CourseHandler
{
    public function __construct(private CourseRegistry $registry)
    {
        $this->registry = new CourseRegistry();
    }

    public function addCoursesFromInput()
    {


        $data = readline();
        while (true) {
            if ($data === 'end') {
                break;
            }

            $explodedData = explode(":", $data);
            [$courseName, $studentName] = $explodedData;

            $courseExists = false;
            foreach ($this->registry->getCourses() as $course) {
                if ($course->getName() === $courseName) {
                    $course->addStudent($studentName);
                    $courseExists = true;
                    break;
                }
            }

            if (!$courseExists) {
                $course = new Course($courseName);
                $course->addStudent($studentName);
                $this->registry->addCourse($course);

            }
            $data = readline();
        }
    }

    public function printCourses()
    {
        $courses = $this->registry->getCourses();
        usort($courses, fn($a, $b) => count($b->getStudents()) <=> count($a->getStudents()));
        foreach($courses as $course){
            echo $course->getName() . ":" . count($course->getStudents()) . PHP_EOL;

            foreach($course->getOrderedStudents() as $student){
                echo "--{$student}" . PHP_EOL;
            }
        }
    }
}
<?php

namespace App\Services;

use App\Models\Student;

class StudentService
{
    public function getAllStudents()
    {
        return Student::all();
    }

    public function createStudent($data)
    {
        return Student::create($data);
    }

    public function updateStudent(Student $student, $data)
    {
        return $student->update($data);
    }

    public function deleteStudent(Student $student)
    {
        return $student->delete();
    }
}

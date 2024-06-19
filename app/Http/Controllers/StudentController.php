<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Inertia\Inertia;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $studentService;

    public function __construct()
    {
        $this->studentService = app('student');
    }

    public function index()
    {
        $students = $this->studentService->getAllStudents();
        return Inertia::render('Students/Index', ['students' => $students]);
    }

    public function create()
    {
        return Inertia::render('Students/Create');
    }

    public function store(StudentRequest $request)
    {
        $this->studentService->createStudent($request->validated());
        return redirect()->route('students.index');
    }

    public function edit(Student $student)
    {
        return Inertia::render('Students/Edit', ['student' => $student]);
    }

    public function update(StudentRequest $request, Student $student)
    {
        $this->studentService->updateStudent($student, $request->validated());
        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        $this->studentService->deleteStudent($student);
        return redirect()->route('students.index');
    }
}

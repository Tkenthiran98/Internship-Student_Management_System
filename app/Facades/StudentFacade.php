<?php

namespace App\Facades;

use App\Models\Student;
use Illuminate\Support\Facades\Facade;

class StudentFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'student';
    }
}

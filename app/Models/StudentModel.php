<?php

namespace App\Models;

use CodeIgniter\Model;

class StudentModel extends Model
{
    protected $table = 'students_detail';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'name',
        'email',
        'phone',
        'course',
    ];
}

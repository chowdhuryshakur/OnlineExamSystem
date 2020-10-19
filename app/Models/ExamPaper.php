<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamPaper extends Model
{
    public $table = 'exam_paper';
    protected $dates = ['created_at'];
    protected $primaryKey = 'exampaperid';
}

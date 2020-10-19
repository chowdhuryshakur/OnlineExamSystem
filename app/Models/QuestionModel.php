<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Exam;

class QuestionModel extends Model
{
    public $table = 'questions';
    protected $dates = ['created_at'];
    protected $primaryKey = 'questionid';
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }



}

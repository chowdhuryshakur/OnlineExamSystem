<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\QuestionModel;
use App\Models\User;

class Exam extends Model
{
    protected $dates = ['created_at'];
    protected $primaryKey = 'exam_id';

    public function questions()
    {
        return $this->hasMany(QuestionModel::class);
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $guarded = []; 

    public function options()
    {
        return $this->hasMany('App\Models\Option', 'question_id', 'id');
    }

    public function correctOption()
    {
        return $this->hasOne('App\Models\CorrectOption', 'question_id', 'id');
    }

}

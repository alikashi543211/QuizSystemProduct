<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorrectOption extends Model
{
    use HasFactory;

    protected $guarded = []; 

    public function option()
    {
        return $this->belongsTo('App\Models\Option', 'option_id', 'id');
    }

    public function question()
    {
        return $this->belongsTo('App\Models\Question', 'question_id', 'id');
    }

}

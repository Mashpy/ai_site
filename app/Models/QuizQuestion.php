<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizQuestion extends Model
{

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
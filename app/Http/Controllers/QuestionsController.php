<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionsController extends Controller
{
    public function showList(Type $var = null)
    {
        
        return Question::find(1);
    }
}

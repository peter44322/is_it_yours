<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class answer extends Model
{
    private $question ;
    public function get_question()
    {
        $this->question = question::find($this->question_id);
        return $this->question;
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    private $post;
    private $answers;
    function get_post(){
        $this->post = post::find($this->post_id);
        return $this->post;
    }

    function get_answers(){
        $this->answers = answer::where('question_id',$this->id)->get();
        return $this->answers;
    }
}

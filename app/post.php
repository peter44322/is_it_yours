<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    private  $comments ;
    private $questions ;
    private $user;

    function get_comments(){
        $this->comments = comment::where('post_id',$this->id)->get();
        return $this->comments;
    }

    public function get_questions()
    {
        $this->questions = question::where('post_id',$this->id)->get;
        return $this->questions;
    }

    public function get_user()
    {
        $this->user = User::find($this->user_id);
        return $this->user;
    }


}

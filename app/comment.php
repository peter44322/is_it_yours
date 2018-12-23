<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    private $post;
    function get_post(){
        $this->post = post::find($this->post_id);
        return $this->post;
    }
}

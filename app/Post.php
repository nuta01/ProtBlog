<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function getData(){
        return $this->user_id . ':' . $this->post_user_id . ':' . $this->text;
    }

}

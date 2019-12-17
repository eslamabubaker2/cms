<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag_news extends Model
{
    public function getName()
    {
        $tag=Tags::find($this->tag_id);
        return $tag->name;
    }
}

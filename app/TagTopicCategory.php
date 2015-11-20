<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagTopicCategory extends Model
{
    //

    protected  $table = 'fs_tag_topic_category';

    protected  $fillable = ['name'];

    /**
     * Get the comments for the blog post.
     */
    public function tagTopic()
    {
        return $this->hasMany('App\TogTopic');
    }


}

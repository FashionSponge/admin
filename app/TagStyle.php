<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagStyle extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fs_tag_style';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    public static function style() {
        return array(
            'Chick',
            'Preppy',
            'Bohemian',
            'Casual',
            'Test'
        );
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagSeason extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fs_tag_season';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    public static function season() {
        return array(
            'Summer',
            'Spring',
            'Winter',
            'Snow',
        );
    }
}

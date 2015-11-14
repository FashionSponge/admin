<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagPrice extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fs_tag_price';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    public static function price() {
        return array(
            '$100',
            '$200',
            '$300',
            '$400',
            '$500'
        );
    }
}

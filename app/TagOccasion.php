<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagOccasion extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fs_tag_occasion';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    public static function occasion() {
        return array(
            'Conference',
            'College',
            'Cocktail'
        );
    }
}

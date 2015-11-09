<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagMaterial extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fs_tag_material';

    protected $fillable = ['name'];

    public static function material()
    {
       return array(
            'Cotton',
            'Rayon',
            'Chambray',
            'Denim',
            'Knit',
            'Silk',
            'Satin',
            'Linen',
            'Wool',
            'Flannell',
            'Snake',
            'Gator',
            'Polyester',
            'Nylon',
            'Spandex',
            'Leather',
            'Corduroy',
            'Fur',
            'Felt',
            'Suede',
            'Lace',
            'Hemp',
            'Fleece',
            'Batiste',
            'Velvet',
            'Chiffon',
            'Crepe',
            'Organza',
            'Taffeta',
            'Tweed',
            'Voile',
            'Pleather',
            'Faux Fur',
            'Faux Leather'
        );
    }
}

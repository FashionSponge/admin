<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagPattern extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fs_tag_pattern';


    protected $fillable = ['name'];

    public static function pattern()
    {
        return array(
            'Abstract',
            'Argyle',
            'Camouflage',
            'Stripes',
            'Checkered',
            'Plaid',
            'Floral',
            'Tie Dye',
            'Geometric',
            'Graphic',
            'Cheetah',
            'Snake',
            'Houndstooth',
            'Paisley',
            'Damask',
            'Chevron',
            'Zebra',
            'Polka Dots',
            'Fair Isle',
            'Fleck',
            'Mosaic',
            'Pinstripe',
            'Speckle',
            'Spots',
            'Swirl',
            'Tartan',
            'Zigzag',
            'Gingham',
            'Tartan Plaid',
            'Shepherds ',
            'Windowpane Check',
            'Graph Check',
            'Tattersall',
            'Mini Check',
            'Tiger',
            'Lion',
            'Cow',
            'Leopard'
        );
    }
}

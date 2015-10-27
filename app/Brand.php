<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fs_brands';

    /**
     * Primary key set
     */
    protected $primaryKey = 'bno';

    /**
     * @param $category
     */
    public static function getLastUploadBnoByBCNO($bcno) {
        $brand =  Brand::where('bcno', $bcno)->orderBy('bno', 'desc')->take(1)->get()->toArray();
        return ( !empty($brand[0]['bno']) ) ? $brand[0]['bno'] : 744;
    }
}

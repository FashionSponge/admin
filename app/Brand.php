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

}
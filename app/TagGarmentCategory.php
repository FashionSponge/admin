<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagGarmentCategory extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fs_tag_garment_category';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * Get the comments for the blog post.
     */
    public function tagGarmentSubCategory()
    {
        return $this->hasMany('App\TagGarmentSubCategory', 'garment_category_id');
    }

}

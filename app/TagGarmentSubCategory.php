<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagGarmentSubCategory extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fs_tag_garment_subcategory';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'garment_category_id'];



    /**
     * Get the user that owns the phone.
     */
    public function tagGarmentCategory()
    {
        return $this->belongsTo('App\TagGarmentCategory', 'garment_category_id');
    }

    /**
     * Get the comments for the blog post.
     */
    public function tagGarment()
    {
        return $this->hasMany('App\TagGarment');
    }



}

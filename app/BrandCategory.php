<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BrandCategory extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fs_brand_category';

    /**
     * Primary key set
     */
    protected $primaryKey = 'bcno';


    public static function getBrandIdByCategory($categoryName='Chic') {
        $categories = BrandCategory::where('bc_name', $categoryName)->take(1)->get()->toArray();
        return  $categories[0]['bcno'];
    }

    public static function getBrandIdByCategoryAndGender($categoryName='Chic', $gender='male') {
        $categories = BrandCategory::where('bc_name', $categoryName)->where('gender', $gender)->take(1)->get()->toArray();
        return  $categories[0]['bcno'];
    }

    public static function getBrandCategory($gender='male') {
        $categories = BrandCategory::where('gender', $gender)->take(100)->get();
        return $categories;
    }
}

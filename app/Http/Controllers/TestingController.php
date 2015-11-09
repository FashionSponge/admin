<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TagColor;
use App\TagGarment;
use App\TagGarmentCategory;
use App\TagGarmentSubCategory;
use App\TagMaterial;
use App\TagPattern;
use App\TagPrice;
use App\TagUrl;

class TestingController extends Controller
{
    public function insert(){
        $this->insertColor();
        $this->insertPattern();
        $this->insertMaterial();
        $this->insertGarment();
    }

    private function insertColor() {

        foreach (TagColor::colors() as $hex => $colorName) {

            if(!TagColor::firstOrCreate(['name'=>$colorName, 'hex'=>$hex])){
                echo "color added name =>$colorName,  hex =>$hex <br> ";
            }
            else {
                echo "color exist name =>$colorName,  hex =>$hex <br> ";
            }

        }

    }
    private function insertPattern()
    {

        foreach(TagPattern::pattern() as $key => $item) {
            if(!TagPattern::firstOrCreate(['name'=>$item])) {
                echo "pattern added name =>$item <br> ";
            }
            else {
                echo "pattern exist name =>$item <br> ";
            }
        }
    }
    private function insertMaterial() {
        foreach(TagMaterial::material() as $key => $item) {
            if(!TagMaterial::firstOrCreate(['name'=>$item])){
                echo "material inserted $item <br>";
            } else {
                echo "material exist $item <br>";
            }
        }
    }
    private function insertGarment() {
        foreach(TagGarment::garment() as $category => $subCategories)  {
            //insert garment category
            $categoryDb = TagGarmentCategory::firstOrCreate(['name' => $category]);
            echo "Category name = $category,  id = " . $categoryDb->id;
            if(!empty($categoryDb->id)) {
                echo " category  exist $category<br> ";
            }

            // echo "|$category|<br>";
            foreach($subCategories as $subCategory => $garments) {
                // echo "- subCategory -<br>";
                // insert garment sub category
                $subCategoryDb = TagGarmentSubCategory::firstOrCreate(['name' => $subCategory, 'garment_category_id'=>$categoryDb->id]);
                if(!empty($subCategoryDb->id)) {
                    echo " sub category  exist $subCategory<br> ";
                }



                // echo "sub category id " . $subCategoryDb->id . '<br>';
                foreach($garments as $key => $garment) {
                    // echo "$garment<br>";
                    // insert garment
                    // echo "$category : $subCategory : $garment <br>";
                    if(!TagGarment::firstOrCreate(['name' => $garment, 'garment_subcategory_id'=>$subCategoryDb->id])){
                        echo "<b>garment inserted $garment </b><br> ";
                    } else {
                        echo "<em>garment exist $garment </em><br> ";
                    }

                }
            }
        }
    }
}

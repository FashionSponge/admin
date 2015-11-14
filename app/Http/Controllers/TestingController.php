<?php

namespace App\Http\Controllers;

use App\TagOccasion;
use App\TagSeason;
use App\TagStyle;
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
        $this->insertUrl();
        $this->insertStyle();
        $this->insertSeason();
        $this->insertOccasion();
        $this->insertPrice();
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
    private function insertUrl() {
        foreach(TagUrl::url() as $key => $item) {
            if(!TagUrl::firstOrCreate(['name'=>$item])) {
                echo "url added name =>$item <br> ";
            }
            else {
                echo "url exist name =>$item <br> ";
            }
        }
    }
    private function insertStyle(){
        foreach(TagStyle::style() as $key => $item) {
            if(!TagStyle::firstOrCreate(['name'=>$item])) {
                echo "style added name =>$item <br> ";
            }
            else {
                echo "style exist name =>$item <br> ";
            }
        }
    }
    private function insertSeason(){
        foreach(TagSeason::season() as $key => $item) {
            if(!TagSeason::firstOrCreate(['name'=>$item])) {
                echo "season added name =>$item <br> ";
            }
            else {
                echo "season exist name =>$item <br> ";
            }
        }
    }
    private function insertOccasion(){
        foreach(TagOccasion::occasion() as $key => $item) {
            if(!TagOccasion::firstOrCreate(['name'=>$item])) {
                echo "occasion added name =>$item <br> ";
            }
            else {
                echo "occasion exist name =>$item <br> ";
            }
        }
    }
    private function insertPrice(){
        foreach(TagPrice::price() as $key => $item) {
            if(!TagPrice::firstOrCreate(['name'=>$item])) {
                echo "occasion added name =>$item <br> ";
            }
            else {
                echo "occasion exist name =>$item <br> ";
            }
        }
    }

}

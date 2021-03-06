<?php

namespace App\Http\Controllers;

use App\TagOccasion;
use App\TagSeason;
use App\TagStyle;
use App\TagTopicCategory;
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
use App\TagTopic;

class TestingController extends Controller
{
    public function insert(){

        $this->insertTopic();
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

    private function insertTopic() {

             foreach(TagTopic::topic() as $topicCategoryName => $topicArray ) {
                 echo "$topicCategoryName <br>";

                 $topicCategory = TagTopicCategory::firstOrCreate(['name' => $topicCategoryName]);

                 foreach($topicArray as $key => $topic ) {
                    echo " $topic ";

                     if(!TagTopic::firstOrCreate(['name'=>$topic, 'topic_category_id'=>$topicCategory->id])){
                         echo " added name=>$topic,  topic_category_id =>$topicCategory <br> ";
                     }
                     else {
                         echo "exist name=>$topic,  topic_category_id =>$topicCategory <br> ";;
                     }
                 }
                 echo "<br>";
             }
    }

    private function insertColor() 
    {

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
    private function insertMaterial() 
    {
        foreach(TagMaterial::material() as $key => $item) {
            if(!TagMaterial::firstOrCreate(['name'=>$item])){
                echo "material inserted $item <br>";
            } else {
                echo "material exist $item <br>";
            }
        }
    }
    private function insertGarment() 
    { 


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
                foreach($garments as $garment1 => $genderAndPlusBlogger) {

                    $garment = ''; 
                    $gender = ''; 
                    $plus_size = '';  

                    if(is_array($genderAndPlusBlogger)) { 
                        // echo "garment = $garment1 gender " . $genderAndPlusBlogger['gender'] . ' plus size blogger = ' . $genderAndPlusBlogger['plus_size'] . '<br>';
                        $garment = $garment1;
                        $gender =  (!empty($genderAndPlusBlogger['gender'])) ? $genderAndPlusBlogger['gender'] : '';
                        $plus_size = (!empty($genderAndPlusBlogger['plus_size'])) ? $genderAndPlusBlogger['plus_size'] : '';  
                    } else { 
                        $garment = $genderAndPlusBlogger;
                    } 

                    

                    echo " gender $gender garment $garment plus_size $plus_size <br>";

                     
                    if(!TagGarment::firstOrCreate(['name' => $garment, 'garment_subcategory_id'=>$subCategoryDb->id, 'gender'=>$gender, 'plus_size'=>$plus_size])){
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
    private function insertStyle()
    {
        foreach(TagStyle::style() as $key => $item) {
            if(!TagStyle::firstOrCreate(['name'=>$item])) {
                echo "style added name =>$item <br> ";
            }
            else {
                echo "style exist name =>$item <br> ";
            }
        }
    }
    private function insertSeason()
    {
        foreach(TagSeason::season() as $key => $item) {
            if(!TagSeason::firstOrCreate(['name'=>$item])) {
                echo "season added name =>$item <br> ";
            }
            else {
                echo "season exist name =>$item <br> ";
            }
        }
    }
    private function insertOccasion()
    {
        foreach(TagOccasion::occasion() as $key => $item) {
            if(!TagOccasion::firstOrCreate(['name'=>$item])) {
                echo "occasion added name =>$item <br> ";
            }
            else {
                echo "occasion exist name =>$item <br> ";
            }
        }
    }
    private function insertPrice()
    {
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

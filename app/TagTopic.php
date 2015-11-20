<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagTopic extends Model
{
    //

    protected $table = 'fs_tag_topic';

    protected  $fillable = ['name', 'topic_category_id'];

    /**
     * Get the user that owns the phone.
     */
    public function tagGarmentSubCategory()
    {
        return $this->belongsTo('App\TagTopicCategory', 'garment_subcategory_id');
    }

    public static function topic() {
        return array(
            'Beauty'=> array('Beauty Book Review', 'Beauty Event', 'Beauty Workshop', 'Beauty Recipe', 'Celebrity Hair', 'Celebrity Makeup', 'Celebrity Nails', 'Celebrity Skin Care', 'Eye of the day', 'Face of The Day', 'Hair Tutorial', 'Hair Review', 'Nails Tutorial', 'Lip of the day', 'Makeup Haul', 'Makeup Review', 'Makeup Sale', 'Makeup Tool Review', 'Makeup Tutorial', 'Product Comparison ', 'Skincare Review', 'Hair', 'Nails', 'Make up', 'Skincare', 'Fragrance', 'Celebrity & Influencer  ', 'Fitness ', 'Diet & Nutrition', 'Cosmetic Treatment', 'Product Review', 'Product Haul', 'Make Sale', 'Beauty Event', 'Shopping Tips'),
            'Entertainment'=> array( 'Art ', 'Book', 'Celebrity Gossip', 'Concert', 'Festival', 'Movie ', 'Music', 'Television Show'),
            'Fashion'=> array('Celebrity ', 'Designer', 'DIY Fashion', 'Fashion Event', 'Fashion News', 'Fashion Photography', 'Mens Fashion', 'Product Review', 'OOTD ', 'Shopping', 'Store', 'Street Style', 'Styling Tip', 'Trends'),
            'Lifestyle'=> array('Automobile', 'Business', 'Cooking ', 'DIY & Crafts', 'Entertaining', 'Family & Friends', 'Food & Drinks', 'Health', 'Home', 'Money', 'Travel', 'Work'),
        );
    }
}

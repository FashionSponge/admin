<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagGarment extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fs_tag_garment';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'garment_subcategory_id'];


    /**
     * Get the user that owns the phone.
     */
    public function tagGarmentSubCategory()
    {
        return $this->belongsTo('App\tagGarmentSubCategory', 'garment_subcategory_id');
    }

    public static function garment() {
        return array(
            'clothing'=> array(
                'pants' => array(
                    'The great',
                    'Jesus pants',
                    'Cargo Pants',
                    'Cropped Pants',
                    'Full Length Pants',
                    'Harem Pants',
                    'Leggings',
                    'Skinny Pants',
                    'Straight-Leg Pants',
                    'Wide-Leg Pants'
                ),
                'jackets' => array(
                    'Casual Jackets',
                    'Denim Jackets',
                    'Formal Jackets',
                    'Fur Jackets',
                    'Leather Jackets',
                    'Parka Jackets',
                    'Waistcoats'
                ),
                'coats' => array(
                    'Capes',
                    'Fur Coats',
                    'Long Coats',
                    'Parka Coats',
                    'Short Coats',
                    'Trench Coats'
                ),
                'jeans' => array(
                    'Bootcut Jeans',
                    'Cropped Jeans',
                    'Flared Jeans',
                    'Skinny Jeans',
                    'Straight Jeans',
                    'Wide-Leg Jeans'
                ),
                'Dresses' => array(
                    'Casual Dresses',
                    'Cocktail Dresses',
                    'Formal Dresses',
                    'Gowns',
                    'Maxi Dresses',
                    'Mini Dresses'
                ),
                'Tops' => array(
                    'Blouses',
                    'Long Sleeved Tops',
                    'Shirts',
                    'Short Sleeve Tops',
                    'Sleeveless Tops',
                    'T-Shirts'
                ),
                'Knitwear' => array(
                    'Cardigans',
                    'Ponchos',
                    'Sleeveless Sweaters',
                    'Sweaters',
                    'Turtlenecks',
                    'Zipped Sweaters'
                ),
                'Shorts' => array(
                    'Bermuda Shorts',
                    'Cargo Shorts',
                    'Denim Shorts',
                    'Formal Shorts',
                    'Knee Length Shorts',
                    'Mini Shorts'
                ),
                'Lingerie' => array(
                    'Bodysuits',
                    'Bras',
                    'Camisoles',
                    'Corsetry',
                    'Panties',
                    'Sets'
                ),
                'Beachwear' => array(
                    'Bikinis',
                    'Kaftans',
                    'One-Piece Swimsuits',
                    'Sarongs',
                    'Towels'
                ),
                'Sweats' => array(
                    'Hoodies',
                    'Sweatpants',
                    'Sweatshirts',
                    'Tracksuits'
                ),
                'Skirts' => array(
                    'Knee Length Skirts',
                    'Maxi Skirts',
                    'Mid Length Skirts',
                    'Mini Skirts'
                ),
                'Nightwear' => array(
                    'Nightgowns',
                    'Pyjamas',
                    'Robes',
                ),
                'Hosiery' => array(
                    'Socks',
                    'Stockings',
                    'Tights'
                ),
                'Suits' => array(
                    'Pant Suits',
                    'Skirt Suits'
                ),
                'Jumpsuits' => array(
                    'Full Length Jumpsuits',
                    'Playsuits'
                )
            ),
            'shoes'=> array(
                'boots' => array(
                    'Ankle Boots',
                    'Flat Boots',
                    'Heel Boots',
                    'Knee Boots',
                    'Mid-Calf Boots',
                    'Over-The-Knee Boots',
                    'Sandal Boots',
                    'Wedge Boots',
                    'Wellington Boots'
                ),
                'heels' => array(
                    'Clogs',
                    'High Heels',
                    'Low Heels',
                    'Mules',
                    'Platform Heels',
                    'Pumps',
                    'Sandal Heels',
                    'Wedge Sandals',
                    'Wedge Shoes'
                ),
                'flat' => array(
                    'Ballerinas',
                    'Espadrilles',
                    'Flat Sandals',
                    'Flip-Flops',
                    'Lace-Ups',
                    'Loafers',
                    'Slippers'
                ),
                'wedges' => array(
                    'Wedge Boots',
                    'Wedge Sandals',
                    'Wedge Shoes'
                ),
                'sneakers' => array(
                    'High-Top Sneakers',
                    'Low-Top Sneakers'
                )
            ),
            'accessories'=> array(
                'Cases' => array(),
                'Sunglasses' => array(),
                'Belts' => array(),
                'Gloves' => array(),
                'Hair' => array(),
                'Scarves' => array(),
                'Wallets' => array(),
                'Watches' => array(),
                'Hats' => array(),
                'Umbrellas' => array()
            ),
            'bags'=> array(
                'Shoulder Bags' => array(),
                'Backpacks' => array(),
                'Clutches' => array(),
                'Luggage' => array(),
                'Briefcases' => array(),
                'Totes' => array()
            ),
            'jewelry'=> array(
                'Brooches' => array(),
                'Bracelets' => array(),
                'Earrings' => array(),
                'Necklaces' => array(),
                'Rings' => array()
            )
        );
    }

}

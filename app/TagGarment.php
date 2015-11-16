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
    protected $fillable = ['name', 'garment_subcategory_id', 'gender', 'plus_size'];


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
                    'Straight'  => array('gender' => 'female'),
                    'Skinny' => array('gender' => 'female'),
                    'Boot-Cut' => array('gender' => 'female'),
                    'Flare' => array('gender' => 'female'),
                    'Wide Leg' => array('gender' => 'female'),
                    'Pegged' => array('gender' => 'female'),
                    'Stirrup' => array('gender' => 'female'),
                    '5-Pocket' => array('gender' => 'female'),
                    'Bush Pants' => array('gender' => 'female'),
                    'Cargo Pants' => array('gender' => 'female'),
                    'Sailor Pants' => array('gender' => 'female'),
                    'Jodhpurs' => array('gender' => 'female'),
                    'Sweat Pants' => array('gender' => 'female'),
                    'Harem' => array('gender' => 'female'),
                    'Palazzo' => array('gender' => 'female'),
                    'Overall' => array('gender' => 'female'),
                    'Jumpsuit' => array('gender' => 'female')  
                ),
                'jackets' => array(
                    'Casual Jackets'=>array('gender'=>'female', 'plus_size'=>''),
                    'Denim Jackets'=>array('gender'=>'female', 'plus_size'=>''),
                    'Formal Jackets'=>array('gender'=>'female', 'plus_size'=>''),
                    'Fur Jackets'=>array('gender'=>'female', 'plus_size'=>''),
                    'Leather Jackets'=>array('gender'=>'female', 'plus_size'=>''),
                    'Parka Jackets'=>array('gender'=>'female', 'plus_size'=>''),
                    'Waistcoats'=>array('gender'=>'female', 'plus_size'=>''),
                ),
                'coats' => array(
                    'Capes'=>array('gender'=>'female', 'plus_size'=>''),
                    'Fur Coats'=>array('gender'=>'female', 'plus_size'=>''),
                    'Long Coats'=>array('gender'=>'female', 'plus_size'=>''),
                    'Parka Coats'=>array('gender'=>'female', 'plus_size'=>''),
                    'Short Coats'=>array('gender'=>'female', 'plus_size'=>''),
                    'Trench Coats'=>array('gender'=>'female', 'plus_size'=>''),
                ),
                'jeans' => array(
                    'Bootcut Jeans'=>array('gender'=>'female', 'plus_size'=>'yes'),
                    'Cropped Jeans'=>array('gender'=>'female', 'plus_size'=>''),
                    'Flared Jeans'=>array('gender'=>'female', 'plus_size'=>''),
                    'Skinny Jeans'=>array('gender'=>'female', 'plus_size'=>''),
                    'Straight Jeans'=>array('gender'=>'female', 'plus_size'=>''),
                    'Wide-Leg Jeans'=>array('gender'=>'female', 'plus_size'=>''),
                ),
                'Dresses' => array(
                    'Trapeze' => array('gender' => 'female'),
                    'Triangle' => array('gender' => 'female'),
                    'Bell' => array('gender' => 'female'),
                    'Balloon' => array('gender' => 'female'),
                    'Empire' => array('gender' => 'female'),
                    'Charleston' => array('gender' => 'female'),
                    'Princesse' => array('gender' => 'female'),
                    'Shirtdress' => array('gender' => 'female'),
                    'A-Line' => array('gender' => 'female'),
                    'Blouson' => array('gender' => 'female'),
                    'Shift' => array('gender' => 'female'),
                    'Tent' => array('gender' => 'female'),
                    'Sheath' => array('gender' => 'female'),
                    'High Waist' => array('gender' => 'female'),
                    'Drop Waist' => array('gender' => 'female'),
                    'Tunic' => array('gender' => 'female'),
                    'Asymmetrical' => array('gender' => 'female'),
                    'Open Back' => array('gender' => 'female'),
                    'X Cross Back' => array('gender' => 'female'),
                    'Closed Back' => array('gender' => 'female'),
                    'U Shape Back' => array('gender' => 'female'),
                    'V-Shape Back' => array('gender' => 'female'),
                    'Bare Back' => array('gender' => 'female'),
                    'Bateau Neck' => array('gender' => 'female'),
                    'Cowl Neck' => array('gender' => 'female'),
                    'Dipped Neck' => array('gender' => 'female'),
                    'Halter Neck' => array('gender' => 'female'),
                    'Plunging Neck' => array('gender' => 'female'),
                    'Portrait Neck' => array('gender' => 'female'),
                    'Scalloped Neck' => array('gender' => 'female'),
                    'Scoop Neck' => array('gender' => 'female'),
                    'Sweetheart Neck' => array('gender' => 'female'),
                    'Square Neck' => array('gender' => 'female'),
                    'V-Neck' => array('gender' => 'female'),
                    'One Shoulder' => array('gender' => 'female'),
                    'Off The Shoulder' => array('gender' => 'female'),
                    'High Neck' => array('gender' => 'female'),
                    'Queen Ann' => array('gender' => 'female'),
                    'Mermaid' => array('gender' => 'female'),
                    'Ball Gown' => array('gender' => 'female'),
                    'Sheath' => array('gender' => 'female'),
                    'Trumpet' => array('gender' => 'female'),
                    'Strapless' => array('gender' => 'female'),
                    'Sleeveless' => array('gender' => 'female'),
                    'Cap Sleeve' => array('gender' => 'female'),
                    '3/4 Sleeve' => array('gender' => 'female'),
                    'Long Sleeve' => array('gender' => 'female'),
                    'Spaghetti Straps' => array('gender' => 'female') 
                ),
                'Tops' => array(
                    'Oxford'  => array('gender' => 'female'),
                    'Rolled Sleeves' => array('gender' => 'female'),
                    'Western' => array('gender' => 'female'),
                    'Knot Front' => array('gender' => 'female'),
                    'Tunic' => array('gender' => 'female'),
                    'Drawstring' => array('gender' => 'female'),
                    'Wrap' => array('gender' => 'female'),
                    'Peasant' => array('gender' => 'female'),
                    'Corset' => array('gender' => 'female'),
                    'Sweetheart Neck' => array('gender' => 'female'),
                    'Asymmetrical' => array('gender' => 'female'),
                    'Square Neck' => array('gender' => 'female'),
                    'Portrait Neck' => array('gender' => 'female'),
                    'Jewel Neck' => array('gender' => 'female'),
                    'Mandarin' => array('gender' => 'female'),
                    'Jabot' => array('gender' => 'female'),
                    'Puffed Sleeve' => array('gender' => 'female'),
                    'Balloon Sleeve' => array('gender' => 'female'),
                    'Flutter Sleeve' => array('gender' => 'female'),
                    'Split Sleeve' => array('gender' => 'female'),
                    'Cut Out Shoulder' => array('gender' => 'female'),
                    'Turtle Neck' => array('gender' => 'female'),
                    'Strapless' => array('gender' => 'female'),
                    'V-Neck' => array('gender' => 'female'),
                    'Scoop Neck' => array('gender' => 'female'),
                    'Crew Neck' => array('gender' => 'female'),
                    'Crowl Neck' => array('gender' => 'female'),
                    'Boat Neck' => array('gender' => 'female'),
                    'One Shoulder' => array('gender' => 'female'),
                    'Jewel Neck' => array('gender' => 'female'),
                    'Surplice Neck' => array('gender' => 'female'),
                    'Square Neck' => array('gender' => 'female'),
                    'Halter Neck' => array('gender' => 'female'),
                    'Empire Neck' => array('gender' => 'female'),
                    'Queen Anne' => array('gender' => 'female'),
                    'Bateau' => array('gender' => 'female'),
                    'Sabrina' => array('gender' => 'female'),
                    'Portrait' => array('gender' => 'female'),
                    'Long Sleeve' => array('gender' => 'female'),
                    'Short Sleeve' => array('gender' => 'female'),
                    'Cap Sleeve' => array('gender' => 'female'),
                    'Puff Sleeve' => array('gender' => 'female'),
                    'Bishop Sleeve' => array('gender' => 'female'),
                    'Roll Up Sleeve' => array('gender' => 'female'),
                    '3-4 Sleeves' => array('gender' => 'female'),
                    'Sleeve Less' => array('gender' => 'female'),
                    'Half Sleeve' => array('gender' => 'female'),
                    'Bell Sleeve' => array('gender' => 'female')   
                ),
                'Knitwear' => array(
                    'Cardigans'=>array('gender'=>'female', 'plus_size'=>''),
                    'Ponchos'=>array('gender'=>'female', 'plus_size'=>''),
                    'Sleeveless Sweaters'=>array('gender'=>'female', 'plus_size'=>''),
                    'Sweaters'=>array('gender'=>'female', 'plus_size'=>''),
                    'Turtlenecks'=>array('gender'=>'female', 'plus_size'=>''),
                    'Zipped Sweaters'=>array('gender'=>'female', 'plus_size'=>''),
                ),
                'Shorts' => array(
                    'Bermuda Shorts'=>array('gender'=>'female', 'plus_size'=>''),
                    'Cargo Shorts'=>array('gender'=>'female', 'plus_size'=>''),
                    'Denim Shorts'=>array('gender'=>'female', 'plus_size'=>''),
                    'Formal Shorts'=>array('gender'=>'female', 'plus_size'=>''),
                    'Knee Length Shorts'=>array('gender'=>'female', 'plus_size'=>''),
                    'Mini Shorts'
                ),
                'Lingerie' => array(
                    'Bodysuits'=>array('gender'=>'female', 'plus_size'=>''),
                    'Bras'=>array('gender'=>'female', 'plus_size'=>''),
                    'Camisoles'=>array('gender'=>'female', 'plus_size'=>''),
                    'Corsetry'=>array('gender'=>'female', 'plus_size'=>''),
                    'Panties'=>array('gender'=>'female', 'plus_size'=>''),
                    'Sets'=>array('gender'=>'female', 'plus_size'=>'')
                ),
                'Beachwear' => array(
                    'Bikinis'=>array('gender'=>'female', 'plus_size'=>''),
                    'Kaftans'=>array('gender'=>'female', 'plus_size'=>''),
                    'One-Piece Swimsuits'=>array('gender'=>'female', 'plus_size'=>''),
                    'Sarongs'=>array('gender'=>'female', 'plus_size'=>''),
                    'Towels'=>array('gender'=>'female', 'plus_size'=>''),
                ),
                'Sweats' => array(
                    'Hoodies'=>array('gender'=>'female', 'plus_size'=>''),
                    'Sweatpants'=>array('gender'=>'female', 'plus_size'=>''),
                    'Sweatshirts'=>array('gender'=>'female', 'plus_size'=>''),
                    'Tracksuits'=>array('gender'=>'female', 'plus_size'=>''),
                ),
                'Skirts' => array(
                    'A-line' => array('gender' => 'female'),
                    'Circle' => array('gender' => 'female'),
                    'Accordion' => array('gender' => 'female'),
                    'Knife Pleated' => array('gender' => 'female'),
                    'Draped' => array('gender' => 'female'),
                    'Gypsy' => array('gender' => 'female'),
                    'Layered' => array('gender' => 'female'),
                    'Mermaid' => array('gender' => 'female'),
                    'Ruffled' => array('gender' => 'female'),
                    'Tube' => array('gender' => 'female'),
                    'Pencil' => array('gender' => 'female'),
                    'Mini' => array('gender' => 'female'),
                    'Wrap' => array('gender' => 'female'),
                    'Asymmetrical' => array('gender' => 'female'),
                    'Bubble' => array('gender' => 'female'),
                    'Godet' => array('gender' => 'female'),
                    'Tulip' => array('gender' => 'female'),
                    'Paneled' => array('gender' => 'female')
                ),
                'Nightwear' => array(
                    'Nightgowns'=>array('gender'=>'female', 'plus_size'=>''),
                    'Pyjamas'=>array('gender'=>'female', 'plus_size'=>''),
                    'Robes'=>array('gender'=>'female', 'plus_size'=>''),
                ),
                'Hosiery' => array(
                    'Socks'=>array('gender'=>'female', 'plus_size'=>''),
                    'Stockings'=>array('gender'=>'female', 'plus_size'=>''),
                    'Tights'
                ),
                'Suits' => array(
                    'Pant Suits'=>array('gender'=>'female', 'plus_size'=>''),
                    'Skirt Suits'=>array('gender'=>'female', 'plus_size'=>''),
                ),
                'Jumpsuits' => array(
                    'Full Length Jumpsuits'=>array('gender'=>'female', 'plus_size'=>''),
                    'Playsuits'=>array('gender'=>'female', 'plus_size'=>''),
                )
            ), 
            'shoes'=> array(
                'boots' => array(
                    'Rain Boot' => array('gender' => 'female'),
                    'Knee High Boot' => array('gender' => 'female'),
                    'Cowboy Boot' => array('gender' => 'female'),
                    'Chelsea Boot' => array('gender' => 'female'),
                    'Frye' => array('gender' => 'female'),
                    'Desert Boot' => array('gender' => 'female'),
                    'Thigh High Boot' => array('gender' => 'female'),
                    'Wellington Boot' => array('gender' => 'female'),
                    'Ugg Boot' => array('gender' => 'female'),
                    'Timberland Boot' => array('gender' => 'female'),
                    'Military Boot' => array('gender' => 'female') 
                ),
                'heels' => array(
                    'Clogs'=>array('gender'=>'female', 'plus_size'=>''),
                    'High Heels'=>array('gender'=>'female', 'plus_size'=>''),
                    'Low Heels'=>array('gender'=>'female', 'plus_size'=>''),
                    'Mules'=>array('gender'=>'female', 'plus_size'=>''),
                    'Platform Heels'=>array('gender'=>'female', 'plus_size'=>''),
                    'Pumps'=>array('gender'=>'female', 'plus_size'=>''),
                    'Sandal Heels'=>array('gender'=>'female', 'plus_size'=>''),
                    'Wedge Sandals'=>array('gender'=>'female', 'plus_size'=>''),
                    'Wedge Shoes'
                ),
                'flat' => array(
                    'Ballerinas'=>array('gender'=>'female', 'plus_size'=>''),
                    'Espadrilles'=>array('gender'=>'female', 'plus_size'=>''),
                    'Flat Sandals'=>array('gender'=>'female', 'plus_size'=>''),
                    'Flip-Flops'=>array('gender'=>'female', 'plus_size'=>''),
                    'Lace-Ups'=>array('gender'=>'female', 'plus_size'=>''),
                    'Loafers'=>array('gender'=>'female', 'plus_size'=>''),
                    'Slippers'
                ),
                'wedges' => array(
                    'Wedge Boots'=>array('gender'=>'female', 'plus_size'=>''),
                    'Wedge Sandals'=>array('gender'=>'female', 'plus_size'=>''),
                    'Wedge Shoes'=>array('gender'=>'female', 'plus_size'=>''),
                ),
                'sneakers' => array(
                    'High-Top Sneakers'=>array('gender'=>'female', 'plus_size'=>''),
                    'Low-Top Sneakers'=>array('gender'=>'male', 'plus_size'=>'')
                ),  
                'shoes'=> array(
                    'Oxford' => array('gender' => 'female'),
                    'Ballerina Flat' => array('gender' => 'female'),
                    'Espadrille' => array('gender' => 'female'),
                    'Slip-On' => array('gender' => 'female'),
                    'Monk' => array('gender' => 'female'),
                    'Dockside' => array('gender' => 'female'),
                    'Wedge' => array('gender' => 'female'),
                    'Jelly' => array('gender' => 'female'),
                    'Moccasin' => array('gender' => 'female'),
                    'Sneakers' => array('gender' => 'female'),
                    'Loafer' => array('gender' => 'female'),
                    'Mules' => array('gender' => 'female'),
                    'Clogs' => array('gender' => 'female'),
                    'Sligbacks' => array('gender' => 'female') 
                ), 
                'sandals' => array(
                    'Open Toe Sandal' => array('gender'=> 'female'),
                    'Strap Sandal' => array('gender'=> 'female'),
                    'Gladiator Sandal' => array('gender'=> 'female'),
                    'Thigh High Gladiator Sandal'  => array('gender'=> 'female') 
                ), 
                'heels' => array(
                    'Pump' => array('gender' => 'female'),
                    'Cone Heel' => array('gender' => 'female'),
                    'Peep Toe' => array('gender' => 'female'),
                    'Open Toe' => array('gender' => 'female'),
                    'Stiletto' => array('gender' => 'female'),
                    'Slingback' => array('gender' => 'female'),
                    'Kitten Heel' => array('gender' => 'female'),
                    'Chunky Heel' => array('gender' => 'female'),
                    'Spool' => array('gender' => 'female'),
                    'Platform' => array('gender' => 'female'),
                    'Mary Jane' => array('gender' => 'female'),
                    'T-Strap' => array('gender' => 'female'),
                    'D’orsay' => array('gender' => 'female'),
                    'Wedge' => array('gender' => 'female'),
                    'Scorpion' => array('gender' => 'female'),
                    'Ankle Strap' => array('gender' => 'female'),
                    'Rudy Slipper' => array('gender' => 'female'),
                    'Ankle High' => array('gender' => 'female'),
                    'Spool Heel' => array('gender' => 'female'),
                    'Platform' => array('gender' => 'female'),
                    'Scarpin' => array('gender' => 'female'),
                    'Bondage' => array('gender' => 'female'),
                    'Strap Heel' => array('gender' => 'female') 
                ) 

            ),
            'accessories'=> array(  
                'Belts or Suspender' => array(
                    'Casual'  => array('gender'=>'female'),
                    'Skinny' => array('gender'=>'female'),
                    'Formal Skinny' => array('gender'=>'female'),
                    'Formal' => array('gender'=>'female'),
                    'Woven' => array('gender'=>'female'),
                    'Buckel' => array('gender'=>'female'),
                    'Canvas' => array('gender'=>'female'),
                    'D-Ring' => array('gender'=>'female'),
                    'Studded' => array('gender'=>'female'),
                    'Beaded' => array('gender'=>'female'),
                    'Braces or Suspenders'  => array('gender'=>'female')
                ),
                'Glasses'=>array(

                    'Round Eye' => array('gender' => 'female'),
                    'Wayfarer' => array('gender' => 'female'),
                    'Pantos' => array('gender' => 'female'),
                    'Wrap' => array('gender' => 'female'),
                    'Shield' => array('gender' => 'female'),
                    'Square' => array('gender' => 'female'),
                    'Butterfly' => array('gender' => 'female'),
                    'Ful Vue' => array('gender' => 'female'),
                    'Cat Eye' => array('gender' => 'female'),
                    'Aviator' => array('gender' => 'female'),
                    'Clubmaster' => array('gender' => 'female'),
                    'Biker' => array('gender' => 'female'),
                    'Oval' => array('gender' => 'female'),
                    'Heart' => array('gender' => 'female'),
                    'Mirrored' => array('gender' => 'female'),
                    'Polarized' => array('gender' => 'female'),

                ),
                'Glove or Mitten'=>array(''),
                'Hats'=>array( 
                    'Baseball' => array('gender'=>'female'),
                    'Bowler' => array('gender'=>'female'),
                    'Cocktail' => array('gender'=>'female'),
                    'Fascinator' => array('gender'=>'female'),
                    'Homburg' => array('gender'=>'female'),
                    'Pillbox' => array('gender'=>'female'),
                    'Beanie' => array('gender'=>'female'),
                    'Bucker' => array('gender'=>'female'),
                    'Cowboy' => array('gender'=>'female'),
                    'Fedora' => array('gender'=>'female'),
                    'Newsboy' => array('gender'=>'female'),
                    'Trapper' => array('gender'=>'female'),
                    'Beret' => array('gender'=>'female'),
                    'Cloche' => array('gender'=>'female'),
                    'Deerstalker' => array('gender'=>'female'),
                    'Boater' => array('gender'=>'female'),
                    'Panama' => array('gender'=>'female'),
                    'Visor' => array('gender'=>'female'), 
                    'Sailor' => array('gender' => 'female'),
                    'Cartwheel' => array('gender' => 'female'),
                    'Turban' => array('gender' => 'female'),
                    'Capulet' => array('gender' => 'female'),
                    'Beret' => array('gender' => 'female'),
                    'Breton' => array('gender' => 'female'),
                    'Mushroom' => array('gender' => 'female'),
                    'Vagabond' => array('gender' => 'female') 
                ) 
            ),
            'bags'=> array(
                'Athletic Bag' => array('gender' => 'female'),
                'BackPack' => array('gender' => 'female'),
                'Baguette' => array('gender' => 'female'),
                'Barrel' => array('gender' => 'female'),
                'Bucket' => array('gender' => 'female'),
                'Canteen Bag' => array('gender' => 'female'),
                'Carpet Bag' => array('gender' => 'female'),
                'Clutch' => array('gender' => 'female'),
                'Covetable Bag' => array('gender' => 'female'),
                'Drawstring' => array('gender' => 'female'),
                'Duffel' => array('gender' => 'female'),
                'Envelope' => array('gender' => 'female'),
                'Flap' => array('gender' => 'female'),
                'Frame' => array('gender' => 'female'),
                'Half Moon Bag' => array('gender' => 'female'),
                'Hobo' => array('gender' => 'female'),
                'Messenger' => array('gender' => 'female'),
                'Minaudière' => array('gender' => 'female'),
                'Muff' => array('gender' => 'female'),
                'Pouch' => array('gender' => 'female'),
                'Safari Bag' => array('gender' => 'female'),
                'Saddle' => array('gender' => 'female'),
                'Satchel' => array('gender' => 'female'),
                'School Bag' => array('gender' => 'female'),
                'Shoulder' => array('gender' => 'female'),
                'Swagger' => array('gender' => 'female'),
                'Tote' => array('gender' => 'female'),
                'Quilted Bag' => array('gender' => 'female'),
                'Wristlet' => array('gender' => 'female'),
            ) 
        );
    }

}

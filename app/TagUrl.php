<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagUrl extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'fs_tag_url';

    protected $fillable = ['name'];

    public static function url() {
        return array(
            'http://www.google.com/',
            'http://www.facebook.com',
            'http://www.twitter.com',
            'http://www.tumblr.com',
            'http://www.instagram.com',
            'http://www.sadf.com',
            'http://www.sad2sf.com',
            'http://www.saddsf.com',
            'http://www.sqadf.com',
            'http://www.sadf321.com',
            'http://www.sadf43.com',
            'http://www.sadf12.com',
            'http://www.google.com/',
            'http://www.faceasdbook.com',
            'http://www.twitassdter.com',
            'http://www.tumb3lr.com',
            'http://www.insasdt33agram.com',
            'http://www.sadsdf.com',
            'http://www.sad323sf.com',
            'http://www.sad2asadf.com',
            'http://www.sadfasd321.com',
            'http://www.s2adf43.com',
            'http://www.sadadf12.com',
            'http://www.g2oogle.com/',
            'http://www.fa3dscsebook.com',
            'http://www.twwdseitter.com',
            'http://www.tuamblr.com',
            'http://www.indstagram.com',
            'http://www.saddf.com',
            'http://www.sasd2sf.com',
            'http://www.sadddsf.com',
            'http://www.sqadf.com',
            'http://www.saddfdd321.com',
            'http://www.saddf43.com',
            'http://www.sadsddf12.com',
            'http://www.sadsddf12Thisis-thelatest.com',


        );


    }
}

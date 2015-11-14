<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TagController extends Controller
{

    public function index()
    {

        return view('pages.tag.home');
    }

    public function color($test)
    {
        return 'test' . $test;
    }

    public function getGarment()
    {
        return 'garment';
    }

    public function getMaterial()
    {
        return 'material';
    }

    public function getPattern()
    {
        return 'pattern<br>';
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function tagCompose($item='pattern') {
        return view('pages.tag.compose', ['item'=>$item]);
    }
}

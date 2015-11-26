<?php

namespace App\Http\Controllers\Tag;
use App\BrandCategory;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Brand;
use Input;
use Image;
use Session;
use Files;
use File;

class BrandController extends Controller
{

    /**
     * Display a listing of the resource.
     * @param string $category
     * @param string $gender
     * @return \Illuminate\View\View
     */
    public function index($category='categories', $gender='male')
    {
        $brand = new Brand();

        // echo "category $category gender $gender <br>";

        /**
         * View all categories of the brand
         */
        if($category == 'categories') {
            return view('pages.brand.categories', [
                'brandCategoryMale' =>BrandCategory::getBrandCategory('male'),
                'brandCategoryFemale' =>BrandCategory::getBrandCategory('female'),
            ]);
        } else {
            $brands = Brand::
                where('bcno', BrandCategory::getBrandIdByCategoryAndGender($category, $gender))
                ->orderBy('bno', 'desc')
                ->paginate(5);
            $brands->setPath($gender)->fragment('fragment');

            return view('pages.tag.brand', ['pagination' =>  $brands]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //update item name
        foreach($request->get('tagItemName') as $id => $name):
            if(!empty($name)){
                $response = Brand::find($id);
                $response->bname = $name;
                $response->save();
            }
        endforeach;

        //update item gender
        foreach($request->get('tagItemGender') as $id => $gender):
            if(!empty($gender)) {
                $response = Brand::find($id);
                $response->gender = $gender;
                $response->save();
            }
        endforeach;

        //update item plus size
        foreach($request->get('tagItemPlusSize') as $id => $plus_size):
            if(!empty($plus_size)){
                $response = Brand::find($id);
                $response->plus_size = $plus_size;
                $response->save();
            }
        endforeach;


//        dd($request->all());


        //upload multiple image
        foreach (Input::file('tagItemFileName') as $key => $tempFile) {

            if(!empty($tempFile)) {

                //upload single image

                // $file->move(base_path().'/public/uploads/', $newname);

                $destinationPath = Session::get('imgSrcUploadsRead') . '/brands';  //'public/img/material';

                echo " dest = " . $destinationPath . '<br>';

                $files = Input::file('tagItemFileName')[$key];

                // echo $files->getClientOriginalName();

                $ext = $files->getClientOriginalExtension();

                $desPath = $destinationPath . '/' . $key. '_brand.' . $ext;

                if($files->move($destinationPath,  $key. '_brand.' . $ext)){
                    echo "image uploaded<br>";
                }

                // Resize using image intervention
                $img = Image::make($desPath)->resize(140, 140);

                $img->save($desPath);

            }
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destinationPath = Session::get('imgSrcUploadsRead') . '/brands/' . $id . '_brand.jpg';
        File::delete($destinationPath);
        return Brand::destroy($id);
    }
}

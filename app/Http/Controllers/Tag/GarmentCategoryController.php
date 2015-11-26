<?php

namespace App\Http\Controllers\Tag;

use App\TagGarment;
use App\TagGarmentCategory;
use App\TagGarmentSubCategory;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Session;
use Image;
use Files;
use File;

use  App\Http\Controllers\Tag;

class GarmentCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagination = TagGarmentCategory::orderBy('id', 'desc')->paginate(15);

        $pagination->setPath('garment-category');

        return view('pages.tag.garment-category', ['pagination' => $pagination]);
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
            $response = TagGarmentCategory::find($id);
            $response->name = $name;
            if($response->save()){
                echo "success update";
            } else {
                echo "failed update";
            }
        endforeach;

        ////upload multiple image
        foreach (Input::file('tagItemFileName') as $key => $tempFile) {

            if(!empty($tempFile)) {

                $destinationPath = Session::get('imgSrcUploadsRead') . '/garment_category';  //'public/img/material';

                $files = Input::file('tagItemFileName')[$key];

                $ext = $files->getClientOriginalExtension();

                $desPath = $destinationPath . '/' . $key. '.' . $ext;

                if($files->move($destinationPath, $key. '.' . $ext)){
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
        $garmentSubCategoryController = new Tag\GarmentSubCategoryController();
        $garmentController = new Tag\GarmentController();
        $tagGarmentCategories = TagGarmentCategory::find($id);

        //Querying Relations
        foreach ($tagGarmentCategories->tagGarmentSubCategory as $topic) {
            if($garmentSubCategoryController->destroy($topic->id)){
//                echo "sub category deleted id "  . $topic->id . " <br>";
            }
        }

        //delete category image
        $destinationPath = Session::get('imgSrcUploadsRead') . '/garment_category/' . $tagGarmentCategories->id . '.jpg';
        File::delete($destinationPath);

        //delete category from database
        return TagGarmentCategory::destroy($tagGarmentCategories->id);
    }

    //
    public function getSubCategory($id) {
        return '<option> value </option>';
    }
}

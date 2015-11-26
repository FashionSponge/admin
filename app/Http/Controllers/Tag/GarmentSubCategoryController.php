<?php

namespace App\Http\Controllers\Tag;

use App\TagGarment;
use App\TagGarmentSubCategory;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\TagGarmentCategory;

use Input;
use Session;
use Image;
use Files;
use File;



class GarmentSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show($category)
    {

        // $response = TagGarmentCategory::whereName('jewelry')->get()->toArray();
        // echo "name " . $response[0]['name'];

        $id = TagGarmentCategory::whereName($category)->get()->toArray()[0]['id'];

        //  echo "coolr $category <br>";

        $pagination = TagGarmentSubCategory::where('garment_category_id', $id)->orderBy('id', 'desc')->paginate(5);

        $pagination->setPath($category);

        return view('pages.tag.garment-sub-category', ['pagination' => $pagination]);

//        echo "id = $id <br>";
//
//        $garmentCategory = TagGarmentCategory::find($id);
//
//        // dd( $garmentCategory );
//
//        dd($garmentCategory->tagGarmentSubCategory()->name);
//
//        foreach ($garmentCategory as $category) {
//
//            dd($category->tagGarmentSubCategory());
//            echo " name = ". $category->tagGarmentSubCategory->name . '<br>';
//        }

        //
        //
        //        echo "coolr $category <br>";
        //
        //        $pagination = TagMaterial::orderBy('id', 'desc')->paginate(15);
        //
        //        $pagination->setPath('material');
        //
        //        return view('pages.tag.material', ['pagination' => $pagination]);

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
            $response = TagGarmentSubCategory::find($id);
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

                $destinationPath = Session::get('imgSrcUploadsRead') . '/garment_sub_category';  //'public/img/material';

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
        $topicCategories = TagGarmentSubCategory::find($id);

        //Querying Relations
        foreach ($topicCategories->tagGarment as $topic) {
            //delete topic image from folder
            $destinationPath = Session::get('imgSrcUploadsRead') . '/garment/' . $topic->id . '.jpg';
            File::delete($destinationPath);

            //delete topic from the database
            TagGarment::destroy($topic->id);
        }

        //delete category image
        $destinationPath = Session::get('imgSrcUploadsRead') . '/garment_sub_category/' . $topicCategories->id . '.jpg';
        File::delete($destinationPath);

        //delete category from database
        return TagGarmentSubCategory::destroy($id);
    }
}

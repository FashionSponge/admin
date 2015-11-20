<?php

namespace App\Http\Controllers\Tag;

use App\TagTopic;
use App\TagTopicCategory;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Image;
use Session;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category=null)
    {
        $id = TagTopicCategory::whereName($category)->get()->toArray()[0]['id'];

        $pagination = TagTopic::where('topic_category_id', $id)->orderBy('id', 'desc')->paginate(15);

        $pagination->setPath($category);

        return view('pages.tag.topic', ['pagination' => $pagination, 'category'=>$category]);
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


        echo "nice <br>";
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
                $response = TagTopic::find($id);
                $response->name = $name;
                $response->save();
            }
        endforeach;

        //update item gender
        foreach($request->get('tagItemGender') as $id => $gender):
            if(!empty($gender)) {
                $response = TagTopic::find($id);
                $response->gender = $gender;
                $response->save();
            }
        endforeach;

        //update item plus size
        foreach($request->get('tagItemPlusSize') as $id => $plus_size):
            if(!empty($plus_size)){
                $response = TagTopic::find($id);
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

                $destinationPath = Session::get('imgSrcUploadsRead') . '/topic';  //'public/img/material';

                echo " dest = " . $destinationPath . '<br>';

                $files = Input::file('tagItemFileName')[$key];

                // echo $files->getClientOriginalName();

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
        //
    }
}

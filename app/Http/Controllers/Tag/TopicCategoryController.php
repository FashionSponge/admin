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
use Files;
use File;

class TopicCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagination = TagTopicCategory::orderBy('id', 'desc')->paginate(15);

        $pagination->setPath('topic-category');

        return view('pages.tag.topic-category', ['pagination' => $pagination]);
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
            $response = TagTopicCategory::find($id);
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

                $destinationPath = Session::get('imgSrcUploadsRead') . '/topic_category';  //'public/img/material';

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
        $topicCategories = TagTopicCategory::find($id);

        //Querying Relations
        foreach ($topicCategories->tagTopic as $topic) {
            //delete topic image from folder
            $destinationPath = Session::get('imgSrcUploadsRead') . '/topic/' . $topic->id . '.jpg';
            File::delete($destinationPath);

            //delete topic from the database
            TagTopic::destroy($topic->id);
        }

        //delete category image
        $destinationPath = Session::get('imgSrcUploadsRead') . '/topic_category/' . $topicCategories->id . '.jpg';
        File::delete($destinationPath);

        //delete category from database
        return TagTopicCategory::destroy($id);
    }
}

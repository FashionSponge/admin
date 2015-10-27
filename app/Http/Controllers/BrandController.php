<?php

namespace App\Http\Controllers;
use App\BrandCategory;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Brand;


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

        /**
         * View all categories of the brand
         */
        if($category == 'categories') {
            return view('pages.brand.categories', [
                'brandCategoryMale' =>BrandCategory::getBrandCategory('male'),
                'brandCategoryFemale' =>BrandCategory::getBrandCategory('female'),
            ]);
        } else {
            $brands = $brand
                ->where('visible', 2)
                ->where('bcno', BrandCategory::getBrandIdByCategoryAndGender($category, $gender))
                ->orderBy('bno', 'desc')
                ->paginate(5);
            $brands->setPath($gender)->fragment('fragment');
            return view('pages.brand.brand', ['brands' =>  $brands]);
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
        //
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

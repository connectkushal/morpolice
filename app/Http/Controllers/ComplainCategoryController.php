<?php

namespace App\Http\Controllers;

use App\ComplainCategory;
use App\ComplainSubcategory;

use Illuminate\Http\Request;

class ComplainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if( \Request::isJson()){
            $categories = ComplainCategory::with('subcategories')->get();
            return $categories;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = \App\ComplainCategory::with('subcategories')->get();

        return view("admin.complain.create_category", compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $newCategory = $request->validate([
            'category' => 'required|unique:complain_categories,name',
        ],
        [
            'category.unique' => 'Error: The category name already exists'
        ]);
        $newCategory['name'] = $newCategory['category'];
        unset($newCategory['category']);

        //dd($newCategory);
        ComplainCategory::create($newCategory);

        return redirect()->route('create-category-form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSubcategory(Request $request)
    {
        $subcategory = $request->validate([
            'subcategory' => 'required',
            'category_id' => 'required|not_in:0'            
        ], 
        [
            'category_id.not_in' => "Error: Please select a category"
        ]);

        $subcategory['name'] = $subcategory['subcategory'];
        unset($subcategory['subcategory']);

        $s = \App\ComplainSubcategory::create($subcategory);

        $isSelected = $subcategory['category_id'];
        //dd($isSelected);
        return redirect()->route('create-category-form', ['isSelected' => $subcategory['category_id']]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ComplainCategory  $complainCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ComplainCategory $complainCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ComplainCategory  $complainCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ComplainCategory $complainCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ComplainCategory  $complainCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ComplainCategory $complainCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ComplainCategory  $complainCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ComplainCategory $complainCategory)
    {
        //
    }
}

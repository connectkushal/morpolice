<?php

namespace App\Http\Controllers;

use App\Complain;
use Illuminate\Http\Request;

class ComplainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category = null, $subcategory = null)
    {
        // dd([$category, $subcategory]);
        // dd(request()->route()->parameters());
        if($category == null && $subcategory == null) {
            $complains = \App\Complain::all();
        }

        elseif($subcategory == null) {

            $complains = \App\ComplainCategory::where('name', $category)
                            ->with('complains')
                            ->get();
        }

        else {
            $complains = \App\ComplainSubcategory::where('name', $subcategory)
            ->with('complains')
            ->get();
        }

        $categories = \App\ComplainCategory::with('subcategories')->get();
        
        return view('admin.complain.dashboard', compact(['complains', 'categories']));
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
     * @param  \App\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function show(Complain $complain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function edit(Complain $complain)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Complain $complain)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Complain  $complain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Complain $complain)
    {
        //
    }
}

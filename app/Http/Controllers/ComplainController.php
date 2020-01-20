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
        if($subcategory != null) {

            $subcwise = \App\ComplainSubcategory::where('name', $subcategory)
                ->first();
            
            $complains = $subcwise
                ->complains()
                ->orderBy('created_at', 'desc')
                ->get();
            
            //return $complains;

        }
    
        elseif($category !== null && $subcategory == null) {
            
            $categorywise = \App\ComplainCategory::where('name', $category)
                ->first();

            $complains = $categorywise
                ->complains()
                ->orderBy('created_at', 'desc')
                ->get();

             //return $complains;
        }
        
        else {
            $complains = \App\Complain::latest()->get();
        }
        //dd($complains->first());

        // $c = collect('complains');
        // return $complains;

        $categories = \App\ComplainCategory::with('subcategories')->get();
        
        if (\Request::isJson()) {
            return $complains;
        } else
        
        return view('admin.complain.dashboard', compact(['complains', 'categories', 'category', 'subcategory']));
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
        $complain = $request->validate([
            'body' => 'required',

        ]);

        Complain::create([
            'body' => $complain['body'],
            'category_id' => $request->input('category_id'),
            'subcategory_id' => $request->input('subcategory_id'),
        ]);

        if($request->isJson()){
            return response()->json($request->all(), 200);
        }
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

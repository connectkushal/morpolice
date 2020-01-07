<?php

namespace App\Http\Controllers;

use App\AboutPolice;
use Illuminate\Http\Request;

class AboutPoliceController extends Controller
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutPolice  $aboutPolice
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        if (\Request::isJson()) {
            $aboutPolice = AboutPolice::latest()->first();
            return $aboutPolice;
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutPolice  $aboutPolice
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $ap = AboutPolice::latest()->first();



        $editorData = $ap != null ? json_encode($ap->body) : '';
        $aboutPolice = $ap != null ? $ap->body : '';
        
        return view('admin.update_about_police', compact(['aboutPolice', 'editorData']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutPolice  $aboutPolice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutPolice $aboutPolice)
    {
        //dd($request->all());
        AboutPolice::create(['body'=>$request->input('body')]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutPolice  $aboutPolice
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutPolice $aboutPolice)
    {
        //
    }
}

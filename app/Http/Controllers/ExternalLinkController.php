<?php

namespace App\Http\Controllers;

use App\ExternalLink;
use Illuminate\Http\Request;

class ExternalLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Request::isJson())
        { 
            $allLinks = ExternalLink::where('type', 'ext')->get();
            return $allLinks;
        }
    }

    public function indexSocial()
    {
        if (\Request::isJson()) {
            $socialLinks = ExternalLink::where('type', 'social')->get();
            return $socialLinks;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allLinks = ExternalLink::where('type', 'ext')->get();

        return view('admin.create_external_links', compact('allLinks'));
    }

    public function createSocial()
    {
        $allLinks = ExternalLink::where('type', 'social')->get();

        return view('admin.create_social_links', compact('allLinks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newLink = $request->validate([
            'name' => 'required',
            'url' => 'required'
        ]);

        $newLink['name'] = strtolower($newLink['name']);

        ExternalLink::updateOrCreate(
            ['name' => $newLink['name']],
            [
                'url' => $newLink['url'],
                'type' => 'ext'
            ]
        );


        return redirect()->route('links-form');
    }

    public function storeSocial(Request $request)
    {
        $newLink = $request->validate([
            'name' => 'required',
            'url' => 'required'
        ]);

        $newLink['name'] = strtolower($newLink['name']);

        ExternalLink::updateOrCreate(
            ['name' => $newLink['name']],
            [
                'url' => $newLink['url'],
                'type' => 'social'
            ]
        );

        return redirect()->route('social-form');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ExternalLink  $externalLink
     * @return \Illuminate\Http\Response
     */
    public function show(ExternalLink $externalLink)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExternalLink  $externalLink
     * @return \Illuminate\Http\Response
     */
    public function edit(ExternalLink $externalLink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExternalLink  $externalLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExternalLink $externalLink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ExternalLink  $externalLink
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExternalLink $externalLink)
    {
        //
    }
}

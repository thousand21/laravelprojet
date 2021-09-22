<?php

namespace App\Http\Controllers;

use App\Models\InfoFooter;
use Illuminate\Http\Request;

class InfoFooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer = InfoFooter::all();
        return view('dashboard.pages.footer.footer', compact('footer'));
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
     * @param  \App\Models\InfoFooter  $infoFooter
     * @return \Illuminate\Http\Response
     */
    public function show(InfoFooter $infoFooter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InfoFooter  $infoFooter
     * @return \Illuminate\Http\Response
     */
    public function edit(InfoFooter $id)
    {
        $footer = InfoFooter::find($id);
        return view('dashboard.pages.footer.footerEdit', compact('footer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InfoFooter  $infoFooter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InfoFooter $id)
    {
        $request->validate([
            "street" => "required",
            "city" => "required",
            "info" => "required",
            "link_url" => 'required',
            "link" => 'required',
        ]);

        $footer = $id;
        $footer->street = $request->street;
        $footer->city = $request->city;
        $footer->info = $request->info;
        $footer->link_url = $request->link_url;
        $footer->link = $request->link;
        $footer->save();

        return redirect()->route('ftr')->with('message', 'Informations modifiées avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InfoFooter  $infoFooter
     * @return \Illuminate\Http\Response
     */
    public function destroy(InfoFooter $infoFooter)
    {
        //
    }
}

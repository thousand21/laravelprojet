<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio = Portfolio::all();
        return view('dashboard.pages.portfolio.portfolio', compact('portfolio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pages.portfolio.portfolioCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "url" => "required",
            "description" => "required"
        ]);
        
        $portfolio = new Portfolio;
        $portfolio->name = $request->name;
        $portfolio->url = $request->file('url')->hashName();
        $portfolio->description = $request->description;
        $portfolio->save();

        $request->file('url')->storePublicly('img', 'public');

        return redirect()->route('portfolios.index')->with('message', 'Elément ajouté avec succès au portfolio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        return view('dashboard.pages.portfolio.portfolioShow', compact('portfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('dashboard.pages.portfolio.portfolioEdit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            "name" => "required",
            "url" => "required",
            "description" => "required"
        ]);
        
        Storage::disk('public')->delete('img/' . $portfolio->url);

        $portfolio->name = $request->name;
        $portfolio->url = $request->file('url')->hashName();
        $portfolio->description = $request->description;
        $portfolio->save();

        $request->file('url')->storePublicly('img', 'public');

        return redirect()->route('portfolios.index')->with('message', 'Elément modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        Storage::disk('public')->delete('img/' . $portfolio->url);
        $portfolio->delete();
        return redirect()->route('portfolios.index')->with('message', 'Elément supprimé avec succès au portfolio');
    }
}

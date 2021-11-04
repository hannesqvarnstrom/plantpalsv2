<?php

namespace App\Http\Controllers;

use App\Models\Suggestion;
use Illuminate\Http\Request;

class SuggestionController extends Controller
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
        return view('suggestions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        abort_if($request->user()->cannot('make suggestion'), 401);
        $request->user()->suggestions()->create($request->all());
        return redirect()->route('dashboard')
                ->with('message', 'Suggestion sent!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Suggestion  $suggestion
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Suggestion $suggestion)
    {
        return view('suggestions.show', compact('suggestion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Suggestion  $suggestion
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Suggestion $suggestion)
    {
        abort_if($request->user()->cannot('edit suggestion'), 401);
        return  view('suggestions.edit', compact('suggestion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Suggestion  $suggestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suggestion $suggestion)
    {
        abort_if($request->user()->cannot('edit suggestion'), 401);
        $suggestion->update($request->all());
        $suggestion->save();
        
        return redirect()->back()->with('message', 'Successfully updated suggestion.');
    }

    public function approve(Request $request, Suggestion $suggestion)
    {
        abort_if($request->user()->cannot('approve suggestion'), 401);
        $resource = $suggestion->approve($request->user());
        if($resource)
            return redirect()->route('dashboard')->with('message', 'Suggestion successfully approved!');
        
        return redirect()->back()->with('message', 'Suggestion hasn\'t got a valid Taxon type. Please select one and try again');
    }

    public function ajaxApprove(Request $request, Suggestion $suggestion)
    {
        abort_if($request->user()->cannot('approve suggestion'), 401);
        $resource = $suggestion->approve($request->user());
        return $resource;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Suggestion  $suggestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Suggestion $suggestion)
    {
        abort_if($request->user()->cannot('delete suggestion'), 401);
        $suggestion->delete();

        return redirect()->route('dashboard')->with('message', 'Suggestion succesfully deleted!');
    }
}

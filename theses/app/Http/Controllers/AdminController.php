<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Theses;

class AdminController extends Controller
{
   /**
     * Display a listing of the theses.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theses = Theses::all();

        return view('admin.index', compact('theses'));
    }

    /**
     * Show the form for creating a new theses.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created theses in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'author' => 'required|string|max:255',
        //     // Add other fields validation as needed
        // ]);
            
        Theses::create([
            'title' => $request->title,
            'author' => $request->author,
            'abstract'=>$request->abstract,
            'jury_members'=>$request->jury_members,
            'year_of_defense'=>$request->year_of_defense,
            'research_domain'=>$request->research_domain,


            // Assign other fields as needed
        ]);

        return redirect()->route('admin.index')->with('success', 'Theses created successfully');
    }

    /**
     * Display the specified theses.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $theses = Theses::findOrFail($id);

        return view('admin.show', compact('theses'));
    }

    /**
     * Show the form for editing the specified thesis.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $thesis = Theses::findOrFail($id);

        return view('admin.edit', compact('theses'));
    }

    /**
     * Update the specified theses in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $request->validate([
        //     'title' => 'required|string|max:255',
        //     'author' => 'required|string|max:255',
        //     // Add other fields validation as needed
        // ]);

        $theses = Theses::findOrFail($id);
        $theses->update([
            'title' => $request->title,
            'author' => $request->author,
            'abstract'=>$request->abstract,
            'jury_members'=>$request->jury_members,
            'year_of_defense'=>$request->year_of_defense,
            // Update other fields as needed
        ]);

        return redirect()->route('admin.index')->with('success', 'Theses updated successfully');
    }

    /**
     * Remove the specified theses from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $theses = Theses::findOrFail($id);
        $theses->delete();

        return redirect()->route('admin.index')->with('success', 'Theses deleted successfully');
    }
}

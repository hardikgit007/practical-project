<?php

namespace App\Http\Controllers;

use App\SubjectMaster;
use App\Terms;
use Illuminate\Http\Request;

class SubjectMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(SubjectMaster $subjectMaster)
    {
        $subjectMaster = $subjectMaster::latest()->paginate(5);
        return view('subject-list', compact('subjectMaster'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $terms = Terms::get();
        return view('add-subject', compact('terms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, SubjectMaster $subjectMaster)
    {
        $input = $request->all();
        $subjectMaster::create($input);
        return redirect()->route('subject-masters.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubjectMaster  $subjectMaster
     * @return \Illuminate\Http\Response
     */
    public function show(SubjectMaster $subjectMaster)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubjectMaster  $subjectMaster
     * @return \Illuminate\Http\Response
     */
    public function edit(SubjectMaster $subjectMaster)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubjectMaster  $subjectMaster
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubjectMaster $subjectMaster)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubjectMaster  $subjectMaster
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubjectMaster $subjectMaster)
    {
        //
    }
}

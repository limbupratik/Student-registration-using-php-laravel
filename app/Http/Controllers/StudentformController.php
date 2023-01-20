<?php

namespace App\Http\Controllers;

use App\Models\studentform;
use Illuminate\Http\Request;

class StudentformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Forms=studentform::all();
        return view('Forms.data',compact('Forms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Forms.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->all();
        studentform::create($data);
        return redirect()->route('details.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\studentform  $studentform
     * @return \Illuminate\Http\Response
     */
    public function show(studentform $studentform)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\studentform  $studentform
     * @return \Illuminate\Http\Response
     */
    public function edit($studentform)
    {
        $studentform = studentform::findorfail($studentform);
        // dd($studentform);
        return view('details.edit',compact('studentform'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\studentform  $studentform
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $studentform)
    {
        $studentform=studentform::findorfail($studentform);
        $data = $request->all();

        $studentform->update($data);
        return redirect()->route('details.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\studentform  $studentform
     * @return \Illuminate\Http\Response
     */
    public function destroy(studentform $studentform)
    {
        //
    }
}

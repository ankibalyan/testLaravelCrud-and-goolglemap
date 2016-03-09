<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Academics;

use Session;

class AcademicController extends Controller
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
        return view('academics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'user_name' => 'required|max:255|unique:academics,user_name',
            'academic_name' => 'required|max:255',
            'email' => 'required|max:255|email|unique:academics,email',
            'phone' => 'required|max:255',
            'opening_time' => 'max:2',
            'opening_time_period' => 'max:2',
            'closing_time' => 'max:2',
            'closing_time_period' => 'max:2',
            'description' => 'required',
            'latitude' => 'required|max:255',
            'longitude' => 'required|max:255'
        ));

        $academic = new Academics;

        $academic->user_name = $request->user_name;
        $academic->academic_name = $request->academic_name;
        $academic->email = $request->email;
        $academic->phone = $request->phone;
        $academic->opening_time = $request->opening_time;
        $academic->opening_time_period = $request->opening_time_period;

        $academic->closing_time = $request->closing_time;
        $academic->closing_time_period = $request->closing_time_period;
        $academic->description = $request->description;
        $academic->latitude = $request->latitude;
        $academic->longitude = $request->longitude;
        $academic->tags = $request->tags;

        $academic->save();

        Session::flash('success', 'Saved Successfully!');

        return redirect()->route('academics.show',$academic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $academic = Academics::find($id);
        return view('pages.map')->withAcademic($academic);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hour;

class HourController extends Controller
{   
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }




    public function index()
    {
        $hours = Hour::latest()->paginate(10);
        return view('hours.index',compact('hours'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hours.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
			'week' => 'required',
            'email' => 'required',
            'uren' => 'required',
            'totaaluren' => 'required',
			
        ]);
        Hour::create($request->all());
        return redirect()->route('hours.index')
                        ->with('success','Uren toegevoegd!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Hour $hour)
    {
        return view('hours.show',compact('hour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hour $hour)
    {
        return view('hours.edit',compact('hour'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Hour $hour)
    {
        request()->validate([
            'name' => 'required',
			'week' => 'required',
            'email' => 'required',
            'uren' => 'required',
            'totaaluren' => 'required',
        ]);
        $hour->update($request->all());
        return redirect()->route('hours.index')
                        ->with('success','Uren updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hour::destroy($id);
        return redirect()->route('hours.index')
                        ->with('success','Uren deleted successfully');
    }
}

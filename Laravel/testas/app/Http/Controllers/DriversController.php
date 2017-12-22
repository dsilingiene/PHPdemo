<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Driver;

class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = Driver::orderBy('id', 'asc')->paginate(4);
        return view('drivers.index', compact('drivers'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $this->validate($request, [
            'name' => 'required | string',
            'city' => 'required | string',
            ]);


        $driver = new Driver;
        $driver->name = $request->input('name');
        $driver->city = $request->input('city');
        $driver->save();

        return redirect('/drivers');
    }

    /**
     * Display the specified resource.
     *
     * @param  Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        return view('drivers.show', compact('driver'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    
    {
        return view('drivers.edit', compact('driver'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
        
        $driver->name = $request->input('name');
        $driver->city = $request->input('city');
        $driver->save();

        return redirect('/drivers');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Driver  $driverid
     * @return \Illuminate\Http\Response
     */
    public function delete(Driver $driver)
    {
        return view('drivers.delete', compact('driver'));
    }

    public function destroy(Driver $driver)
    {
        $driver->delete();
        return redirect('/drivers');        
    }
}
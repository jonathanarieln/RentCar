<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $cars = Car::all();

      return view('cars.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cars.create');
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
            'model'=>'required',
            'color'=>'required',
            'year'=>'required'
        ]);

        $car = new Car([
            'model' => $request->get('model'),
            'color' => $request->get('color'),
            'year' => $request->get('year'),
            'doors' => $request->get('doors'),
            'polarized' => $request->get('polarized'),
            'armored' => $request->get('armored')
        ]);
        $car->save();
        return redirect('/cars')->with('success', 'Car saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $car = Car::find($id);
      return view('cars.edit', compact('car'));
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

      $request->validate([
          'model'=>'required',
          'color'=>'required',
          'year'=>'required'
      ]);

      $car = Car::find($id);
      $car->model =  $request->get('model');
      $car->color = $request->get('color');
      $car->year = $request->get('year');
      $car->doors = $request->get('doors');
      $car->polarized = $request->get('polarized');
      $car->armored = $request->get('armored');
      $car->save();

      return redirect('/cars')->with('success', 'Car updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $car = Car::find($id);
      $car->delete();

      return redirect('/cars')->with('success', 'Car deleted!');
    }
}

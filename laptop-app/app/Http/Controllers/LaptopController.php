<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $laptops = Laptop::all();
        // return $laptops;
        return view('/laptops/index')->with('laptops', $laptops);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/laptops/create');
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
            'brand' => 'required',
            'model' => 'required',
            'price' => 'required',
            'img' => 'required',
        ]);

        // $test = $request->file('img')->guessExtension();
        // $test = $request->file('img')->getMimeType();

        $newImg = time() . '-' . $request->brand . '.' . $request->img->extension();

        $test = $request->img->move(public_path('images'), $newImg);

        // dd($newImg);

        // dd($test);
        Laptop::create([
            'brand' => $request->brand,
            'model' => $request->model,
            'price' => $request->price,
            'img'   => $newImg
        ]);

        return redirect()->route('laptop');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Laptop $laptop)
    {
        // dd($laptop);
        return  view('laptops.edit', ['laptop' => $laptop]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laptop $laptop)
    {
        $data = $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'price' => 'required',
            'img' => 'required'
        ]);

        $laptop->update($data);

        return redirect(route('laptop'))->with('success', 'Product Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laptop $laptop)
    {
        $img = $laptop->img;
        $image_path = public_path('images') . $img;
        // dd($image_path);
        if(Laptop::exists($image_path)) {
            Laptop::delete($image_path);
        }
        $laptop->delete();
        return redirect(route('laptop'))->with('success', 'Product Delete Successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Kitchen;
use Illuminate\Http\Request;

class KitchenController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $query = Kitchen::query();

        $request->has( 'value' ) ? $query->where('type', $request->get('value')) : '';

        $items = $query->where('status', '=', 1)->get();

        return view('admin.kitchen', 
        [
            'page' => 'Kitchen',
            'kitchen_items' =>  $items,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kitchen_create', ['page' => 'Create Kitchen']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate(Kitchen::$rules);

        $validatedData['status'] = $request->input('status') ?? 0;

        Kitchen::create($validatedData);

        return redirect()->route('kitchen.index')->with('success', 'Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kitchen  $kitchen
     * @return \Illuminate\Http\Response
     */
    public function show(Kitchen $kitchen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kitchen  $kitchen
     * @return \Illuminate\Http\Response
     */
    public function edit(Kitchen $kitchen)
    {
        return view('admin.kitchen_create', [
            'kitchen' => $kitchen,
            'page' => 'Update'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kitchen  $kitchen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kitchen $kitchen)
    {
        $validatedData = $request->validate(Kitchen::$rules);

        $validatedData['status'] = $request->input('status') ?? 0;

        $kitchen->update($validatedData);

        return redirect()->route('kitchen.index')->with('success', 'Updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kitchen  $kitchen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kitchen $kitchen)
    {
        $kitchen->update(["status"=>0]);

        return redirect()->route('kitchen.index')->with('success', 'Deleted Successfully');
    }
}

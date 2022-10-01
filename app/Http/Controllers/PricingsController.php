<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pricing;
use App\Http\Requests\StorePricing;


class PricingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricings =  pricing::all();
        return view ("Pricings.index" , compact('pricings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePricing $request)
    {
        try {
            $validated = $request->validated();
            $pricing = new pricing();
            $pricing->name_pricing = $request->name_pricing;
            $pricing->date = $request->date;
            $pricing->price = $request->price;
            $pricing->featured_1 = $request->featured_1;
            $pricing->featured_2 = $request->featured_2;
            $pricing->featured_3 = $request->featured_3;
            $pricing->featured_4 = $request->featured_4;
            $pricing->featured_5 = $request->featured_5;

            $pricing->save();
            return redirect()->route('Pricings.index')->with('message','Data added Successfully');
        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePricing $request, $id)
    {
        try {
            $pricing = pricing::findOrFail($request->id);
            $pricing->update([
            $pricing->name_pricing = $request->name_pricing,
            $pricing->date = $request->date,
            $pricing->price = $request->price,
            $pricing->featured_1 = $request->featured_1,
            $pricing->featured_2 = $request->featured_2,
            $pricing->featured_3 = $request->featured_3,
            $pricing->featured_4 = $request->featured_4,
            $pricing->featured_5 = $request->featured_5,
            ]);

            return redirect()->route('Pricings.index')->with('message','Data added Successfully');
        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $pricing = pricing::find($request->id)->delete();
        return redirect()->route('Pricings.index')->with('message','Data Deleted Successfully');

    }
}

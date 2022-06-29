<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePositions;
use App\position;
use Illuminate\Http\Request;

class PositionContreller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $Positions = position::all();
        return view('Position.index',compact('Positions'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StorePositions $request)
    {
        try {
            $validated = $request->validated();
            $Positions = new position();
            $Positions->name_position = $request->name_position;
            $Positions->title_skill = $request->title_skill;
            $Positions->save();
            return redirect()->route('Position.index')->with('message','Data added Successfully');
        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(StorePositions $request)
    {
        try {

            $Positions = position::findOrFail($request->id);
            $Positions->update([
                $Positions->name_position = $request->name_position,
                $Positions->title_skill = $request->title_skill,
            ]);
            return redirect()->route('Position.index')->with('info','Data update Successfully');
        }

        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request)
    {
        $Positions = position::findOrFail($request->id)->delete();
        return redirect()->route('Position.index')->with('warning','Data delete Successfully');

    }

}

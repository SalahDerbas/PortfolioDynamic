<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSkiil;
use App\skill;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $Skiils = skill::all();
        return view('Skills.index',compact('Skiils'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StoreSkiil $request)
    {
        try {
            $validated = $request->validated();
            $Skill = new skill();
            $Skill->title_skill = $request->title_skill;
            $Skill->position_skill = $request->position_skill;
            $Skill->percentage = $request->percentage;
            $Skill->save();
            return redirect()->route('Skills.index')->with('message','Data added Successfully');
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
    public function update(StoreSkiil $request)
    {
        try {

            $Skills = skill::findOrFail($request->id);
            $Skills->update([
                $Skills->title_skill = $request->title_skill,
                $Skills->position_skill = $request->position_skill,
                $Skills->percentage = $request->percentage,
            ]);
            return redirect()->route('Skills.index')->with('info','Data update Successfully');
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
        $Skills = skill::findOrFail($request->id)->delete();
        return redirect()->route('Skills.index')->with('warning','Data delete Successfully');

    }



}

<?php

namespace App\Http\Controllers;

use App\experience;
use App\Http\Requests\StoreExperience;
use Illuminate\Http\Request;

class ExperinseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $Experiences = experience::all();
        return view('Experiences.index',compact('Experiences'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StoreExperience $request)
    {
        try {
            $validated = $request->validated();
            $Experiences = new experience();
            $Experiences->position_experience = $request->position_experience;
            $Experiences->from_experience = $request->from_experience;
            $Experiences->to_experience = $request->to_experience;
            $Experiences->company_name = $request->company_name;
            $Experiences->title_experience = $request->title_experience;
            $Experiences->save();
            return redirect()->route('Experiences.index')->with('message','Data added Successfully');
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
    public function update(StoreExperience $request)
    {
        try {

            $Experiences = experience::findOrFail($request->id);
            $Experiences->update([
                $Experiences->position_experience = $request->position_experience,
                $Experiences->from_experience = $request->from_experience,
                $Experiences->to_experience = $request->to_experience,
                $Experiences->company_name = $request->company_name,
                $Experiences->title_experience = $request->title_experience,
            ]);
            return redirect()->route('Experiences.index')->with('info','Data update Successfully');
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
        $Experiences = experience::findOrFail($request->id)->delete();
        return redirect()->route('Experiences.index')->with('warning','Data delete Successfully');

    }

}

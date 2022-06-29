<?php

namespace App\Http\Controllers;

use App\education;
use App\Http\Requests\StoreEducation;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $Educations = education::all();
        return view('Educations.index',compact('Educations'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StoreEducation $request)
    {
        try {
            $validated = $request->validated();
            $Education = new education();
            $Education->name = $request->name;
            $Education->from_education = $request->from_education;
            $Education->to_education = $request->to_education;
            $Education->title = $request->title;
            $Education->univercity_name = $request->univercity_name;
            $Education->save();
            return redirect()->route('Educations.index')->with('message','Data added Successfully');
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
    public function update(StoreEducation $request)
    {
        try {

            $Education = education::findOrFail($request->id);
            $Education->update([
            $Education->name = $request->name,
            $Education->from_education = $request->from_education,
            $Education->to_education = $request->to_education,
            $Education->title = $request->title,
            $Education->univercity_name = $request->univercity_name,
            ]);
            return redirect()->route('Educations.index')->with('info','Data update Successfully');
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
        $Educations = education::findOrFail($request->id)->delete();
        return redirect()->route('Educations.index')->with('warning','Data delete Successfully');

    }


}

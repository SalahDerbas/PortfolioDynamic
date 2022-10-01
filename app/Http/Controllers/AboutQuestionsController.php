<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreAboutQuestion;
use App\aboutquestion;


class AboutQuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutQuestions = aboutquestion::all();
        return view('AboutQuestions.index' , compact('aboutQuestions'));
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
    public function store(StoreAboutQuestion $request)
    {
        try {
            $validated = $request->validated();
            $aboutQuestions = new aboutquestion();
            $aboutQuestions->question = $request->question;
            $aboutQuestions->answer = $request->answer;
            $aboutQuestions->save();
            return redirect()->route('AboutQuestions.index')->with('message','Data added Successfully');
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
    public function update(StoreAboutQuestion $request, $id)
    {
        try {
            $aboutQuestions = aboutquestion::findOrFail($request->id);
            $aboutQuestions->update([
                $aboutQuestions->question = $request->question,
                $aboutQuestions->answer = $request->answer,
            ]);
          
            return redirect()->route('AboutQuestions.index')->with('message','Data updated Successfully');
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
        $aboutQuestions = aboutquestion::find($request->id)->delete();
        return redirect()->route('AboutQuestions.index')->with('message','Data delete Successfully');


    }
}

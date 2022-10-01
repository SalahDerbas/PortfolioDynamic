<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreQuestion;
use Illuminate\Http\Request;
use App\question;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question = question::all();
        return view('Questions.index' , compact('question'));
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
    public function store(StoreQuestion $request)
    {
        try {
            $validated = $request->validated();
            $question = new question();
            $question->question = $request->question;
            $question->answer = $request->answer;
            $question->save();
            return redirect()->route('Questions.index')->with('message','Data added Successfully');
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
    public function update(StoreQuestion $request, $id)
    {
        try {
            $question = question::findOrFail($request->id);
            $question->update([
                $question->question = $request->question,
                $question->answer = $request->answer,
            ]);
          
            return redirect()->route('Questions.index')->with('message','Data updated Successfully');
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
        $question = question::find($request->id)->delete();
        return redirect()->route('Questions.index')->with('message','Data delete Successfully');


    }
}

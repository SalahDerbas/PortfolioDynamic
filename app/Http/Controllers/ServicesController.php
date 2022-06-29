<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreService;
use App\service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $Services = service::all();
        return view('Services.index',compact('Services'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StoreService $request)
    {
        try {
            $validated = $request->validated();
            $Services = new service();
            $Services->name_service = $request->name_service;
            $Services->title_service = $request->title_service;
            $Services->save();
            return redirect()->route('Services.index')->with('message','Data added Successfully');
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
    public function update(StoreService $request)
    {
        try {

            $Services = service::findOrFail($request->id);
            $Services->update([
                $Services->name_service = $request->name_service,
                $Services->title_service = $request->title_service,
            ]);
            return redirect()->route('Services.index')->with('info','Data update Successfully');
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
        $Services = service::findOrFail($request->id)->delete();
        return redirect()->route('Services.index')->with('warning','Data delete Successfully');

    }

}

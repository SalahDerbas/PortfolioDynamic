<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategory;
use App\portfolioCategory;
use Illuminate\Http\Request;

class PortfolioCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $CategoryP = portfolioCategory::all();
        return view('CategoryP.index',compact('CategoryP'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StoreCategory $request)
    {
        try {
            $validated = $request->validated();
            $CategoryP = new portfolioCategory();
            $CategoryP->name_category = $request->name_category;
            $CategoryP->title_category = $request->title_category;
            $CategoryP->save();
            return redirect()->route('CategoryP.index')->with('message','Data added Successfully');
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
    public function update(StoreCategory $request)
    {
        try {

            $CategoryP = portfolioCategory::findOrFail($request->id);
            $CategoryP->update([
                $CategoryP->name_category = $request->name_category,
                $CategoryP->title_category = $request->title_category,
            ]);
            return redirect()->route('CategoryP.index')->with('info','Data update Successfully');
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
        $CategoryP = portfolioCategory::findOrFail($request->id)->delete();
        return redirect()->route('CategoryP.index')->with('warning','Data delete Successfully');

    }



}

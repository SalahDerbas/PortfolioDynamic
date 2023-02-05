<?php

namespace App\Http\Controllers;

use App\contactessage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactessage = contactessage::orderBy('id', 'DESC')->get();
        return view('Contactessage.index', compact('contactessage'));
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
    public function store(Request $request)
    {

            $contactessage = new contactessage();
            $contactessage->name    = $request->name;
            $contactessage->email   = $request->email;
            $contactessage->subject = $request->subject;
            $contactessage->message = $request->message;
            $contactessage->save();
            return redirect()->back();

        }

    /**
     * Display the specified resource.
     *
     * @param  \App\contactessage  $contactessage
     * @return \Illuminate\Http\Response
     */
    public function show(contactessage $contactessage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\contactessage  $contactessage
     * @return \Illuminate\Http\Response
     */
    public function edit(contactessage $contactessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\contactessage  $contactessage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contactessage $contactessage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\contactessage  $contactessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $contactessage = contactessage::findOrFail($request->id)->delete();
        return redirect()->route('Contactessage.index')->with('warning','Data delete Successfully');

    }
}

<?php

namespace App\Http\Controllers;

use App\client;
use App\Http\Requests\StoreClient;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $Clients = client::all();
        return view('Clients.index',compact('Clients'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(StoreClient $request)
    {
        try {
            $validated = $request->validated();
            $Clients = new client();
            $Clients->name_client = $request->name_client;
            $Clients->position_client = $request->position_client;
            $Clients->title_client = $request->title_client;
            $Clients->name_image = $request->file('image')->getClientOriginalName();
            $Clients->image = $request->file('image')->storeAs('attachments/students/'.$Clients->name_image,$Clients->name_image , 'attachments');
            $Clients->save();
            return redirect()->route('Clients.index')->with('message','Data added Successfully');
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
    public function update(StoreClient $request)
    {
        try {

            $Clients = client::findOrFail($request->id);
            $Clients->update([
                $Clients->name_client = $request->name_client,
                $Clients->position_client = $request->position_client,
                $Clients->title_client = $request->title_client,
            ]);
            return redirect()->route('Clients.index')->with('info','Data update Successfully');
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
        $Clients = client::findOrFail($request->id)->delete();
        return redirect()->route('Clients.index')->with('warning','Data delete Successfully');

    }



}

<?php

namespace App\Http\Controllers;

use App\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $collection = contact::all();
        $contact['contact'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });
        return view('Contact.index', $contact);
    }


    public function update(Request $request){

        try{

            $info = $request->except('_token', '_method');
//            foreach ($info as $key=> $value){
//                about::where('key', $key)->update(['value' => $value]);
//            }

            $key = array_keys($info);
            $value = array_values($info);
            for($i =0; $i<count($info);$i++){
                contact::where('key', $key[$i])->update(['value' => $value[$i]]);
            }

//            if($request->hasFile('logo')) {
//                $logo_name = $request->file('logo')->getClientOriginalName();
//                about::where('key', 'logo')->update(['value' => $logo_name]);
//                $this->uploadFile($request,'logo','logo');
//            }

            return redirect()->route('Contact.index')->with('info','Data update Successfully');
        }
        catch (\Exception $e){

            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }
}

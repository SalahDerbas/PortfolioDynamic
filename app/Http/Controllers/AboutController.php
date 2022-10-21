<?php

namespace App\Http\Controllers;
use App\about;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $collection = about::all();
        $about['about'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });
        return view('UserAbout.index', $about);
    }


    public function update(Request $request){

        try{

            $info = $request->except('_token', '_method', 'logo' , 'user');
//            foreach ($info as $key=> $value){
//                about::where('key', $key)->update(['value' => $value]);
//            }

            $key = array_keys($info);
            $value = array_values($info);
            for($i =0; $i<count($info);$i++){
                about::where('key', $key[$i])->update(['value' => $value[$i]]);
            }

            if($request->hasFile('logo')) {
                $logo_name = $request->file('logo')->getClientOriginalName();
                about::where('key', 'logo')->update(['value' => $logo_name]);
                $request->file('logo')->move('attachments/logo/',$logo_name );
                // $this->uploadFile($request,'logo','logo');
            }


            if($request->hasFile('user')) {
                $user_name = $request->file('user')->getClientOriginalName();
                about::where('key', 'user')->update(['value' => $user_name]);
                $request->file('user')->move('attachments/user/',$user_name );
                // $this->uploadFile($request,'user','user');
            }



            return redirect()->route('About.index')->with('info','Data update Successfully');
        }
        catch (\Exception $e){

            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }




}

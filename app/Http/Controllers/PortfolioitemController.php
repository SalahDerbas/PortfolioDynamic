<?php

namespace App\Http\Controllers;

use App\about;
use App\client;
use App\contact;
use App\education;
use App\experience;
use App\Http\Requests\Storeitem;
use App\Image;
use App\Mail\ContactMail;
use App\portfolioCategory;
use App\portfolioItem;
use App\position;
use App\ProjectAttachment;
use App\service;
use App\skill;
use App\summary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class PortfolioitemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $ItemsP = portfolioItem::all();
        $categories = portfolioCategory::all();
        return view('ItemsP.index',compact('ItemsP' , 'categories'));
    }

    public function projectItems(){

        $collection = about::all();
        $about['about'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });


        $collection1 = summary::all();
        $summary['summary'] = $collection1->flatMap(function ($collection1) {
            return [$collection1->key => $collection1->value];
        });


        $collection2 = contact::all();
        $contact['contact'] = $collection2->flatMap(function ($collection2) {
            return [$collection2->key => $collection2->value];
        });


        $Skiils = skill::all();
        $Educations = education::all();
        $Experiences = experience::all();
        $Services = service::all();
        $Clients = client::all();
        $Positions = position::all();
        $Projects = portfolioCategory::all();
        $Items  = portfolioItem::all();


        return view('layoutPortFolio.projects' ,$about ,
            compact('Items','Projects','Positions','Skiils' , 'Educations' , 'Experiences' , 'Services' , 'Clients'))
            ->with($summary)->with($contact);
    }

    public  function send (Request $request){
        echo '111111111111111111';

        $validated = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'subject'=> 'required',
            'message' => 'required'
        ]);

        Mail::to('salahdrbas1@gmail.com')
            ->send(new ContactMail($validated['name'], $validated['email'], $validated['message'] , $validated['subject']));

        return $request->all();
    }



    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Storeitem $request)
    {
        try {
//            return $request;

            $validated = $request->validated();
            $ItemsP = new portfolioItem();
            $ItemsP->name_project_item = $request->name_project_item;
            $ItemsP->name_client = $request->name_client;
            $ItemsP->url = $request->url;
            $ItemsP->descriptions_item = $request->descriptions_item;
            $ItemsP->date_item = $request->date_item;
            $ItemsP->category_id = $request->category_id;
            $ItemsP->save();

            // insert img
            if($request->hasfile('photos'))
            {
                foreach($request->file('photos') as $file)
                {

                    $name = $file->getClientOriginalName();
                    $file->storeAs('attachments/projects/'.$ItemsP->name_project_item, $file->getClientOriginalName(),'upload_attachments');


                    // insert in image_table
                    $images= new Image();
                    $images->filename=$name;
                    $images->imageable_id= $ItemsP->id;
                    $images->imageable_type = 'App\portfolioItem';
                    $images->save();
                }
            }

            // insert photoooooo
            if($request->hasfile('photoooooo'))
            {
                foreach($request->file('photoooooo') as $file1)
                {

                    $name1 = $file1->getClientOriginalName();
                    $file1->storeAs('attachments/projects/'.$ItemsP->name_project_item .'/'.$ItemsP->name_project_item, '1111','upload_attachments1');


                    // insert in image_table
                    $images= new Image();
                    $images->filename=$name1;
                    $images->imageable_id= $ItemsP->id;
                    $images->imageable_type = 'App\portfolioItem';
                    $images->save();
                }
            }


            return redirect()->route('ItemsP.index')->with('message','Data added Successfully');
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
    public function update(Storeitem $request)
    {
        try {

            $ItemsP = portfolioItem::findOrFail($request->id);
            $ItemsP->update([
                $ItemsP->name_project_item = $request->name_project_item,
                $ItemsP->name_client = $request->name_client,
                $ItemsP->url = $request->url,
                $ItemsP->descriptions_item = $request->descriptions_item,
                $ItemsP->date_item = $request->date_item,
            ]);
            return redirect()->route('ItemsP.index')->with('info','Data update Successfully');
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
        $ItemsP = portfolioItem::findOrFail($request->id);
//        foreach ($ItemsP->images() as $attachment)
//        {
//            $attachment->id->delete();
//        }
        $ItemsP->delete();
        return redirect()->route('ItemsP.index')->with('warning','Data delete Successfully');

    }


    public function sendEmail(Request $request)
    {

        echo '111111111111111111';

        $validated = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'subject'=> 'required',
            'message' => 'required'
        ]);

        Mail::to('salahdrbas1@gmail.com')
            ->send(new ContactMail($validated['name'], $validated['email'], $validated['message'] , $validated['subject']));

        return $request->all();




        // Replace sdrbas@tandratech.com with your real receiving email address
//        $receiving_email_address = 'salahdrbas1@gmail.com';
//
//        if( file_exists($php_email_form = 'validate.js' )) {
//            include( $php_email_form );
//        } else {
//            die( 'Unable to load the "PHP Email Form" Library!');
//        }
//
//        $contact = new PHP_Email_Form;
//        $contact->ajax = true;
//
//        $contact->to = $receiving_email_address;
//        $contact->from_name = $_POST['name'];
//        $contact->from_email = $_POST['email'];
//        $contact->subject = $_POST['subject'];
//
//        // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
//        /*
//        $contact->smtp = array(
//          'host' => 'example.com',
//          'username' => 'example',
//          'password' => 'pass',
//          'port' => '587'
//        );
//        */
//
//        $contact->add_message( $_POST['name'], 'From');
//        $contact->add_message( $_POST['email'], 'Email');
//        $contact->add_message( $_POST['message'], 'Message', 10);
//
//        echo $contact->send();




        // to salahdrbas1
//        $to = 'salahdrbas1@gmail.com';
//
//        // Subject
//        $subject = $request->subject;
//
//        // Message
//        $message = $request->message;
//        // Mail it
//        mail($to, $subject, $message);
//        return redirect()->with('message','Data is sended  Successfully');
    }


}

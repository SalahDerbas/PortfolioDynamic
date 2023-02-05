<?php

namespace App\Http\Controllers;

use App\User;
use App\about;
use App\client;
use App\contact;
use App\portfolioCategory;
use App\portfolioItem;
use App\position;
use App\service;
use App\skill;
use App\aboutquestion;
use App\pricing;
use App\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $Skill= skill::all()->count();

        $Category= portfolioCategory::all()->count();
        $ItemsP= portfolioItem::all()->count();
        $Pricings = pricing::all()->count();
        $Clients  = client::all()->count();

        return view('welcome' , compact('Skill' ,'Category' ,'ItemsP' , 'Pricings' , 'Clients'));
    }
    public function store(Request $request)
    {

        return $request;
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





    public function portfolio(){

        $collection = about::all();
        $about['about'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });

        $collection2 = contact::all();
        $contact['contact'] = $collection2->flatMap(function ($collection2) {
            return [$collection2->key => $collection2->value];
        });

        $Skiils = skill::all();

        $Services = service::all();
        $Clients = client::all();
        $Positions = position::all();
        $Projects = portfolioCategory::all();
        $Items  = portfolioItem::all();
        $categories = portfolioCategory::all();
        $user = User::first();
        $AboutQuestions = aboutquestion::all();
        $pricings = pricing::all();
        $questions = question::all();

        return view('portfolio' ,$about ,
            compact('questions','pricings','AboutQuestions','Items','categories','Projects','Positions','Skiils' , 'Services' , 'Clients' , 'user'))
            ->with($contact);
    }




    public function myportfolio()
    {
        $collection = about::all();
        $about['about'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });




        $collection2 = contact::all();
        $contact['contact'] = $collection2->flatMap(function ($collection2) {
            return [$collection2->key => $collection2->value];
        });


        $Skiils = skill::all();

        $Services = service::all();
        $Clients = client::all();
        $Positions = position::all();
        $Projects = portfolioCategory::all();
        $Items  = portfolioItem::all();
        $categories = portfolioCategory::all();
        $user = User::first();

        return view('myportfolio' ,$about ,
            compact('Items','categories','Projects','Positions','Skiils' , 'Services' , 'Clients' , 'user'))
            ->with($contact);
    }

    public function projectinformation($id){

        $collection = about::all();
        $about['about'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });

        $collection2 = contact::all();
        $contact['contact'] = $collection2->flatMap(function ($collection2) {
            return [$collection2->key => $collection2->value];
        });

        $Item = portfolioItem::where('id',$id)->get();
        $user = User::first();

        return view ('projectinformation', $about, compact('Item' , 'user'));
    }



}

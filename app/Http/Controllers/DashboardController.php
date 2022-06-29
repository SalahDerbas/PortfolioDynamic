<?php

namespace App\Http\Controllers;

use App\education;
use App\experience;
use App\portfolioCategory;
use App\portfolioItem;
use App\skill;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $Skill= skill::all()->count();
        $Educations= education::all()->count();
        $Category= portfolioCategory::all()->count();
        $ItemsP= portfolioItem::all()->count();
        $Experiences= experience::all()->count();
        return view('welcome' , compact('Skill' , 'Educations', 'Category' ,'ItemsP' ,'Experiences'));
    }
}

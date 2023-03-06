<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;



class PersonnelController extends Controller
{
   public function index(){
    
    $personnels= Personnel::orderBy("nom", "asc")->get(); 
    
    return view("personnel",compact("personnels"));
   }    
}

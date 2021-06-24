<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LajuMail;
use Illuminate\Http\Response;



class LajuCOntroller extends Controller
{
    public function index(){

        return view('lajumail.sign_up');
    }
}

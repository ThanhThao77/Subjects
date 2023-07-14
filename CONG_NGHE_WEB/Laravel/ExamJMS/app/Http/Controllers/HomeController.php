<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getAllJournals()
    {
        $journals = Journal::all();
        return view('home',compact('journals'));
    }
}

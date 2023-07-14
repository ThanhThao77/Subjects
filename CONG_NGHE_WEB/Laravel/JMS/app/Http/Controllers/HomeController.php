<?php

namespace App\Http\Controllers;
use App\Models\Journal;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getAllJournals()
    {
        $journals = Journal::orderBy('created_at', 'DESC')->paginate(10);
        return view('home',compact('journals'));
    }

}

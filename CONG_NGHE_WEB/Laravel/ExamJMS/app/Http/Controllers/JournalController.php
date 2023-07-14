<?php

namespace App\Http\Controllers;
use App\Models\Journal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('journal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        //Dung thang support/facades
        $validator = Validator::make($data, [
            'title' => "required|max:70",
            'editor' => "required|max:70",
            'issn' => "required|max:9",
            'publicationDate' => "required",
        ]);

        if ($validator->fails()) {
            return redirect(route('home'));
        }
        $journal = Journal::create($data);
        if ($journal) {
            return redirect(route('home'));
        } else {
            return redirect(route('home'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $jid
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $jid
     * @return \Illuminate\Http\Response
     */
    public function edit($jid)
    {
        $journal = Journal::where('jid', $jid)->first();
        return view('journal.edit', compact('journal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $jid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $jid)
    {
        $data = $request->except(['_token','_method']);

        $validator = Validator::make($data, [
            'title' => "required|max:70",
            'editor' => "required|max:70",
            'issn' => "required|max:9",
            'publicationDate' => "required",
        ]);

        if ($validator->fails()) {
            return redirect(route('home'));
        }

        $journal = Journal::where('jid',$jid);
        if ($journal) {
            $journal->update($data);
            return redirect(route('home'));
        } else {
            return redirect(route('home'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $jid
     * @return \Illuminate\Http\Response
     */
    public function delete($jid)
    {
        try {
            $journal = Journal::where('jid',$jid)->first();
            if ($journal) {
                $journal->delete();
                return redirect(route('home'));
            }
            else {
                return redirect(route('home'));
            }
        }
        catch (\Exception $e) {
            return redirect(route('home'));
        }
    }
}

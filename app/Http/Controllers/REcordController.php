<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;

class REcordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $record = Record::where('status', 'не полезное')->orderBy('time', 'desc')->get();
        return view('welcome', compact('record'));
    }

    public function useful()
    {
        $record = Record::where('status', 'полезное')->orderBy('time', 'desc')->get();
        return view('useful', compact('record'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Record::create([
            'name' => $request->name,
            'message' => $request->message,
            'type' => $request->type,
        ]);

        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $record = Record::findOrFail($id);
        $record->status = 'полезное';
        $record->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Record $record)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Record $record)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Record $record)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Record $record)
    {
        //
    }
}

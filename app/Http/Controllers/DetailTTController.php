<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Timetable;
use App\DetailTT;
use App\User;
use Auth;

class DetailTTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB::table('messages')
        ->join('users', 'messages.message_to', '=', 'users.id');
        $messages   = $query->where('message_read_status', '=', 'Unread')->get();
        $timetables =   Timetable::all();

        $DetailTTs   =   DetailTT::all();
        return view('admin.timetable.detailTimetable', compact('messages', 'DetailTTs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.timetable.addTimetable');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [
            'unit_name'   =>  'required',
            'timetable_id'   =>  'required',
            'lectured_by'       =>  'required'
        ]);

        $userid      = Auth::user()->id;
        
        $timetabledetails   =   new DetailTT;
        $timetabledetails   ->  timetable_id     = $request->input('timetable_id');
        $timetabledetails   ->  unit_name        = $request->input('unit_name');
        $timetabledetails   ->  day              = $request->input('day');
        $timetabledetails   ->  time_start       = $request->input('start_at');
        $timetabledetails   ->  time_end         = $request->input('end_at');
        $timetabledetails   ->  lectured_by      = $request->input('lectured_by');
        $timetabledetails   ->  added_by         = $userid;
        $timetabledetails   ->  updated_by       = $userid;
        // $timetabledetails   ->  image              = $filename;
        $timetabledetails   ->  save();

        return back()->with('success', 'Action Confirmed');
        // route('timetables.show',$timetable->id)

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $query = DB::table('messages')
        ->join('users', 'messages.message_to', '=', 'users.id');
        $messages   = $query->where('message_read_status', '=', 'Unread')->get();

        $timetables =   Timetable::all();

        $detailTT = DetaillTT::all();
        return view('admin.timetable.addTimetable', compact('messages', 'timetableDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

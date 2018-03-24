<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Timetable;
use App\DetailTT;
use App\Course;
use App\Unit;
use App\User;
use App\Exam;
use Auth;

class TimetableController extends Controller
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

        return view('admin.timetable.index', compact('messages', 'timetables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $query = DB::table('messages')
        ->join('users', 'messages.message_to', '=', 'users.id');
        $messages   = $query->where('message_read_status', '=', 'Unread')->get();

        // return view('admin.timetable.create', compact('courses', 'units'));
        return view('admin.timetable.create', compact('messages'));
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
            'course_name'   =>  'required',
            'faculty'       =>  'required'
        ]);

        $userid = Auth::user()->id;

        $timetable   =   new Timetable;
        $timetable   ->  timetable_name   = $request->input('course_name');
        $timetable   ->  course_id        = $request->input('course_name');
        $timetable   ->  faculty          = $request->input('faculty');
        $timetable   ->  date_from        = $request->input('course_start');
        $timetable   ->  date_to          = $request->input('course_end');
        $timetable   ->  added_by         = $userid;
        $timetable   ->  updated_by       = $userid;
        // $timetable   ->  image              = $filename;
        $timetable   ->  save();

        return redirect('/timetabledetails')->with('success', 'Post Created');
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
        
        $timetable  = Timetable::find($id);
        
        $query1 = DB::table('detail_t_ts')
        ->join('timetables', 'detail_t_ts.timetable_id', '=', 'timetables.id');
        // $DetailTime   = $query->where('message_read_status', '=', 'Unread')->get();
        $DetailTime   = $query1->where('detail_t_ts.timetable_id', '=', $id)->get();
                
        // $query1 = DB::table('timetables')
        // ->join('detail_t_ts', 'timetables.id', '=', 'detail_t_ts.timetable_id');
        // // $DetailTime   = $query->where('message_read_status', '=', 'Unread')->get();
        // $DetailTime   = $query1->where('timetables.id', '=', $id)->get();

        // $DetailTime = DetailTT::where('timetable_id',$id);
        // $DetailTime = DetailTT::find($id);
        $timetableid= $id;
        return view('admin.timetable.addTimetable', compact('messages', 'DetailTime', 'timetableid'));
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

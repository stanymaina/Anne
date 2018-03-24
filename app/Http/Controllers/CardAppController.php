<?php

namespace App\Http\Controllers;

use App\CardApplication;
use Auth;
use App\User;
use Role;
use App\Faculty;
use App\IDCard;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CardAppController extends Controller
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
        
        $users   = User::all();
        $CardApps= CardApplication::all();
        return view('admin.cards.index', compact('messages','users','CardApps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users   = User::all();
        $faculties= Faculty::all();
        return view('cardApply', compact('users','faculties'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $AppType    = $request->input('AppType');
        // $this->validate($request , [
        //     'AppType'        =>  'required',
        //     'dateLost'       =>  'required',
        //     'faculty_id'     =>  'required'
        // ]);
        if ( $AppType == "Lost" ){
            $userid = Auth::user()->id;

            $CardApply   =   new CardApplication;
            $CardApply   ->  application_type   = $request->input('AppType');
            $CardApply   ->  applicant_id       = $userid;
            $CardApply   ->  faculty_id         = $request->input('faculty');
            $CardApply   ->  status_from        = $request->input('dateLost');
            $CardApply   ->  status_to          = "Undefined";
            // $CardApply   ->  added_by           = $userid;
            // $CardApply   ->  updated_by         = $userid;
            $CardApply   ->  save();

            // // $flight = App\Flight::find(1);
            // $flight =   new IDcard;
            // $flight =   IDcard::find($userid);
            // $flight ->  card_status = 'Lost';
            // $flight ->  save();

            return redirect('/cards/create')->with('success', 'Post Created');

        } else if ( $AppType == "PoliceAbstract" ) {

            $userid = Auth::user()->id;

            $CardApply   =   new CardApplication;
            $CardApply   ->  application_type   = $request->input('AppType');
            $CardApply   ->  applicant_id       = $userid;
            $CardApply   ->  faculty_id         = $request->input('faculty');
            $CardApply   ->  status_from        = $request->input('dateLost');
            $CardApply   ->  status_to          = "Undefined";
            // $CardApply   ->  added_by           = $userid;
            // $CardApply   ->  updated_by         = $userid;
            $CardApply   ->  save();

            // // $flight = App\Flight::find(1);
            // $flight =   new IDcard;
            // $flight =   IDcard::find($userid);
            // $flight ->  card_status = 'Lost';
            // $flight ->  save();

            return redirect('/cards/create')->with('success', 'Post Created');       
            
        } else if ( $AppType == "Absentism" ) {

            $userid = Auth::user()->id;

            $CardApply   =   new CardApplication;
            $CardApply   ->  application_type   = $request->input('AppType');
            $CardApply   ->  applicant_id       = $userid;
            $CardApply   ->  faculty_id         = $request->input('faculty');
            $CardApply   ->  status_from        = $request->input('DateFrom');
            $CardApply   ->  status_to          = $request->input('DateTo');
            // $CardApply   ->  added_by           = $userid;
            // $CardApply   ->  updated_by         = $userid;
            $CardApply   ->  save();

            // // $flight = App\Flight::find(1);
            // $flight =   new IDcard;
            // $flight =   IDcard::find($userid);
            // $flight ->  card_status = 'Lost';
            // $flight ->  save();

            return redirect('/cards/create')->with('success', 'Post Created');       
            
        }

    }

    public function lostCard(Request $request)
    {
        $this->validate($request , [
            'course_name'   =>  'required',
            'course_name'   =>  'required',
            'faculty'       =>  'required'
        ]);

        $userid = Auth::user()->id;

        $CardApply   =   new CardApplication;
        $CardApply   ->  application_type   = $request->input('AppType');
        $CardApply   ->  applicant_id       = $request->input('applicant_id');
        $CardApply   ->  faculty_id         = $request->input('faculty_id');
        $CardApply   ->  status_from        = $request->input('course_start');
        $CardApply   ->  status_to          = $request->input('course_end');
        $CardApply   ->  added_by           = $userid;
        $CardApply   ->  updated_by         = $userid;
        $CardApply   ->  save();

        return redirect('/cards/create')->with('success', 'Post Created');

    }

    public function PoliceAbstract(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CardApplication  $cardApplication
     * @return \Illuminate\Http\Response
     */
    // public function show(CardApplication $cardApplication)
    public function show($id)
    {
        $CardAppDetails =   CardApplication::find($id);
        // $Applicantid    =   $CardAppDetails->applicant_id;
        $Applicantid    =   6;
        $UserDetails    =   User::find($Applicantid);

        return view('admin.cards.show', compact('UserDetails','CardAppDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CardApplication  $cardApplication
     * @return \Illuminate\Http\Response
     */
    public function edit(CardApplication $cardApplication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CardApplication  $cardApplication
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CardApplication $cardApplication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CardApplication  $cardApplication
     * @return \Illuminate\Http\Response
     */
    public function destroy(CardApplication $cardApplication)
    {
        //
    }
}

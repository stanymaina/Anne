<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Message;
use App\ExamApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExamAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('student.exam.applyexam');
        $ExamApps   =   ExamApplication::all();
        return view('admin.exam.applications', compact('ExamApps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('examapply', compact('ExamApps'));
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
        if ( $AppType == "Special" ){
            $userid = Auth::user()->id;

            $ExamApply   =   new ExamApplication;
            $ExamApply   ->  application_type   = $request->input('AppType');
            $ExamApply   ->  exam_name          = $request->input('exam_name');
            $ExamApply   ->  applicant_reason   = $request->input('reason');
            $ExamApply   ->  applicant_id       = $userid;
            $ExamApply   ->  application_status = "Pending";
            // $CardApply   ->  updated_by         = $userid;
            $ExamApply   ->  save();

            // // $flight = App\Flight::find(1);
            // $flight =   new IDcard;
            // $flight =   IDcard::find($userid);
            // $flight ->  card_status = 'Lost';
            // $flight ->  save();

            return redirect('/cards/create')->with('success', 'Appication Made.');

        } else if ( $AppType == "Resit" ) {

            $userid = Auth::user()->id;

            $ExamApply   =   new ExamApplication;
            $ExamApply   ->  application_type   = $request->input('AppType');
            $ExamApply   ->  exam_name          = $request->input('exam_name');
            $ExamApply   ->  applicant_reason   = "Undefined";
            $ExamApply   ->  applicant_id       = $userid;
            $ExamApply   ->  application_status = "Pending";
            // $CardApply   ->  updated_by         = $userid;
            $ExamApply   ->  save();

            // // $flight = App\Flight::find(1);
            // $flight =   new IDcard;
            // $flight =   IDcard::find($userid);
            // $flight ->  card_status = 'Lost';
            // $flight ->  save();

            return redirect('examapplication')->with('success', 'Special Exam Application Made.');       
            
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ExamApp    = ExamApplication::find($id);
        $Applicants = User::find($ExamApp->applicant_id);

        return view('admin.exam.show', compact('ExamApp', 'Applicants'));
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
        $Response    = $request->input('action');
        $userid      = Auth::user()->id;
        $userdetails = User::find($userid);
        $username    = $userdetails->name;

        if ($Response == "Accept"){

            $ExamApp    = ExamApplication::find($id);
            $status     = $ExamApp->application_status    =   "Accepted";
            $Applicantid= $ExamApp->applicant_id;

            $Message   =   new Message;
            $Message   ->  message_from   = $userid;
            $Message   ->  message_to     = $Applicantid;
            $Message   ->  message_body   = "<p>This is to inform you that your special exam application has been accepted by, $username. You will be notified when the next exam will be offered.<br />
            Thank you.</p>";
            $Message   ->  save();

            return redirect('/examapplication')->with('success', 'Application accepted, Student shall be notified');

        } else if ( $Response == "Deny" ) {

            $ExamApp    = ExamApplication::find($id);
            $status     = $ExamApp->application_status    =   "Rejected";
            $Applicantid= $ExamApp->applicant_id;

            $Message   =   new Message;
            $Message   ->  message_from   = $userid;
            $Message   ->  message_to     = $Applicantid;
            $Message   ->  message_body   = "<p>This is to inform you that your special exam application has been rejected by, $username. You will be notified when the next exam will be offered.<br />
            Thank you.</p>";
            $Message   ->  save();

            return redirect('/examapplication')->with('success', 'Application rejected, Student shall be notified');

        }

        // return redirect('/examapplication')->with('success', 'Action Confirmed');
        //return back()->with('success','Updated');
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

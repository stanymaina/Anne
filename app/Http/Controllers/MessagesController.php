<?php

namespace App\Http\Controllers;

use Auth;
use Role;
use App\User;
use App\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function index()
    {   
        $userid      = Auth::user()->id;
        $query = DB::table('messages')
                ->join('users', 'messages.message_to', '=', 'users.id');
        $messages   = $query->where('message_read_status', '=', 'Unread')->get();
        
        $queryinbox = DB::table('messages')
                ->join('users', 'messages.message_from', '=', 'users.id');
        $messagesinbox = $query->where('messages.message_to', '=', $userid)->get();
        
        $users   = User::all();
        return view('message.index', compact('messages','messagesinbox','CardApps'));
    }
    public function update(Request $request, $id)
    {
            $MessageStatus  = Message::find($id);
            $status         = $MessageStatus->message_read_status    =   "Read";
            $MessageStatus->save();

            return redirect('/examapplication')->with('success', 'Application rejected, Student shall be notified');


        // return redirect('/examapplication')->with('success', 'Action Confirmed');
        return back()->with('success', 'Message read.');
    }
}

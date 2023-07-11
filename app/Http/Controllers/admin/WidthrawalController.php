<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\user\UserTranscations;
use App\Models\user\WidthrawBalance;
use Illuminate\Http\Request;

class WidthrawalController extends Controller
{
    public function index()
    {
        $widthrawals = WidthrawBalance::where('status','pending')->get();
        return view('admin.widthraw.index',compact('widthrawals'));
    }

    public function approvedWidthraw()
    {
        $widthrawals = WidthrawBalance::where('status','approved')->get();
        return view('admin.widthraw.approved',compact('widthrawals'));
    }

    public function rejectedWidthraw()
    {
        $widthrawals = WidthrawBalance::where('status','rejected')->get();
        return view('admin.widthraw.Rejected',compact('widthrawals'));
    }

    public function approve($id)
    {
        $widthraw = widthrawBalance::find($id);
        $widthraw->status = 'approved';
        $widthraw->save();

        $user_transcation = UserTranscations::where('user_id',$widthraw->user_id)->where('amount',$widthraw->amount)->first();
        $user_transcation->user_id = $widthraw->user_id;
        $user_transcation->amount = $widthraw->amount;
        $user_transcation->type = 'invest';
        $user_transcation->status = 'approved';
        $user_transcation->save();

        return redirect()->back()->with('success','User Widthraw approved successfully');
    }

    public function reject($id)
    {
        $widthraw = widthrawBalance::find($id);
        $widthraw->status = 'rejected';
        $widthraw->save();
        return redirect()->back()->with('success','User Widthraw rejected successfully');
    }

}

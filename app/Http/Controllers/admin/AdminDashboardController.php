<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\user\GamesPrice;
use App\Models\user\UserDeposit;
use App\Models\user\UserTranscations;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function users()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function bounce()
    {
        $games = GamesPrice::where('status', 'approved')->get();

        foreach ($games as $game) {
            // getting game daily commission
            $game_commission = $game->commission;
            // getting user
            $user_id = $game->user_id;
            // getting user transcations
            $user_transcations = UserTranscations::where('user_id', $user_id)->where('status', 'daily profit')->whereDate('created_at', Carbon::now())->get();

            if ($user_transcations != '') {
                $user = User::where('id', $user_id)->first();
                $user->balance += $game_commission;
                $user->save();

                // Storing in User Daily Transcations
                $user_transcation = new UserTranscations();
                $user_transcation->user_id = $user_id;
                $user_transcation->amount = $game_commission;
                $user_transcation->status = 'daily profit';
                $user->save();
            }
        }

        return redirect()->back()->with('success', 'All user got thier commission on thier approved games');
    }

    public function allDeposit()
    {
        $deposits = UserDeposit::where('status','pending')->get();
        return view('admin.deposit.index',compact('deposits'));
    }

    public function rejectedDeposit()
    {
        $deposits = UserDeposit::where('status','rejected')->get();
        return view('admin.deposit.reject',compact('deposits'));
    }

    public function approvedDeposit()
    {
        $deposits = UserDeposit::where('status','approved')->get();
        return view('admin.deposit.approved',compact('deposits'));
    }

    public function makeApprove($id)
    {
        $deposit = UserDeposit::find($id);
        $deposit->status = 'approved';
        $deposit->save();
        return redirect()->back()->with('success','User deposit approved successfully');

    }

    public function makeReject($id)
    {
        $deposit = UserDeposit::find($id);
        $deposit->status = 'rejected';
        $deposit->save();
        return redirect()->back()->with('success','User deposit rejected successfully');
    }

}

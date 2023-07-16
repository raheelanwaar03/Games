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

    public function editUser($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->balance += $request->balance;
        $user->save();
        return redirect()->back()->with('success', 'Balance added to user account successfully');
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
            $gameCommission = $game->commission;
            $gameAmount = $game->total_price;
            $game_commission = $gameAmount * $gameCommission / 100;
            // 20 % of commission
            $upliner = $game_commission * 20 / 100;
            // 15 % of commission
            $secondUpliner = $game_commission * 15 / 100;
            // 10 % of commission
            $thirdUpliner = $game_commission * 10 / 100;

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
                $user_transcation->type = 'daily profit';
                $user_transcation->status = 'given';
                $user_transcation->save();
            }
            $referal = $user->referal;
            // getting user referal
            if ($referal != 'default') {
                $user = User::where('referal', $referal)->first();
                $user->balance += $upliner;
                $user->save();

                // storing in transcations
                $user_transcation = new UserTranscations();
                $user_transcation->user_id = $user->id;
                $user_transcation->amount = $upliner;
                $user_transcation->type = 'rebate';
                $user_transcation->status = 'given';
                $user_transcation->save();

                //  getting second upliner
                $secondReferal = $user->referal;

                if ($secondReferal != 'default') {
                    $user->balance += $secondUpliner;
                    $user->save();
                }

                // storing in transcations
                $user_transcation = new UserTranscations();
                $user_transcation->user_id = $user->id;
                $user_transcation->amount = $upliner;
                $user_transcation->type = 'rebate';
                $user_transcation->status = 'given';
                $user_transcation->save();

                //  getting third upliner
                $thirdReferal = $user->referal;

                $user = User::where('referal', $thirdReferal)->first();

                if ($thirdReferal != 'default') {
                    $user->balance += $thirdUpliner;
                }

                // storing in transcations
                $user_transcation = new UserTranscations();
                $user_transcation->user_id = $user->id;
                $user_transcation->amount = $upliner;
                $user_transcation->type = 'rebate';
                $user_transcation->status = 'given';
                $user_transcation->save();
            }
        }

        return redirect()->back()->with('success', 'All users got thier commission on thier approved games');
    }

    public function allDeposit()
    {
        $deposits = UserDeposit::where('status', 'pending')->get();
        return view('admin.deposit.index', compact('deposits'));
    }

    public function rejectedDeposit()
    {
        $deposits = UserDeposit::where('status', 'rejected')->get();
        return view('admin.deposit.reject', compact('deposits'));
    }

    public function approvedDeposit()
    {
        $deposits = UserDeposit::where('status', 'approved')->get();
        return view('admin.deposit.approved', compact('deposits'));
    }

    public function makeApprove($id)
    {
        $deposit = UserDeposit::find($id);
        $deposit->status = 'approved';
        $deposit->save();

        $user_transcation = UserTranscations::where('user_id', $deposit->id)->where('amount', $deposit->amount)->first();
        $user_transcation->user_id = $deposit->user_id;
        $user_transcation->amount = $deposit->amount;
        $user_transcation->type = 'deposit';
        $user_transcation->status = 'approved';
        $user_transcation->save();

        return redirect()->back()->with('success', 'User deposit approved successfully');
    }

    public function makeReject($id)
    {
        $deposit = UserDeposit::find($id);
        $deposit->status = 'rejected';
        $deposit->save();

        $user_transcation = UserTranscations::where('user_id', $deposit->id)->where('amount', $deposit->amount)->first();
        $user_transcation->user_id = $deposit->user_id;
        $user_transcation->amount = $deposit->amount;
        $user_transcation->type = 'deposit';
        $user_transcation->status = 'rejected';
        $user_transcation->save();

        return redirect()->back()->with('success', 'User deposit rejected successfully');
    }
}

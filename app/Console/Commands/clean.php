<?php

namespace App\Console\Commands;

use App\Models\admin\AdminWallet;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;

class clean extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:clean';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Artisan::call('migrate:fresh');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        Artisan::call('route:clear');

        $wallet = new AdminWallet();
        $wallet->wallet_address = '0xb99826f0a1c4b3e42dddfe70c57d2e9e6a944c6f';
        $wallet->qr = asset('admin/images/qr.png');
        $wallet->status = '1';
        $wallet->save();



        $user = new User();
        $user->name = 'Raheel Anwaar';
        $user->email = 'admin@gmail.com';
        $user->referal = 'default';
        $user->balance = '0';
        $user->level = 'level 1';
        $user->password = Hash::make('asdfasdf');
        $user->status = 'approved';
        $user->role = 'admin';
        $user->save();


        $user = new User();
        $user->name = 'Hamza Anwaar';
        $user->email = 'user@gmail.com';
        $user->referal = 'default';
        $user->balance = '0';
        $user->level = 'level 1';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'user';
        $user->status = 'approved';
        $user->save();

        return Command::SUCCESS;
    }
}

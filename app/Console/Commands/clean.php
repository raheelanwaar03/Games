<?php

namespace App\Console\Commands;

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


        $user = new User();
        $user->name = 'Raheel Anwaar';
        $user->email = 'admin@gmail.com';
        $user->referal = 'default';
        $user->balance = '0';
        $user->password = Hash::make('asdfasdf');
        $user->status = 'approved';
        $user->role = 'admin';
        $user->save();


        $user = new User();
        $user->name = 'Hamza Anwaar';
        $user->email = 'user@gmail.com';
        $user->referal = 'default';
        $user->balance = '0';
        $user->password = Hash::make('asdfasdf');
        $user->role = 'user';
        $user->status = 'approved';
        $user->save();

        return Command::SUCCESS;
    }
}

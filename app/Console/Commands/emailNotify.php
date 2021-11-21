<?php

namespace App\Console\Commands;

use App\Mail\NotifyEmail;
use App\Models\Admin;
use App\Models\Merchant;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class emailNotify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'emailNotify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Email Notification to Admin hourly';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    public function __construct()
    {
        parent::__Construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $email = Admin::select('email')->get();
        $data = Merchant::where('created_at', '>', Carbon::now()->subHours(1)->toDateTimeString())->select('username', 'email', 'phone', 'trade_type');
        Mail::to($email)->send(new NotifyEmail($data));

    }
}


/*  https://github.com/shazaaly/merchantNotifyScheduler.git  */

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Notifications\NewMerchantNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $admin = Admin::where('id', 1);
        $notifications =$admin->unreadNotifications;
        return view('admin.index', compact('notifications'));
    }

}

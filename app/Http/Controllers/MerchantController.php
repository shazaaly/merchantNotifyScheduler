<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Merchant;
use App\Notifications\NewMerchantNotification;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class MerchantController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $token = Str::random(60);
        $api_token = hash('sha256', $token); // <- This will be used in client access

     $merchant=   Merchant::create([
            'username'=> $request->username,
            'token_name'=>$request->username.$api_token,

            'first_name'=> $request->first_name,
            'last_name'=> $request->last_name,
            'address'=> $request->address,
            'age'=> $request->age,
            'email'=> $request->email,
            'password'=> Hash::make($request->current_balance),
            'trade_type'=> $request->trade_type,
            'account_number'=> $request->account_number,
            'current_balance'=> $request->current_balance,
            'withdrawals'=> $request->withdrawals,
            'deposits'=> $request->deposits,
        ]);
        $notification = new NewMerchantNotification($merchant);
        $admin = Admin::where('id', 1)->get();
        Notification::send($admin, $notification);
        return response()->json(['success' => 'Successfully Added To Our Merchants']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function show(Merchant $merchant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function edit(Merchant $merchant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Merchant $merchant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Merchant  $merchant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merchant $merchant)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Notification;

class PaymentController extends Controller
{
    //
    public function index(){
        return view('payments');
    }

    public function store(){
        Notification::send(request()->user(), new PaymentReceived(900));

    }
}

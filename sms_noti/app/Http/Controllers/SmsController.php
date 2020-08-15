<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function sendSms(Request $request)
    {

        Nexmo::message()->send([
            'to'   => '959' . $request->mobile,
            'from' => '16105552344',
            'text' => $request->name . ' You made a traffic violation on ' . $request->date . '.So you have to take action for that.'
        ]);

        return "အကြောင်းကြားမှု ပြုလုပ်ပြီး ဖြစ်သည်။";
    }
}

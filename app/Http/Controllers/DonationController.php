<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function collectDonation(Request $request) {
            $incomingFields = $request->validate([
                'foodamount'=> 'required_if:type,individual'
            ]);
            $incomingFields['foodamount'] = strip_tags($incomingFields['foodamount']);
            $incomingFields['user_id'] = auth()->id();
            Donation::create($incomingFields);
            echo "Thank You for the Donation";
            return redirect('/shareFoodPage');
    }
}

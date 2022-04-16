<?php
// generating 6 digit unique user code

use App\Models\User;
use App\Models\user\Customer;

function generate_user_code($userType)
{
    $rand = rand(10000000, 99999999);
    $code = $userType . $rand;
    $user = User::where('code', $code)->first();
    if ($user) {
        generate_user_code($userType);
    } else {
        return $code;
    }
}


function Balance($customer_id)
{
    $balance = 0;
    $customer = Customer::find($customer_id);
    foreach ($customer->transactions as $transaction) {
        if ($transaction->sum == 'in') {
            $balance += $transaction->amount;
        } elseif ($transaction->sum == 'out') {
            $balance -= $transaction->amount;
        }
    }
    return $balance;
}

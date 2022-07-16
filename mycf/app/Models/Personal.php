<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personal extends Model
{
    use HasFactory;
    public function getDetail($customer_id)
    {
        $user = DB::select('SELECT * FROM tbl_customers WHERE customer_id=? ',[1]);
        return $user;
        dd($user);
    }
}

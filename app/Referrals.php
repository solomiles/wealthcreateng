<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referrals extends Model
{
    //
    protected $fillable = [
        'user_id','amount','remark',
    ];

    public function user() {

       return $this->belongsTo(User::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GetHelp extends Model
{
    //
    protected $fillable = [
        'gh_id','gh_amount','gh_matched','gh_confirmed',
    ];

    // get the Gethelp associated with the user

    public function user() {

        return $this->belongsTo(User::class);
    }
}

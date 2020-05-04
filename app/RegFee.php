<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegFee extends Model
{
    //
    protected $fillable = [
        'filename',
    ];
     /**
     * Get the regfee record associated with the user.
     */
    // public function user()
    // {
    //     return $this->belongsTo('App\User');
    // }
    public function user()
    {
      return $this->belongsTo(User::class);
    }
}

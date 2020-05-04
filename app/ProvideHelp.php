<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class ProvideHelp extends Model
{
    use Notifiable;
    
    //
    protected $fillable = [
        'ph_id','ph_amount','filename','ph_matched','ph_confirmed',
    ];
    
     /**
     * Get the help record associated with the user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

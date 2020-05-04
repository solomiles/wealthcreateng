<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    //
    protected $fillable = [
        'user_id','name','title','description',
    ];

    public function user() {

        return $this->belongsTo(User::class);
    }
}

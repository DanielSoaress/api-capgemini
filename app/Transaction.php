<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'account_from', 'account_to', 'status', 'amount',
    ];

    public function accountTo()
    {
        return $this->belongsTo('App\Account', 'account_to');
    }

    public function accountFrom()
    {
        return $this->belongsTo('App\Account', 'account_from');
    }
}


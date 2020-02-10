<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amount extends Model
{
    protected $table = 'payments';

    protected $fillable = ['user_id','token','amount'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}


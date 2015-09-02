<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
    protected $table = 'codes';

    protected $fillable = [
        'referall_code',
        'user_id',
        'service_id',
        'created_at',
        'updated_at'
    ];


}

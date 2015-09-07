<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    /**
     * Database table used by the model
     *
     * @var string
     */
    protected $table = 'services';

    protected $fillable = [
        'name'
    ];


    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('referall_code');
    }
}

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
        'name',
        'code_id'
    ];


    /**
     * A service can have many codes
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function code()
    {
        return $this->hasMany('App\Code');
    }
}

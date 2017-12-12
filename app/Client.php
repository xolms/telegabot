<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'clients';
    protected $fillable = [
        'tel_id',
        'first_name',
        'last_name',
        'city',
        'age',
        'gender',
        'vk_link',
        'mail'
    ];
}

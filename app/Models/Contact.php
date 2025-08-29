<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
     * fillable
     *
     * @var array
     */

    protected $fillable = [
        'name',
        'email',
        'message'
    ];
}

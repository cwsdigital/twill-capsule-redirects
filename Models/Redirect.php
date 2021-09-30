<?php

namespace App\Twill\Capsules\Redirects\Models;


use App\Twill\Capsules\Base\Model;

class Redirect extends Model
{

    protected $fillable = [
        'old_url',
        'new_url',
        'status',
    ];

}

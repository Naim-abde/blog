<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class follow extends Model
{
    protected $fillable = [
        "follwer_id",
        "follwing_id"

    ];
}

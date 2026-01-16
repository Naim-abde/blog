<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User;

class Post extends Model
{
    use SoftDeletes;
    protected $fillable = [
        "title",
        "description",
        "image",
        "category",
        "user_id"
        
        
    ];
   public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes():HasMany{
        return $this->hasMany(like::class);
    }
    

 }

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;
    protected $table = "episode";
    protected $fillable = [
        "episode_day",
        "user_id",
        "digits_two",
        "digits_three",
        "max_price_two",
        "max_price_three",
        "total"
    ];
}

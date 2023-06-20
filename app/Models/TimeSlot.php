<?php

namespace App\Models;

use App\Enums\WeekDay;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = [
        'week_day',
        'from_time',
        'to_time',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'week_day' => WeekDay::class,
        'from_time' => 'datetime:H:i',
        'to_time' => 'datetime:H:i',
    ];
}

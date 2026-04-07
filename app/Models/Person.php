<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use App\Observers\PersonObserver;

#[ObservedBy([PersonObserver::class])]
class Person extends Model
{
    protected $fillable=[
        'name',
        'position',
    ];
}

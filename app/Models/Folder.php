<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Observers\FolderObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;

#[ObservedBy([FolderObserver::class])]
class Folder extends Model
{
    protected $fillable=[
        'title',
        'content'
    ];
}

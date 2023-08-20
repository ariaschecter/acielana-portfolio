<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;

class Blog extends Model
{
    use HasFactory, Uuids;

    protected $guarded = ['id'];

    protected $casts = [
        'uuid' => 'string'
    ];
}

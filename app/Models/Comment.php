<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
class Comment extends Model
{
    use HasFactory, Uuids;

    protected $guarded = ['id'];

    protected $casts = [
        'uuid' => 'string'
    ];

    public function blog() {
        return $this->BelongsTo(Blog::class, 'parent_id', 'id');
    }

    public function project() {
        return $this->BelongsTo(Project::class, 'parent_id', 'id');
    }
}

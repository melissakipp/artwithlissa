<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'uuid';
    }
    // Note that it's singular because it's the inverse relationship
    public function user() {
        return $this->belongsTo(User::class);
    }
}
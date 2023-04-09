<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'role',
    ];

    public function users()
    {
        $this->belongsToMany(User::class);
    }
}

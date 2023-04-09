<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * @mixin Builder
 * @property mixed $title
 * @property mixed $preview
 * @property mixed $text
 * @property false|mixed|string $image
 * @property mixed $views
 */

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'preview',
        'text',
        'image',
    ];
}

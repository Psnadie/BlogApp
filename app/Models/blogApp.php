<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class blogApp extends Model
{
    protected $table = 'blog';

    protected $fillable = [
        'title',
        'entry',
        'text',
        'author',
        'genre',
        'path',
    ];
}

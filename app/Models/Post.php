<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
    ];


    public function title(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => ucfirst($value . "🤨"),
            set: fn(string $value) => Str::snake($value),
        );
    }
}

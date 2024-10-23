<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Post extends Model
{
    use HasFactory;

    // Connecting to table in mysql
    protected $table = 'post';

    // Fields allow to insert with Create or Update method
    // protected $fillable = [
    //     'title',
    //     'slug',
    //     'category',
    //     'content'
    // ];

    // Fields ignored to insert with Create or Update method
    protected $guarded = [
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean'
        ];
    }

    protected function title(): Attribute
    {
        return Attribute::make(
            // Mutator
            set: function ($value) {
                return strtolower($value);
            },
            // Accesor
            get: function ($value) {
                return ucfirst($value);
            }
        );
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

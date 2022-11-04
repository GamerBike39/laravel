<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Livre extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'desc', 'price','image'];

    public function getSlugAttribute(): string
    {
        return Str::slug($this->title);
    }


}

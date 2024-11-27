<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

use function Pest\Laravel\get;

class Author extends Model
{
    /** @use HasFactory<\Database\Factories\AuthorFactory> */
    use HasFactory;

    protected $guarded = [];

    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class, 'book_authors');
    }

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->first_name. ' ' .$this->last_name
        );
    }
}



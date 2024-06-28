<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author', 'slug', 'body'];
    protected $with = ['author', 'kategori'];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function kategori(): BelongsTo
    {
        return $this->belongsTo(Kategori::class);
    }

    public function scopeFilter(Builder $query, array $filters): void
    {
        if ($filters['search'] ?? false) {
            $query->when($filters['search'] ?? false, fn ($query, $search) =>
                $query->where('title', 'like', '%' . request('search') . '%');
            );
        }
    }
}

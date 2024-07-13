<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'user_id',
        'tag_id',
    ];

    // protected $with = ['user', 'answer', 'tag'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function answer(): HasMany
    {
        return $this->hasMany(Answer::class);
    }

    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }

}

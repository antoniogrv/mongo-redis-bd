<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Collection;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Relations\BelongsTo;
use Jenssegers\Mongodb\Relations\HasMany;

/**
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $body
 * @property integer $author_id
 * @property Author $author
 * @property Collection|Comment $comments
 */
class Post extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $fillable = [
        'title',
        'description',
        'body',
        'author_id'
    ];

    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }

    public function author(): BelongsTo {
        return $this->belongsTo(Author::class);
    }
}

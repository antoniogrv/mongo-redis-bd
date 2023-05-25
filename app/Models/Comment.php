<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Relations\BelongsTo;

/**
 * @property integer $id
 * @property string $body
 * @property integer $post_id
 * @property integer $author_id
 * @property Author $author
 * @property Post $post
 */
class Comment extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $fillable = [
        'author_id',
        'post_id',
        'body'
    ];

    public function post(): BelongsTo {
        return $this->belongsTo(Post::class);
    }

    public function author(): BelongsTo {
        return $this->belongsTo(Author::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Collection;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Relations\HasMany;

/**
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property Collection|Post $posts
 * @property Collection|Comment $comments
 */
class Author extends Model
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $fillable = [
        'first_name',
        'last_name'
    ];

    public function posts(): HasMany {
        return $this->hasMany(Post::class);
    }

    public function comments(): HasMany {
        return $this->hasMany(Comment::class);
    }
}

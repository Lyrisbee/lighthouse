<?php

namespace Tests\Utils\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Primary key.
 *
 * @property int $category_id
 *
 * Attributes
 * @property string $name
 *
 * Timestamps
 * @property \lluminate\Support\Carbon $created_at
 * @property \lluminate\Support\Carbon $updated_at
 */
class Category extends Model
{
    protected $primaryKey = 'category_id';

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class, 'category_post', 'post_id', 'category_id');
    }
}

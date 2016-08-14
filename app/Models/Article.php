<?php

namespace Melon\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use Melon\Models\Scopes\StateScopes;
use Melon\Models\Mutators\StateMutators;

class Article extends Model
{
    use SoftDeletes;
    use Sluggable;
    use StateScopes;
    use StateMutators;

    protected $fillable = ['title', 'content'];
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public $states = [
        'draft' => 0,
        'published' => 1,
    ];

    /**
     * Get the user that created the article.
     */
    public function user()
    {
        return $this->belongsTo('Melon\Models\User');
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
            ],
        ];
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BlogPost
 *
 * @package App/Models
 *
 * @property \App\Models\BlogCategory $category
 * @property \App\Models\User         $user
 * @property string                   $title
 * @property string                   $slug
 * @property string                   $content_html
 * @property string                   $content_raw
 * @property string                   $excerpt
 * @property string                   $published_at
 * @property boolean                  $is_published
 * @property int $id
 * @property int $category_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPost newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPost newQuery()
 * @method static \Illuminate\Database\Query\Builder|BlogPost onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPost query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPost whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPost whereContentHtml($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPost whereContentRaw($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPost whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPost whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPost whereExcerpt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPost whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPost whereIsPublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPost wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPost whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPost whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPost whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogPost whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|BlogPost withTrashed()
 * @method static \Illuminate\Database\Query\Builder|BlogPost withoutTrashed()
 * @mixin \Eloquent
 */
class BlogPost extends Model
{
    use SoftDeletes;

    protected $fillable
        =[
            'title',
            'slug',
            'category_id',
            'excerpt',
            'content_raw',
            'is_published',
            'published_at',
            'user_id',
        ];

    /**
     * Категория статьи.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        //Статья принадлежит пользователю
        return $this->belongsTo(BlogCategory::class);
    }

    /**
     * Автор статьи.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        //Статья принадлежит пользователю
        return $this->belongsTo(User::class);
    }
}

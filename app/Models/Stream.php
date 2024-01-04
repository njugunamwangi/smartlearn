<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Stream extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasSlug;

    public const CREATED_AT = null;
    public const UPDATED_AT = null;

    protected $guarded = [];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('stream')
            ->saveSlugsTo('slug');
    }
}

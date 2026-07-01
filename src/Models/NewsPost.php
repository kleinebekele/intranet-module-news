<?php

namespace Intranet\Modules\News\Models;

use Illuminate\Database\Eloquent\Model;

class NewsPost extends Model
{
    protected $fillable = ['title', 'body', 'user_id'];
}

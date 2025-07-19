<?php

namespace App\Models;

use App\Models\User;
use App\Models\Visitor;
use App\Helpers\CmsAsset;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Page extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = true;
    protected $table = 'pages';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'description',
        'title',
        'image',
        'slug',
        'route',
        'content'
    ];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function visitorCount()
    {
        return $this->hasMany(Visitor::class, 'page_id', 'id')->count();
    }


    public function getContentDisplayAttribute()
    {
        return preg_replace_callback(
            '/src="\/?(storage\/pages\/images\/[^"]+)"/',
            function ($matches) {
                $relativePath = str_replace('storage/', '', $matches[1]);
                return 'src="' . CmsAsset::url($relativePath) . '"';
            },
            $this->content
        );
    }

}

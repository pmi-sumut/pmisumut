<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'categories';
    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'slug',
        'description',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}

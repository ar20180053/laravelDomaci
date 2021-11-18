<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use SebastianBergmann\CodeUnit\FunctionUnit;

class Post extends Model
{
    use HasFactory;

    //protected $fillable = ['slug', 'title', 'body'];
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

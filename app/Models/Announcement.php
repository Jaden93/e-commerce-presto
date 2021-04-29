<?php

namespace App\Models;

use App\Models\User;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
<<<<<<< HEAD
use Laravel\Scout\Searchable;
=======


>>>>>>> 7bf3e132190be9c5e96a66afc8152a496026338a
class Announcement extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'title',
        'description',
        'price',
        'user_id',
        'category_id',
    ];


    public function user() {
        return $this->belongsTo(User::class);
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
    static public function ToBeRevisionedCount() {
        return Announcement::where('is_accepted',null)->count();
    }

    public function toSearchableArray()
    {
        $category=$this->category;
        $array = [
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description,
            'category'=>$category,
        ];
        return $array;
    }
}

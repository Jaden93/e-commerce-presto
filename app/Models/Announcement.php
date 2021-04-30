<?php

namespace App\Models;

use App\Models\User;
use Laravel\Scout\Searchable;
use App\Models\AnnouncementImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
            'category'=>$category->id,
        ];
        return $array;
    }

    public function images()
    {
        return $this->hasMany(AnnouncementImage::class);
    }
}

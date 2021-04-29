<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;
class Announcement extends Model
{
    use HasFactory;


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
}

<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    use Sluggable;
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'iframe',
        'image',
        'user_id'
    ];
   

    public function sluggable(): array

    {
        return [
            'slug' => [
                'source' => 'title',
                'onUpdate'=> true 
            ]
        ];
    }

    public function user(){
        return $this -> belongsTo(User::class);
    }

    public function getGetExcerptAttribute()
    {
        return substr($this->body, 0, 140);
    }

    public function getGetImageAttribute()
    {
        if($this->image){
            return url("storage/$this->image");
        }
    }

}

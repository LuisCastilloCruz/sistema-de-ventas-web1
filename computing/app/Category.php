<?php

namespace App;

use App\Subcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;  

class Category extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name', 'module', 'slug','icon','front',
    ];
    protected $dates = ['deleted_at'];
    protected $hidden = ['create_at'. 'update_at'];
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }
    public function tag(){
        return $this->hasMany(Tag::class);
    }
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
<?php

namespace App;

use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;  

class Tag extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name','category_id', 'slug','icon','front',
    ];
    protected $dates = ['deleted_at'];
    protected $hidden = ['create_at'. 'update_at'];
    public function products(){
        return $this->belongsToMany(Product::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
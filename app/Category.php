<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use softDeletes;

    public function products()
    {
        return $this->hasMany(Product::Class);
    }
    protected $fillable = [
        'name'
    ];
    protected static function booted()
    {
        static::deleting(function ($category) {
            if ($category->products()->exists()) {
                throw new \Exception('Related products found');
            }
        });
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
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
        static::deleting(function ($project) {
            if ($project->products()->exists()) {
                throw new \Exception('Related products found');
            }
        });
    }
}

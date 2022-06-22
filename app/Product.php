<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use softDeletes;

    public function project()
    {
        return $this->belongsTo(Project::Class);
    }
    public function category()
    {
        return $this->belongsTo(Category::Class);
    }
    protected $fillable = [
        'category_id',
        'project_id',
        'name',
        'detail'
    ];
}

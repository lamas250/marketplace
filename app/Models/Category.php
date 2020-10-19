<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
//    protected $table = 'categories';
    protected $fillable = [ 'name','description','slug' ];

    public function products()
    {
        return $this->belongsToMany(Products::class);
    }
}
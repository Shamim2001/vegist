<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];

    // Category Relation
    function category() {
        return $this->belongsTo(Category::class);
    }

    // Gallery Relation
    function gallery() {
        return $this->hasMany(Gallery::class);
    }
}

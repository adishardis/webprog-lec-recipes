<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

    public function recipes()
    {
        return $this->belongsToMany(Recipe::class, 'category_details');
    }

    public function categoryDetails()
    {
        return $this->hasMany(CategoryDetail::class);
    }
}

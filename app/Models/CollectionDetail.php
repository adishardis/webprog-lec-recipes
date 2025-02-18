<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollectionDetail extends Model
{
    use HasFactory;
    protected $table = 'collection_details';
    protected $primaryKey = 'id';
    protected $timestamp = true;
    protected $guarded = [];

}
